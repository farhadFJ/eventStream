<?php

namespace App\Http\Controllers;

use App\Http\Requests\articleGroup\ArticleGroupCreateRequest;
use App\Http\Requests\articleGroup\ArticleGroupEditRequest;
use App\Models\ArticleGroup;
use Illuminate\Support\Facades\Auth;

class ArticleGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articleGroups = ArticleGroup::all();
        return view('articleGroup.index', compact('articleGroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articleGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleGroupCreateRequest $request)
    {
        $articleGroup = new ArticleGroup();
        $articleGroup-> id = $request->get('id');
        $articleGroup-> name = $request->get('name');
        if (Auth::user()->company) {
            $articleGroup->company_id = Auth::user()->company->id;
        } else {
            return redirect()->back()->with('error', 'You need to belong to a company to create a ArticleGroup.');
        }
        $articleGroup->save();

        return redirect()->route('articleGroups.index')->with('success', 'Article group created successfully');
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
    public function edit(ArticleGroup $articleGroup)
    {
        return view('articleGroup.edit', compact('articleGroup'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleGroupEditRequest $request, ArticleGroup $articleGroup)
    {
        $articleGroup->name = $request->get('name');
        $articleGroup->save();
        return redirect()->route('articleGroups.index')->with('success', 'Article group updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
