<?php

namespace App\Http\Controllers;

use App\Http\Requests\restaurant\RestaurantCreateRequest;
use App\Http\Requests\restaurant\RestaurantEditRequest;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( RestaurantCreateRequest $request )
    {
        $restaurant = new Restaurant();
        $restaurant->id = $request->get('id');
        $restaurant->name = $request->get('name');
        $restaurant->location = $request->get('location');
        $restaurant->restaurant_tel = $request->get('restaurant_tel');
        $restaurant->restaurant_email = $request->get('restaurant_email');
        $restaurant->opening_hours = $request->get('opening_hours');
        $restaurant->opening_hours = $request->get('opening_hours');
        if (Auth::user()->company) {
            $restaurant->company_id = Auth::user()->company->id;
        } else {
            return redirect()->back()->with('error', 'You need to belong to a company to create a restaurant.');
        }
        $restaurant->save();

        return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully.');
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
    public function edit(Restaurant $restaurant)
    {
        return view('restaurant.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestaurantEditRequest $request, Restaurant $restaurant)
    {
        $restaurant->name = $request->get('name');
        $restaurant->location = $request->get('location');
        $restaurant->restaurant_tel = $request->get('restaurant_tel');
        $restaurant->restaurant_email = $request->get('restaurant_email');
        $restaurant->opening_hours = $request->get('opening_hours');
        $restaurant->save();

        return redirect()->route('restaurants.index')->with('success', 'Restaurant updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')->with('success', 'Restaurant deleted successfully.');
    }
}
