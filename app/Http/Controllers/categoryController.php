<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function categories(){
        $categorie = DB::table("categorys")->get();
        return view("category", ["allcategorie" => $categorie]);
    }

    public function filterc($cat_id){
        $products = DB::table("products")->where('cat_id', $cat_id)->get();
        return view("categories.categories", ["products" => $products]);
    }
}
