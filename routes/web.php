<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "this id home page";
});


Route::get("/products", [ProductsController::class, "allProduct"]);
Route::get("/products/{id}", [ProductsController::class, "catProduct"]);
Route::get("/categories", [categoryController::class, "categories"]);
Route::get("/categories/{cat_id}", [categoryController::class, "filterc"]);
