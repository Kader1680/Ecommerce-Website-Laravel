<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){

        $productscout = Products::all()->count();
        $products = Products::all();
        $userCount = User::all()->count();
        $user = User::all();
        $visiter = Carts::all()->where('id_user');

        return view("dashboard", compact("productscout",  "user", "userCount", 'visiter', 'products'));
    }
}
