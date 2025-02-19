<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;

Route::get('/api/carousel-images', [CarouselController::class, 'getImages']);

Route::get('/carrusel', function () {
    return view('carrusel');
});

Route::get('/intranet', function () {
    return view('intranet');
});

Route::get('/contactenos', function () {
    return view('contactenos');
});

