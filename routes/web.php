<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\payementController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;	
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeContoller::class, "homePage"]);
Route::get("/items", [CartController::class, "getCarts"])->name("items")->middleware("auth");


Route::post("/items/{id}", [CartController::class, "postProduct"])->middleware("auth");
Route::delete("/items/{id}", [CartController::class, "removeProduct"])->middleware("auth");


Route::get("/products", [ProductsController::class, "allProduct"])->name('products');
Route::get("/singleProduct/{id}", [ProductsController::class, "catProduct"])->middleware("auth");
Route::get("/product/{id}", [ProductsController::class, "catProduct"]);
Route::get("/categories", [categoryController::class, "categories"]);
Route::get("/categories/{cat_id}", [categoryController::class, "filterc"]);
// Route::get("/categories/{cat_id}/{id}", [ProductsController::class, "catProduct"]);
Route::get("/profil", [ProfilController::class, "Profil"])->name("profil");
Route::get("/login", [AuthController::class, "loginPage"])->name("login");
Route::get("/register", [AuthController::class, "registerPage"])->name("register");
Route::post("/register", [AuthController::class, "postRegister"])->name("register");
Route::post("/login", [AuthController::class, "postLogin"])->name("login");
Route::get("/logout", [AuthController::class, "logout"])->name(('logout'));
Route::get("/dashboard", [DashboardController::class, "dash"])->middleware('admin');
Route::get("/payement", [payementController::class, "payement"]);


Route::post("/dashboard", [DashboardController::class, "addCategory"])->name("category");





