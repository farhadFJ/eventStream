<?php

namespace App\Http\Controllers;

use App\Http\Requests\company\CompanyCreateRequest;
use App\Http\Requests\company\CompanyEditRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyCreateRequest $request)
    {
        $company = new Company();
        $company->id = Auth::id(); // assuming the company ID is the same as the user ID
        $company->name = $request->get('name');
        $company->phone_number = $request->get('phone_number');
        $company->country = $request->get('country');
        $company->city = $request->get('city');
        $company->street = $request->get('street');
        $company->postal_code = $request->get('postal_code');
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
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
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyEditRequest $request, Company $company)
    {
        $company->name = $request->get('name');
        $company->phone_number = $request->get('phone_number');
        $company->country = $request->get('country');
        $company->city = $request->get('city');
        $company->street = $request->get('street');
        $company->postal_code = $request->get('postal_code');
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
