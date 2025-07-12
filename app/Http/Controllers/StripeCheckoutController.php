<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\DB;

class StripeCheckoutController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));


         
        $result = DB::table('orderlists')
            ->join('products', 'orderlists.id_product', "=", "products.id") 
            ->join('users', 'orderlists.id_user', "=", "users.id") 
            ->select('products.name', 'orderlists.price', 'products.quantity')
            ->get();

          // Build line items for Stripe
        $lineItems = [];

        foreach ($result as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item->name,
                    ],
                    'unit_amount' => intval($item->price * 100), // Stripe uses cents
                ],
                'quantity' => $item->quantity ?? 1,
            ];
        }

        // Create Stripe Checkout session
        $session = Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success()
    {
        return view('stripe.success');
    }

    public function cancel()
    {
        return view('stripe.cancel');
    }
}
