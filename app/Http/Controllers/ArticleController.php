<?php

namespace App\Http\Controllers;

use App\Http\Requests\article\ArticleCreateRequest;
use App\Http\Requests\article\ArticleEditRequest;
use App\Http\Requests\restaurant\RestaurantCreateRequest;
use App\Models\Article;
use App\Models\ArticleGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articleGroups = ArticleGroup::all();
        return view('article.create', compact('articleGroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleCreateRequest $request)
    {
        $article  = new Article();
        $article->id = $request->get('id');
        $article->name = $request->get('name');
        $article->price = $request->get('price');
        $article->description = $request->get('description');
        $article->article_group_id = $request->get('articleGroup');
        // Bild hochladen und speichern
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
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
        $article = Article::query()->findOrFail($id);
        $articleGroups = ArticleGroup::all();
        return view('article.edit', compact('article','articleGroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->name = $request->get('name');
        $article->price = $request->get('price');
        $article->description = $request->get('description');
        $article->article_group_id = $request->get('articleGroup');

        if ($request->hasFile('image')) {
            // Lösche das alte Bild, falls vorhanden
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }

            // Speichere das neue Bild
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
