<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeContoller::class, "homePage"]);
Route::get("/items", [CartController::class, "getCarts"])->name("items")->middleware("auth");
Route::post("/items/{id}", [CartController::class, "postProduct"])->middleware("auth");
Route::get("/products", [ProductsController::class, "allProduct"]);
Route::get("/singleProduct/{id}", [ProductsController::class, "catProduct"])->middleware("auth");
Route::get("/categories", [categoryController::class, "categories"]);
Route::get("/categories/{cat_id}", [categoryController::class, "filterc"]);
// Route::get("/categories/{cat_id}/{id}", [ProductsController::class, "catProduct"]);
Route::get("/profil", [ProfilController::class, "Profil"])->name("profil")->middleware("auth");
Route::get("/login", [AuthController::class, "loginPage"])->name("login");
Route::get("/register", [AuthController::class, "registerPage"])->name("register");
Route::post("/register", [AuthController::class, "postRegister"])->name("register");
Route::post("/login", [AuthController::class, "postLogin"])->name("login");
Route::get("/logiut", [AuthController::class, "logout"])->name("logout");
Route::get("/dashboard", [DashboardController::class, "dash"])->middleware("admin");







