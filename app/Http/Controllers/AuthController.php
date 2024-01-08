<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
        public function loginPage(){
            return view("login");
        }
        public function registerPage(){
            return view("register");
        }

        public function postLogin(Request $request){
            $credetials = [
                'email' => $request->input("email"),
                'password' => $request->input("password"),
            ];
            if (Auth::attempt($credetials)) {
                return redirect('/dashboard');
        }else{
            return redirect("login")->with("oopp");
        }

    }
        public function postRegister(Request $request){
            // $password = Hash::make($request->input('password'));

            $user = new User();
            $user->name = $request->input("name");
            $user->email = $request->input("email");
            $user->password = Hash::make($request->input("password"));
            $user->save();
            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credetials)) {
                return redirect()->route("dashboard");
            }

        }



        public function logout(){
            Auth::logout();

            return Redirect('login');
            // return redirect('login')->with(Auth::logout());
        }
 }
