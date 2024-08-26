<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ArticleGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleGroupApiController extends Controller
{
    public function getArticleGroups(): JsonResponse
    {
        return response()->json(ArticleGroup::all());
    }
}
