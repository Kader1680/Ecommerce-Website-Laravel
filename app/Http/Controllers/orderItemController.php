<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_items;
use App\Models\OrderItem;
use App\Models\Orderlist;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderItemController extends Controller
{
    public function store(){


    $order_id = Order::pluck('id');
    $product_id = Products::pluck('id');
    $quantity = Products::pluck('quantity')->where('id', $product_id );
    $price = Products::pluck('price')->where('id', $product_id );


    $result = DB::table('order_itmes')->insert([
        'order_id' => $order_id,
        'product_id' => $product_id,
        'quantity' => $quantity,
        'price' => $price,
    ]);



    }



    public function delete($id){

    $iOrder = Orderlist::find($id);
    $iOrder->delete();
    return redirect("orders");
    }
}
