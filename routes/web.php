<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\orderController;
use App\Http\Controllers\orderItemController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StripController;	
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeContoller::class, "homePage"]);
Route::get("/items", [CartController::class, "getCarts"])->name("items")->middleware("auth");


Route::post("/items/{id}", [CartController::class, "postProduct"])->middleware("auth");
Route::delete("/items/{id}", [CartController::class, "removeProduct"])->middleware("auth");


Route::get("/products", [ProductsController::class, "allProduct"])->name('products');
Route::post("/products", [ProductsController::class, "search"])->name('products');
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
// Route::get("/payement", [payementController::class, "payement"]);


Route::post("/dashboard", [DashboardController::class, "addCategory"])->name("category");


Route::get("/sellers", [SellerController::class, "getSellers"]);



// payment with the payapl

// Route::get("/payement", [StripController::class, "payement"]); 
// Route::get("/payement           /cancel", [StripController::class, "cancel"]);
// Route::get("/payament/success", [StripController::class, "success"]);


Route::get('/payement', [StripController::class, "index"]);
Route::post('/charge', [StripController::class, "charge"]);
Route::get('/success', [StripController::class, "success"]);
Route::get('/error', [StripController::class, "error"]);






Route::post("/items", [orderController::class, "checkOut"])->name('items');
Route::get("/orders", [orderController::class, "index"]);
Route::put("/orders/{id}", [orderController::class, "makePayment"])->name("complete");
Route::get("/orderitems", [orderItemController::class, "store"]);


Route::post("/orders/{id}", [reviewController::class, "addReview"])->name('orders');
