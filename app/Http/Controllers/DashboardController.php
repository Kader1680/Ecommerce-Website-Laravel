<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){

        $products = Products::all()->count();
        $user = User::all()->count();

        return view("dashboard", compact("products", "user"));
    }
}
