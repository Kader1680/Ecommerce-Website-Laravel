<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    // public function cartPage(){
    //     return view("carts");
    // }
    public function getCarts(){
        $carts = DB::table("carts")->get();
        return view("carts", ["carts"=>$carts]);
    }
    public function postProduct(Request $request){
        $name = $request->input("name");
        $name = $request->input("name");
        $carts = DB::table("carts")->insert(
            [
                "name" => "name"
            ]
        );
        return view("carts", ["carts"=>$carts]);
    }
}
