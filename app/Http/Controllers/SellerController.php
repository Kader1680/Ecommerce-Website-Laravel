<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{

    public function getSellers(){
        // $sellers = DB::table("sellers")->get();
        $sellers = Seller::all();
        return view("sellers", compact("sellers"));
    }




     
}
