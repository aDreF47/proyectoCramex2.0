<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;

Route::get('/api/carousel-images', [CarouselController::class, 'getImages']);

Route::get('/carrusel', function () {
    return view('carrusel');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});

