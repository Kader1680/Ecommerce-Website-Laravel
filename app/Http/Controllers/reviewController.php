<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderlist;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class reviewController extends Controller
{


    public function addReview(Request $request, $id){
        $orderLists = Orderlist::find($id);

        
        $auth = User::find(auth()->id());
        Review::create([
            
            "user_id" => $auth->id,
            "id_products" => $orderLists->id_product,
            "rating" => $request->rating,
            "review" => $request->review,

        ]);

        return redirect('/products');

         
    }
}
