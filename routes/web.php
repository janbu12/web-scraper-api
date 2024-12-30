<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebScrapperController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->middleware('api.key')->group(function () {
    Route::get('/properties', [WebScrapperController::class, 'index']);
    Route::get('/properties/{region}', [WebScrapperController::class, 'index']);
    Route::get('/properties/{region}/{city}', [WebScrapperController::class, 'index']);
    Route::get('/properties/{region}/{city}/{district}', [WebScrapperController::class, 'index']);
    Route::get('/property/{slug}', [WebScrapperController::class, 'show']);
});
