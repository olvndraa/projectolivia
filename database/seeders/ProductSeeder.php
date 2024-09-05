<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Contoh Produk',
            'price' => 10000,
            'description' => 'Deskripsi produk contoh',
            'photo' => 'path/to/photo.jpg',
            'stock' => 10, 
        ]);
    }
}


