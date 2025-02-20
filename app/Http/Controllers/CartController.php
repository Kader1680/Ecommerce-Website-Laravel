<?php

namespace App\Http\Controllers;

use App\Models\Carts;
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
        return view("carts", ["carts"=>$carts]);
    }
    public function postProduct(Request $request, $id){
        $productsId = Products::find($id);
        $id = Auth::user()->id;

        $carts = DB::table("carts")->insert(
            [
                "name" =>  $productsId->name,
                "price" =>  $productsId->price,
                "quantity" =>  $productsId->quantity,
                "image" =>  $productsId->image,
                "user_id" => $id,
                "id_product" => $productsId->id,
            ]
        );
        // products
        // return Redirect()->route('products');
        return Redirect()->route('items');
    }

    public function removeProduct($id){

        $prodcutId = Carts::find($id);
        $prodcutId->delete();
        if ($prodcutId) {
            $prodcutId->delete();
            return redirect()->back()->with('success', 'your message,here');
        } else {
            return response()->json(['message' => 'Product not found.'], 404);
        }

    }
}


