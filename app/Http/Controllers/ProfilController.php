<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller

{

        public function Profil(){
            $this->authorize('gateProfil');
            $userAuth = auth::User();
            $id = Auth::user()->id;
            $products = DB::table("carts")->where("user_id", $id)->count();
            return view("profil", compact('userAuth', 'products'));
        }
}
