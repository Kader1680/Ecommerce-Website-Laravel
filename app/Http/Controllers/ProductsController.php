<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{



    public function allProduct(Request $request){

        $products = DB::table("products")->get();

        $query = Products::query();
        if ($request->input("under_price")) {

            $query->where('price', '<', 50);
        }
        if ($request->input('over_price')) {

            $query->where('price', '>', 50);
        }
        if ($request->input('good_rating')) {

            $query->where('price', '<', 50);
        }
        if ($request->input('bad_rating')) {

            $query->where('price', '<', 50);
        }
        if ($request->input('popular_selling')) {

            $query->where('price', '<', 50);
        }
        $allProductQuery = $query->get();

        $allReview = Review::all();



        return view("products.products", ["products" => $allProductQuery], compact("allReview"));
    }

    public function catProduct($id){

        $products = DB::table("products")->where("id", $id)->get();
        $homeProducts = DB::table("products")->limit(4)->get();
        $allReview = Review::all();

        $reviewIdUser = Review::pluck('user_id');

        $users = User::whereIn('id', $reviewIdUser)->get();




        return view("products.singleProduct", ["products" => $products], compact("homeProducts", "allReview", "users"));

    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->back()->with("message", "Please enter a search term.");
        }

        $products = Products::where(function ($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%")
              ->orWhere('description', 'LIKE', "%{$query}%");
        })
        ->paginate(10);

        if (!$products) {
            return 'not found';
        }else{
            return view('products.products', compact('products'));
        }


    }

    // public function filterPrice(Request $request){


    //     return view("products.products", ["allProductQuery" => $allProductQuery]);
    // }

}
