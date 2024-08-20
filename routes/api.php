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
    Route::apiResource('/companies',CompanyApiController::class);
    Route::apiResource('/articleGroups',ArticleGroupApiController::class);
    Route::apiResource('/restaurants',RestaurantApiController::class);
    Route::post('/restaurant/{restaurantId}/allocate-articles',[RestaurantApiController::class,'allocateArticles']);
    Route::apiResource('/articles',ArticleApiController::class);


});
