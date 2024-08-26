<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Restaurant;
use App\Models\RestaurantArticle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RestaurantApiController extends Controller
{
    public function getRestaurants(): JsonResponse
    {
        return response()->json(Restaurant::all());
    }
    public function allocateArticles($restaurantId): JsonResponse
    {
        return response()->json(Article::query()
            ->whereIn('id', RestaurantArticle::query()
                ->where('restaurant_id', $restaurantId)
                ->get()
                ->pluck('article_id')
            )->get()
        );
    }
}
