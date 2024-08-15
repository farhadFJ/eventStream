<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ArticleAllotmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('restaurants')->get(); // Läd die Restaurants-Beziehung für jedes Artikel
//        $articles = Article::with('restaurants')->paginate(10); // 10 Artikel pro Seite

        $restaurants = Restaurant::all();
        return view('article.ArticleAllotment.index', compact('articles', 'restaurants'));
    }

    public function allocate(Request $request,$id)
    {
        $article = Article::query()->findOrFail($id);

        // Zuweisen der ausgewählten Restaurants
        $article->restaurants()->sync($request->input('restaurant_ids', []));


        return redirect()->route('articles.articleAllotment.index')->with('success', 'Restaurants allocated successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::with('restaurants')->findOrFail($id);
        $restaurants = Restaurant::all();

        return view('article.ArticleAllotment.edit', compact('article', 'restaurants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
