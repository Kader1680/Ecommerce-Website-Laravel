<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;



// Route::get('/sign', function(){
//     return view("account");
// });
Route::get('/profil', function(){
    return view("account");
});
Route::get("/home", [HomeContoller::class, "homePage"]);
Route::get("/items", [CartController::class, "getCarts"])->name("items");
Route::post("/items/{id}", [CartController::class, "postProduct"]);
Route::get("/products", [ProductsController::class, "allProduct"]);
Route::get("/products/{id}", [ProductsController::class, "catProduct"]);
Route::get("/categories", [categoryController::class, "categories"]);
Route::get("/", [AuthController::class, "Registerpage"])->name("register");
Route::post("/", [AuthController::class, "Register"])->name("register");
Route::get("/login", [AuthController::class, "Loginpage"]);
Route::get("/profil", [ProfilController::class, "Profil"])->name("profil");

