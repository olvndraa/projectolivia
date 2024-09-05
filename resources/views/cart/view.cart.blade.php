<?
public function viewCart()
{
    $cart = session()->get('cart', []);

    return view('cart', compact('cart'));
}
