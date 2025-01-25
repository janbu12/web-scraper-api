<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class WebScrapperController extends Controller
{
    public function index(Request $request, $type = 'sales', $region = null, $city = null, $district = null)
    {
        $client = new Client();

        $formatLocation = function ($location) {
            return strtolower(trim(str_replace(' ', '-', $location)));
        };

        // Base URL
        $baseUrl = 'https://www.dotproperty.id/en/properties-' . ($type === 'rent' ? 'for-rent' : 'for-sale');

        // Join URL to base URL
        if ($region) {
            $region = $formatLocation($region);
            $baseUrl .= '/' . $region;
        }

        if ($city) {
            $city = $formatLocation($city);
            $baseUrl .= '/' . $city;
        }

        if ($district) {
            $district = $formatLocation($district);
            $baseUrl .= '/' . $district;
        }

        // Parameter page
        $page = $request->query('page', 1);

        // Validation page number
        if (!is_numeric($page) || $page < 1) {
            return response()->json([
                'error' => 'Invalid page number. Page must be a positive integer.',
            ], 400);
        }

        $minHarga = $request->input('min_harga', 0);
        $maxHarga = $request->input('max_harga', PHP_INT_MAX);

        $url = $baseUrl . '?page=' . $page;

        try {
            $response = $client->request('GET', $url);
            $htmlContent = $response->getBody()->getContents();
            $crawler = new Crawler($htmlContent);

            // IsResults?
            if ($crawler->filter('#search-results article')->count() === 0) {
                return response()->json([
                    'error' => 'No properties found for the specified region, city, or page.',
                ], 404);
            }

            // Get the data
            $data = $crawler->filter('#search-results article')
                ->each(function (Crawler $node) {
                    $externalHref = $node->filter('div.col-span-6.p-7 a')->attr('href');
                    $internalHref = preg_replace('/.*\/ads\//', env('VITE_URL') . "/property/", $externalHref);
                    $id = preg_replace('/.*\/ads\//', "", $externalHref);

                    $priceString = $node->filter('div.text-secondary-base.font-bold')->text('No Price');
                    $price = $this->processPrice($priceString);

                    return [
                        'id'=> $id,
                        'href' => $internalHref,
                        'title' => $node->filter('div.text-2xl.font-semibold')->text('No Title'),
                        'images' => $node->filter('li.glide__slide a img')->each(function (Crawler $imgNode) {
                            return $imgNode->attr('src');
                        }),
                        'price' => $price,
                        'detail_price' => $node->filter('div.text-neutral-2.font-bold.text-xl')->text(''),
                        'location' => $node->filter('div.text-neutral-2')->text('No Location'),
                        'badges' => $node->filter('ul.list-none.p-0.gap-x-5 li')->each(function ($facility) {
                            $facilityText = $facility->text();
                            $img = $facility->filter('img');
                            $imgSrc = $img->count() > 0 ? $img->attr('src') : '';
                            return [
                                'text' => $facilityText,
                                'img_src' => $imgSrc ? 'https:' . $imgSrc : "",
                            ];
                        }),
                        'fasilities' => $node->filter('ul.flex.flex-row li')->each(function (Crawler $facilityNode) {
                            return trim($facilityNode->text());
                        }),
                        'description' => $node->filter('a div.line-clamp-4')->text('No Description'),
                    ];
                });

                // Filter properties based on price range
                $filteredData = array_filter($data, function ($property) use ($minHarga, $maxHarga) {
                    return $property['price'] >= $minHarga && $property['price'] <= $maxHarga;
                });

            return response()->json(array_values($filteredData));

        } catch (RequestException $e) {
            return response()->json([
                'error' => 'Failed to fetch data. The region, city, or page may not exist.',
                'details' => $e->getMessage(),
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    public function recommendations(Request $request)
    {
        $client = new Client();

        // Validate the incoming request
        $request->validate([
            'tipe' => 'required|string|in:beli,sewa',
            'jumlah_orang' => 'required|integer|min:1',
            'min_harga' => 'required|integer|min:0',
            'max_harga' => 'required|integer|min:0',
            'fasilities' => 'required|array',
            'location1' => 'required|string',
            'location2' => 'nullable|string',
            'location3' => 'nullable|string',
        ]);

        // Determine the number of bedrooms based on the number of people
        $jumlahOrang = $request->input('jumlah_orang');
        $bedrooms = ceil($jumlahOrang / 2); // 1 bedroom for 2 people

        // Prepare the base URL based on the property type
        $baseUrl = 'https://www.dotproperty.id/en/properties-' . ($request->input('tipe') === 'sewa' ? 'for-rent' : 'for-sale');

        // Prepare locations
        $locations = [
            $request->input('location1'),
            $request->input('location2'),
            $request->input('location3'),
        ];

        // Initialize an array to hold the results
        $results = [];

        // Loop through each location to scrape properties
        foreach ($locations as $index => $location) {
            if ($location) {
                // Format the location for the URL
                // $formattedLocation = strtolower(trim(str_replace(' ', '-', $location)));
                $url = $baseUrl . '/' . $location;

                try {
                    // Make the GET request to scrape properties
                    $response = $client->request('GET', $url);
                    $htmlContent = $response->getBody()->getContents();
                    $crawler = new Crawler($htmlContent);

                    if ($crawler->filter('#search-results article')->count() === 0) {
                        // Log that no properties were found for this location
                        Log::info("No properties found for location: " . $location);
                        continue; // Skip to the next location
                    }

                    // Get the data
                    $data = $crawler->filter('#search-results article')
                        ->each(function (Crawler $node) {
                            $externalHref = $node->filter('div.col-span-6.p-7 a')->attr('href');
                            $internalHref = preg_replace('/.*\/ads\//', env('VITE_URL') . "/property/", $externalHref);
                            $id = preg_replace('/.*\/ads\//', "", $externalHref);

                            // Process the price
                            $priceString = $node->filter('div.text-secondary-base.font-bold')->text('No Price');
                            $price = $this->processPrice($priceString); // Call the price processing function

                            $badges = $node->filter('ul.list-none.p-0.gap-x-5 li')->each(function ($facility) {
                                return trim($facility->text());
                            });
                            $bedrooms = isset($badges[0]) ? (int)filter_var($badges[0], FILTER_SANITIZE_NUMBER_INT) : 0;


                            return [
                                'id' => $id,
                                'href' => $internalHref,
                                'title' => $node->filter('div.text-2xl.font-semibold')->text('No Title'),
                                'images' => $node->filter('li.glide__slide a img')->each(function (Crawler $imgNode) {
                                    return $imgNode->attr('src');
                                }),
                                'price' => $price,
                                'detail_price' => $node->filter('div.text-neutral-2.font-bold.text-xl')->text(''),
                                'location' => $node->filter('div.text-neutral-2')->text('No Location'),
                                'badges' => $badges,
                                'fasilities' => $node->filter('ul.flex.flex-row li')->each(function (Crawler $facilityNode) {
                                    return trim($facilityNode->text());
                                }),
                                'description' => $node->filter('a div.line-clamp-4')->text('No Description'),
                                'bedrooms' => $bedrooms,
                            ];
                        });

                    // Merge the results
                    $results = array_merge($results, $data);

                } catch (RequestException $e) {
                    if ($e->getResponse()->getStatusCode() === 404) {
                        continue; // Skip to the next location
                    }

                    return response()->json([
                        'error' => 'Failed to fetch data for ' . $location,
                        'details' => $e->getMessage(),
                    ], 500);
                } catch (\Exception $e) {
                    // Log unexpected errors
                    Log::error("An unexpected error occurred while scraping data: " . $e->getMessage());
                    continue; // Skip to the next location
                }
            }
        }

        // Filter results based on price range and facilities
        $filteredResults = array_filter($results, function ($property) use ($request, $bedrooms) {
            return $property['price'] >= $request->input('min_harga') &&
                $property['price'] <= $request->input('max_harga') &&
                !empty($property['fasilities']) &&
                count(array_intersect($property['fasilities'], $request->input('fasilities'))) > 0 &&
                $property['bedrooms'] >= $bedrooms && $property['bedrooms'] > 0 && $property['bedrooms'] < 100;
        });

        // Check if filtered results are empty
        if (empty($filteredResults)) {
            return response()->json([
                'message' => 'No properties found matching your criteria.',
            ], 404);
        }

        return response()->json(array_values($filteredResults)); // Return filtered results
    }


    public function show($slug)
    {
        $client = new Client();

        // Base URL untuk properti individu
        $url = 'https://www.dotproperty.id/en/ads/' . $slug;

        try {
            // Kirim permintaan HTTP GET
            $response = $client->request('GET', $url);

            // Dapatkan konten HTML
            $htmlContent = $response->getBody()->getContents();

            // Gunakan DomCrawler untuk memparsing HTML
            $crawler = new Crawler($htmlContent);

            // Ambil detail properti (sesuaikan dengan struktur halaman detail properti)
            $details = [
                'title' => $crawler->filter('h1.page-title')->text(''),
                'breadcrumb' => $crawler->filter('ol.breadcrumb li')->each(function (Crawler $crumbNode) {
                    return $crumbNode->text();
                }),
                'view-price' => $crawler->filter('div.price-title')->text(''),
                'price-value' => floatval($crawler->filter('input[name="price"]')->attr('value')),
                'location' => $crawler->filter('div.location')->text(''),
                'title-description' => $crawler->filter('h2.custom-title')->text(''),
                'description' => $crawler->filter('div.text-description')->count()
                    ? $crawler->filter('div.text-description')->each(function (Crawler $node) {
                        // Hapus elemen <form>
                        $node->filter('form')->each(function (Crawler $formNode) {
                            foreach ($formNode as $form) {
                                $form->parentNode->removeChild($form);
                            }
                        });
                        // Ambil HTML tanpa <form>
                        return $node->html();
                    })[0]
                    : null,
                'key_features' => $crawler->filter('ul.key-featured li')->each(function ($feature) {
                            $featureText = $feature->text();
                            $img = $feature->filter('img');
                            $imgSrc = $img->count() > 0 ? $img->attr('src') : '';
                            return [
                                'text' => $featureText,
                                'img_src' => $imgSrc ? 'https:' . $imgSrc : "",
                            ];
                }),
                'facilities' => $crawler->filter('ul.facilities li')->each(function ($facility) {
                            $facilityText = $facility->text();
                            $img = $facility->filter('img');
                            $imgSrc = $img->count() > 0 ? $img->attr('src') : '';
                            return [
                                'text' => $facilityText,
                                'img_src' => $imgSrc ? 'https:' . $imgSrc : "",
                            ];
                }),
                'latitude' => $crawler->filter('div[itemprop="geo"] meta[itemprop="latitude"]')->attr('content'),
                'longitude' => $crawler->filter('div[itemprop="geo"] meta[itemprop="longitude"]')->attr('content'),
                'images' => array_merge(
                        //ambil main photo
                        $crawler->filter('div.main-photo img')->each(function (Crawler $imgNode) {
                            return $imgNode->attr('src');
                        }),

                        // Ambil sub photo yang li pertama
                        [$crawler->filter('div.sub-photo ul.thumbs li:first-child img')->attr('src')],

                        // Ambil details photo
                        $crawler->filter('li[data-src]')->each(function (Crawler $liNode) {
                            return $liNode->attr('data-src');
                        }),
                    ),
                'provided_by' => [
                    'name' => $crawler->filter('div.user-profile-box .name a strong')->text(''),
                    'href' => $crawler->filter('div.user-profile-box .name a')->attr('href'),
                    'img' => $crawler->filter('div.user-profile-box .company-logo img')->attr('src'),
                ],
            ];

            return response()->json($details);
        } catch (RequestException $e) {
            return response()->json([
                'error' => 'Failed to fetch data for the specified property.',
                'details' => $e->getMessage(),
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    public function distance(Request $request)
    {
        $client = new Client();
        $destination = $request->input('destination');
        $origin = $request->input('origin');

        $url = 'https://maps.googleapis.com/maps/api/directions/json?destination=place_id:' . $destination . '&origin=place_id:' . $origin . '&key=' . env('GOOGLE_MAPS_API_KEY');
        try {
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);

            // Check if the response contains valid routes
            if (isset($data['routes']) && count($data['routes']) > 0) {
                // Extract the distance from the first route
                $distance = $data['routes'][0]['legs'][0]['distance']['text']; // e.g., "10 km"
                $distanceValue = $data['routes'][0]['legs'][0]['distance']['value']; // Distance in meters

                return response()->json([
                    'distance' => $distance,
                    'distance_value' => $distanceValue, // Distance in meters
                ]);
            } else {
                return response()->json([
                    'error' => 'No routes found for the specified origin and destination.',
                ], 404);
            }
        }
        catch (RequestException $e) {
            return response()->json([
                'error' => 'Failed to calculate distance.',
                'details' => $e->getMessage(),
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    private function processPrice($priceString)
    {
        // Remove "RP" and trim whitespace
        $priceString = trim(str_replace('RP', '', $priceString));

        // Check if the price contains "billion"
        if (stripos($priceString, 'billion') !== false) {
            // Remove "billion" and convert to double
            $priceString = str_replace('billion', '', $priceString);
            $price = $priceString * 1000000000; // Convert to double and multiply by 1 billion
        } else {
            // Remove any commas and convert to double
            $priceString = str_replace(',', '', $priceString);
            $price = $priceString * 1; // Convert to double
        }

        return $price;
    }
}
