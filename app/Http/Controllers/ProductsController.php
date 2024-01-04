<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function getAllProduct(){


        $categorie = DB::table("categorys")->get();
        return view("products.products", ["allcategorie" => $categorie]);
    }

}
