<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeContoller::class, "homePage"]);
Route::get("/items", [CartController::class, "getCarts"]);
Route::get("/products", [ProductsController::class, "allProduct"]);
Route::get("/products/{id}", [ProductsController::class, "catProduct"]);
Route::get("/categories", [categoryController::class, "categories"]);
Route::get("/categories/{cat_id}", [categoryController::class, "filterc"]);
