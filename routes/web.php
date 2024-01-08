<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;



// Route::get('/sign', function(){
//     return view("account");
// });
// Route::get('/profil', function(){
//     return view("account");
// });
Route::get("/home", [HomeContoller::class, "homePage"])->middleware("auth");
Route::get("/items", [CartController::class, "getCarts"])->name("items")->middleware("auth");
Route::post("/items/{id}", [CartController::class, "postProduct"])->middleware("auth");
Route::get("/products", [ProductsController::class, "allProduct"])->middleware("auth");
Route::get("/products/{id}", [ProductsController::class, "catProduct"])->middleware("auth");
Route::get("/categories", [categoryController::class, "categories"])->middleware("auth");

Route::get("/profil", [ProfilController::class, "Profil"])->middleware("auth");

// Route::get("/", [DashController::class, "DashBoard"])->name("dashboard");


Route::get("/login", [AuthController::class, "loginPage"])->name("login");
Route::get("/register", [AuthController::class, "registerPage"])->name("register");

Route::post("/register", [AuthController::class, "postRegister"])->name("register");
Route::post("/login", [AuthController::class, "postLogin"])->name("login");
Route::get("logout", [AuthController::class, "logout"])->name("logout");






