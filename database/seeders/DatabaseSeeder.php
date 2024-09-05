<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat pengguna
        $user1 = User::create([
            'name' => 'zhafira',
            'email' => 'zhafira@gmail.com', // Ganti dengan email baru
            'password' => bcrypt('1234')
        ]);        

        $user2 = User::create([
            'name' => 'olip',
            'email' => 'olip_new@gmail.com',
            'password' => bcrypt('1234')
        ]);

        // Membuat produk
        $product1 = DB::table('products')->insert([
            'name' => 'Contoh Produk 1',
            'price' => 10000,
            'description' => 'Deskripsi produk contoh 1',
            'photo' => 'https://images.jamtangan.com/preset:sharp/dpr:1.5/plain/https://assets.jamtangan.com/images/banners/home/H1/b/0724/new-casio-jdm-a792bb43959ee82548c17a8e07976e8d.jpg',
            'stock' => 10,
            'category' => 'Jam Tangan', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        $product1 = DB::table('products')->insert([
            'name' => 'Contoh Produk 1',
            'price' => 10000,
            'description' => 'Deskripsi produk contoh 1',
            'photo' => 'https://down-id.img.susercontent.com/file/id-11134207-7qul8-li30fe2z75gqce',
            'stock' => 10,
            'category' => 'Jam Tangan', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

   
        
        
        CartItem::create([
            'user_id' => $user1->id,
            'product_id' => $product1,
            'quantity' => 1,
        ]);

     
        CartItem::create([
            'user_id' => $user2->id,
            'product_id' => $product1,
            'quantity' => 2,
        ]);
    }
}
