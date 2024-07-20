<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{



    public function allProduct(){

        $products = DB::table("products")->get();

        return view("products.products", ["products" => $products]);
    }

    public function catProduct($id){

        $products = DB::table("products")->where("id", $id)->get();
        $homeProducts = DB::table("products")->limit(4)->get();

        return view("products.singleProduct", ["products" => $products], compact("homeProducts"));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Products::where('name', 'LIKE', "%$query%")
                        ->orWhere('description', 'LIKE', "%$query%")
                        ->paginate(10);
                        
        return view('products.products', compact('products'));
    }


}
