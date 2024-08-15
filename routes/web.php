<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ArticleAllotmentController;
use App\Http\Controllers\ArticleController;
>>>>>>> create-article
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
<<<<<<< HEAD
=======
    Route::resource('/articles', ArticleController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::get('/articles/allocation', [ArticleAllotmentController::class, 'index'])->name('articles.articleAllotment.index');
    Route::put('/articles/allocate/{id}', [ArticleAllotmentController::class, 'allocate'])->name('articles.allocate');
    Route::get('/articles/allocation/{id}/edit', [ArticleAllotmentController::class, 'edit'])->name('articles.articleAllotment.edit');


>>>>>>> create-article

    Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');




});
