<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Company::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);

        $company = Company::query()->create($request->all());
        return response()->json($company, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Company::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $company = Company::query()->findOrFail($id);
        $company->update($request->all());
        return response()->json($company, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return response()->json(null, 204);
    }
}
