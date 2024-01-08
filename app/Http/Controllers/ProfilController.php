<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfilController extends Controller


{

        public function Profil(){
            $userAuth = auth::User();
            return view("profil", compact('userAuth'));
        }
}
