<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{



    public function allProduct(){

        $products = DB::table("products")->get();

        return view("products.products", ["products" => $products]);
    }

    public function catProduct($id){

        $products = DB::table("products")->where("id", $id)->get();

        return view("products.products", ["products" => $products]);
    }

}
