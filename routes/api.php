<?php

use App\Http\Controllers\API\ArticleApiController;
use App\Http\Controllers\API\ArticleGroupApiController;
use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\CompanyApiController;
use App\Http\Controllers\API\RestaurantApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/register', [AuthApiController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout',[AuthApiController::class, 'logout']);

    Route::post('/companies/getCompanies', [CompanyApiController::class, 'getCompanies']);
    Route::post('articleGroups/getArticleGroups', [ArticleGroupApiController::class, 'getArticleGroups']);
    Route::post('/restaurants/getRestaurants', [RestaurantApiController::class, 'getRestaurants']);
    Route::post('/restaurant/{restaurantId}/allocate-articles',[RestaurantApiController::class,'allocateArticles']);
    Route::post('/articles/getArticles',[ArticleApiController::class,'getArticles']);


});
