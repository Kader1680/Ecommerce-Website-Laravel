<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Order;
 
use App\Models\Orderlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function checkOut()
    {
        $auth = User::find(auth()->id());

        $cartItems = Carts::where('user_id', $auth->id)->get();



        // $cartItem = Carts::where('user_id', $auth->id)->get();
        $default = 8;
        $orders = Order::create([
            'user_id' => $auth->id,
            'total_price' => 8.00,
            'status' => 'pending'  
        ]
        );


        foreach ($cartItems as $cartItem) {
            $auth = User::find(auth()->id());
        
            Orderlist::create([
                'id_order' => $orders->id,
                'id_product' => $cartItem->id_product,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
                'id_user' => $auth->id
                
            ]
            );
        }


        return redirect()->back()->with(['message' => 'place order sucessfuly']);
    }

    public function index(){
        
        $id_auth = auth()->id(); 

        $orderLists = Orderlist::where('id_user', $id_auth)->get(); 

        return view('orders', compact('orderLists'));
    }

    public function makePayment($id){

        $updateOrderStatus = Order::find($id);
        $updateOrderStatus->status = 'completed';
        $updateOrderStatus->save();

        return $updateOrderStatus;

    }





    


    







}
