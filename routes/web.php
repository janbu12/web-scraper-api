<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebScrapperController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->middleware('api.key')->group(function () {
    Route::get('/properties/{type?}', [WebScrapperController::class, 'index']);
    Route::get('/properties/{type}/{region}', [WebScrapperController::class, 'index']);
    Route::get('/properties/{type}/{region}/{city}', [WebScrapperController::class, 'index']);
    Route::get('/properties/{type}/{region}/{city}/{district}', [WebScrapperController::class, 'index']);
    Route::get('/property/{slug}', [WebScrapperController::class, 'show']);
    Route::post('/distance', [WebScrapperController::class, 'distance']);
    Route::post('/properties/recommendations', [WebScrapperController::class, 'recommendations']);
});
