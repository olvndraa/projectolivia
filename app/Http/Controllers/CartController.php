<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $product = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];

        $cart[] = $product;

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
    public function view()
    {
       
        $cart = session()->get('cart', []);

        return view('cart.view', compact('cart'));
    }

    public function add(Request $request)
    {
   
        $cart = session()->get('cart', []);

        $cart[] = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'photo' => $request->input('photo') 
        ];

     
        session()->put('cart', $cart);

        return redirect()->route('cart.add')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
    public function destroy($id)
    {
       

   
        $cart = session()->get('cart', []);

        foreach ($cart as $key => $item) {
            if ($key == $id) {
                unset($cart[$key]);  
                break;
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Item berhasil dihapus dari keranjang.');
    }

    // return redirect()->route('cart.view')->with('success', 'Produk berhasil dihapus dari keranjang.');
}
