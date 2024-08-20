<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ArticleGroup;
use Illuminate\Http\Request;

class ArticleGroupApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArticleGroup::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $articleGroup = ArticleGroup::query()->create([$request->all()]);
        return response()->json($articleGroup,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return ArticleGroup::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $articleGroup = ArticleGroup::query()->findOrFail($id);
        $articleGroup->update($request->all());

        return response()->json($articleGroup,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ArticleGroup::destroy($id);
        return response()->json(null, 204);
    }
}
