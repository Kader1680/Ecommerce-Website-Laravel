<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeContoller extends Controller
{
    public function homePage(){
        return view("home");
    }
    // public function help(){
    //     $id = Auth::user()->id;
    //     $producu =DB::table("products")->where("user_id", $id)->get();
    //     dd($producu);
    // }
}
