<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashController extends Controller


{

        public function DashBoard(){

        return view("dashboard");
    }
}