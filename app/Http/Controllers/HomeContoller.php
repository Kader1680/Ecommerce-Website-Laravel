<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeContoller extends Controller
{

    public function homePage(){
        // $list = ;

        $homeProducts = DB::table("products")->limit(4)->get();
        return view("home", compact("homeProducts"));
    }


    // public function help(){
    //     $id = Auth::user()->id;
    //     $producu =DB::table("products")->where("user_id", $id)->get();
    //     dd($producu);
    // }
}
