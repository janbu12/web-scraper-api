<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\RequestException;

class WebScrapperController extends Controller
{
    public function index(Request $request, $region = null, $city = null, $district = null)
    {
        $client = new Client();

        // Base URL
        $baseUrl = 'https://www.dotproperty.id/en/properties-for-sale';

        // Join URL to base URL
        if ($region) {
            $baseUrl .= '/' . $region;
        }

        if ($city) {
            $baseUrl .= '/' . $city;
        }

        if ($district) {
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

                    return [
                        'id'=> $id,
                        'href' => $internalHref,
                        'title' => $node->filter('div.text-2xl.font-semibold')->text('No Title'),
                        'images' => $node->filter('li.glide__slide a img')->each(function (Crawler $imgNode) {
                            return $imgNode->attr('src');
                        }),
                        'price' => $node->filter('div.text-secondary-base.font-bold')->text('No Price'),
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
            return response()->json($data);

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
                'view-price' => $crawler->filter('div.price-title')->text(''),
                'price-value' => floatval($crawler->filter('input[name="price"]')->attr('value')),
                'location' => $crawler->filter('div.location')->text(''),
                'title-description' => $crawler->filter('h2.custom-title')->text(''),
                'description' => $crawler->filter('div.text-description')->text(''),
                'images' => $crawler->filter('div.gallery img')->each(function (Crawler $imgNode) {
                    return $imgNode->attr('src');
                }),
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
}
