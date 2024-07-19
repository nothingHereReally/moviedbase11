<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ActorController extends Controller
{
    public function show(int $id): JsonResponse{
        $actor = Actor::findOrFail($id);
        $actor = $actor->load('movies');
        return response()->json($actor);
    }
}
