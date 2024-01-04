<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function categories(){
        $categorie = DB::table("categorys")->get();
        // ["allcategorie" => $categorie]
        return view("category", ["allcategorie" => $categorie]);
    }
}
