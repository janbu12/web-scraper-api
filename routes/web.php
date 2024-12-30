<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\WebScrapperController;

Route::get('/', [WebScrapperController::class, 'index']);
Route::get('/properties/{region}', [WebScrapperController::class, 'index']);
Route::get('/properties/{region}/{city}', [WebScrapperController::class, 'index']);
Route::get('/properties/{region}{city}{district}', [WebScrapperController::class, 'index']);

Route::get('/property/{slug}', [WebScrapperController::class, 'show']);


