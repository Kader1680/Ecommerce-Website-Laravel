<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){

        $products = Products::all()->count();
        $user = User::all()->count();
        $visiter = Carts::all()->where('id_user');

        return view("dashboard", compact("products", "user", 'visiter'));
    }
}
