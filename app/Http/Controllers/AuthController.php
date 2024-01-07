<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Registerpage(){
        return view("register");
    }
    public function Loginpage(){
        return view("login");
    }


    public function Register(Request $request){
        // create new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route("profil");

    }
}
