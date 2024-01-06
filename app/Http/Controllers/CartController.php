<?php

namespace App\Http\Controllers;

use App\Models\Products;
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

    public function postProduct(Request $request, $id){
        $productsId = Products::find($id);
        $product = DB::table("carts")->insert(
            [
                "name" =>  $productsId->name,
                "price" =>  $productsId->price,
                "quantity" =>  $productsId->quantity,
                "image" =>  $productsId->image,
            ]
        );

        return $product;
    }
}
