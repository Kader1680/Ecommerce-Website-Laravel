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



        
        public function editImageView(){
            $idAuth = auth::User()->id;

            return view('uploadImageProfil', compact('idAuth'));
        }


        public function updateImageProfile(Request $request, $id){
            $user = User::find($id);

            $validate = $request->validate([

                'pics' => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
                 
            ]);

            
    
            $filename = time() . '.' . $request->file('pics')->getClientOriginalExtension();
            $path = $request->file('pics')->storeAs('images', $filename, 'public');
          
            $user->pics = $path;

            $user->save();
            return redirect("/profil");
        }

        public function displayImageDefault(){

            $idAuth = auth::User()->id;
            $imageProfile = User::where('id', $idAuth)->value('pics');
            return view("profil", compact("imageProfile")); 
        }
}
