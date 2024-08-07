<?php

use App\Http\Controllers\ArticleGroupsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('companies', CompanyController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/restaurants', RestaurantController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/articleGroups', ArticleGroupsController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');




});
