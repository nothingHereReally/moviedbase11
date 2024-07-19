<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DirectorController extends Controller
{
    public function show(int $id): JsonResponse{
        $director = Director::findOrFail($id);
        $director = $director->load('movies');
        return response()->json($director);
    }
}
