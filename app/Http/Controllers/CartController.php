<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    // public function cartPage(){
    //     return view("carts");
    // }
    public function getCarts(){
        $id = Auth::user()->id;

        $carts = DB::table("carts")->where("user_id", $id)->get();
        // $carts = DB::table("carts")->get();
        // dd($carts->count());
        return view("carts", ["carts"=>$carts]);
    }
    public function postProduct(Request $request, $id){
        $productsId = Products::find($id);
        $id = Auth::user()->id;

        $product = DB::table("carts")->insert(
            [
                "name" =>  $productsId->name,
                "price" =>  $productsId->price,
                "quantity" =>  $productsId->quantity,
                "image" =>  $productsId->image,
                "user_id" => $id,
            ]
        );
        // products
        // return Redirect()->route('products');
        return Redirect()->route('items');
    }
}


