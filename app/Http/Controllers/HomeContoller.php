<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeContoller extends Controller
{

    public function homePage(Request $request){
        // $list = ;

        $homeProducts = DB::table("products")->limit(3)->get();

        $query = Products::query();
        if ($request->input('Computer')) {
            
            $result = $query->where('cat_id', '=', 3);

        }
        if ($request->input('Building')) {
            
            $result = $query->where('cat_id', '=', 2);

        }
        if ($request->input('Photography')) {
            
            $result = $query->where('cat_id', '=', 1);

        }
        if ($request->input('Tools')) {
            
            $result = $query->where('cat_id', '=', 4);

        }
        if ($request->input('Men')) {
            
            $result = $query->where('cat_id', '=', 5);

        }
        if ($request->input('Sport')) {
            
            $result = $query->where('cat_id', '=', 6);

        }
        if ($request->input('Classic')) {
            
            $result = $query->where('cat_id', '=', 7);

        }
        if ($request->input('Childrens')) {
            
            $result = $query->where('cat_id', '=', 8);

        }
        
        $products = $query->limit(3)->get();
        return view("home", compact("products"));
    }


    // public function help(){
    //     $id = Auth::user()->id;
    //     $producu =DB::table("products")->where("user_id", $id)->get();
    //     dd($producu);
    // }
}
