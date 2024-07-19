<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MovieController extends Controller
{
    public function index(): JsonResponse{
        $movies = Movie::with('directors', 'actors', 'genres', 'ratings')->get();
        return response()->json($movies);
    }
    public function show(int $id): JsonResponse{
        $movie = Movie::findOrFail($id);
        $movie = $movie->load('directors', 'actors', 'genres', 'ratings');
        return response()->json($movie);
    }
    public function showByGenre(int $genre): JsonResponse{
        $genre = Genre::findOrFail($genre);
        return response()->json($genre->movies);
    }
    public function showByRate(int $rate): JsonResponse{
        $rate = Rating::findOrFail($rate);
        return response()->json($rate->movies);
    }
}
