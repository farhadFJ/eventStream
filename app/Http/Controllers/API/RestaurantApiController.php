<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantArticle;
use Illuminate\Http\Request;

class RestaurantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Restaurant::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'restaurant_tel' => 'required|string|max:255',
            'restaurant_email' => 'required|string|email|max:255',
            'opening_hours' => 'required|string|time|max:255',
        ]);
        $restaurant = Restaurant::query()->create($request->all());
        return response()->json($restaurant, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Restaurant::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::query()->findOrFail($id);
        $restaurant->update($request->all());
        return response()->json($restaurant, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Restaurant::destroy($id);
        return response()->json(null, 204);
    }
    public function allocateArticles(Request $request,$restaurantId)
    {
        $request->validate([
            'article_ids' => 'required|array',
            'article_ids.*' => 'exists:articles,id', // Validate each article_id exists in the articles table
        ]);

        $restaurant = Restaurant::query()->findOrFail($restaurantId);
        $allocatedArticleIds = $restaurant->articleallotment()->pluck('article_id');


        return response()->json($allocatedArticleIds);
    }
}
