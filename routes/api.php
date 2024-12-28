<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [CustomerAuthController::class, 'login']);

Route::post('register', [CustomerAuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {

    Route::group(['prefix' => 'carts', 'as' => 'carts.'], function () {
        Route::get("items", [CartController::class, "index"])->name("show.all"); 
        Route::post('add-item', [CartController::class, "store"])->name("show.store");
        Route::put("update-product-quantity", [CartController::class, "updateProductQuantity"]);
        Route::delete("product", [CartController::class, "destroyProduct"]);
        Route::delete("", [CartController::class, "destroy"]);
    });

    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get("items", [OrderController::class, "index"])->name("show.all");
        Route::post('add-item', [OrderController::class, "AddItemsToOrder"])->name("show.store");
        Route::delete("", [OrderController::class, "destroy"])->name("destroy");
    });
});
Route::group(['prefix' => 'products'], function () {
    Route::get("", [ProductController::class, "index"]);
    Route::get("{product_id}", [ProductController::class, "show"]);
});
Route::group(['prefix' => 'reviews'], function () {
    Route::get("", [ReviewController::class, "index"]);
});
