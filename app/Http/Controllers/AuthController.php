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

            $admin = "admin";
            if (Auth::attempt($credetials)) {
                return redirect('/profil');
        }elseif (Auth::attempt(['email' => $request->input($admin), 'password' => $request->input($admin)])) {
            return redirect("/");
        }
        else
        {
            return redirect("login")->with("oopp");
        }

    }
        public function postRegister(Request $request){
            // $password = Hash::make($request->input('password'));

            $user = new User();
            $user->name = $request->input("name");
            $user->email = $request->input("email");
            $user->phone = $request->input("phone");
            $user->password = Hash::make($request->input("password"));
            $user->save();
            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credetials)) {
                return redirect()->route("profil");
            }

        }



        public function logout(){
            Auth::logout();

            return Redirect('login');
            // return redirect('login')->with(Auth::logout());
        }
 }
