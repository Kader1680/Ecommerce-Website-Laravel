<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categorys;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){

        $productscout = Products::all()->count();
        $products = Products::all();
        $userCount = User::all()->count();
        $user = User::all();
        $visiter = Carts::all()->where('id_user');

        return view("dashboard", compact("productscout",  "user", "userCount", 'visiter', 'products'));
    }

    public function addCategory(Request $request){

        $validate = $request->validate([

            "nameCat" => "required|string", 
            'imageCat' => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
             
        ]);

        $filename = time() . '.' . $request->file('imageCat')->getClientOriginalExtension();
        $path = $request->file('imageCat')->storeAs('images', $filename, 'public');

        $allcategorie = Categorys::create([

            'nameCat' => $request->input("nameCat") ,
            
            'imageCat' => $filename

        ]);

        return redirect()->back()->with('success', 'Category added successfully!');

    }
}
