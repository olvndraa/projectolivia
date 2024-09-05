<?php

    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\CartItem;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
    {
        $cart = session()->get('cart', []);
        return view('checkout', ['cart' => $cart]);
    }

    public function processCheckout(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        $cart = session()->get('cart', []);

        $order = new Order();
        $order->user_id = Auth::id();
        $order->address = $validated['address'];
        $order->payment_method = $validated['payment_method'];
        $order->total = array_sum(array_column($cart, 'price'));
        $order->save();

        foreach ($cart as $item) {
            $order->items()->create([
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'photo' => $item['photo'],
            ]);
        }

        
        session()->forget('cart');


        return redirect()->route('checkout.success');
    }
}


