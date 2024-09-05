<?php
// database/seeders/CartItemsSeeder.php

use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\Product;

class CartItemsSeeder extends Seeder
{
    public function run()
    {
        $product = Product::find(1); 

        CartItem::create([
            'user_id' => 1, 
            'product_id' => $product->id,
            'quantity' => 1,
        ]);
    }
       
    
}


