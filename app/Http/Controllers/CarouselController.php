<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;

class CarouselController extends Controller
{
    public function getImages()
    {
        $images = CarouselImage::all(); // Obtener todas las imágenes
        return response()->json($images); // Devolver como JSON
    }
}
