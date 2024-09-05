<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('orderItems.product')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    
    public function place(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'phone' => 'required|string',
            'payment_method' => 'required|string',
        ]);
        $product = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity')
        ];


        session()->put('cart', [$product]);

    
        return redirect()->route('checkout');
    

        $cart = session('cart', []);
        $total = array_reduce($cart, function($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

      
        session()->forget('cart');

        return redirect()->route('checkout')->with('success', 'Pesanan Anda telah berhasil diproses!');
        session()->forget('cart');


    }
}



