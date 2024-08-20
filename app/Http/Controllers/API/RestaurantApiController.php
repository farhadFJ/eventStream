<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Restaurant;
use App\Models\RestaurantArticle;
use Illuminate\Http\Request;

class RestaurantApiController extends Controller
{
    public function allocateArticles($restaurantId): \Illuminate\Http\JsonResponse
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
