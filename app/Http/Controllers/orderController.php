<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function checkOut()
    {
        $auth = User::find(auth()->id());
        // $cartItem = Carts::where('user_id', $auth->id)->get();
        $default = 8;
        $s = Order::create([
            'user_id' => $auth->id,
            'total_price' => 8.00,
            'status' => 'pending'  
        ]
        );
        return redirect()->back()->with(['message' => 'place order sucessfuly']);
    }

    public function index(){
        $orders = Order::all();
        return view('orders', compact('orders'));
    }

    public function makePayment($id){

        $updateOrderStatus = Order::find($id);
        $updateOrderStatus->status = 'completed';
        $updateOrderStatus->save();

        return $updateOrderStatus;

    }






}
