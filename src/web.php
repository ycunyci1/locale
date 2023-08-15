<?php

use Illuminate\Support\Facades\Route;
use Pavelutkin\Location\Controllers\SypexGeoController;

Route::group(['prefix' => 'sypex'], function () {
    Route::post('get-info', [SypexGeoController::class, 'index']);
});
