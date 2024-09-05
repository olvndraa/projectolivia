<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_xxxxxx_add_quantity_to_orders_table.php
// public function up(): void
// {
//     Schema::table('orders', function (Blueprint $table) {
//         $table->integer('quantity')->after('some_existing_column'); // Tambahkan kolom quantity
//     });
// }

// public function down(): void
// {
//     Schema::table('orders', function (Blueprint $table) {
//         $table->dropColumn('quantity');
//     });
// }
// database/migrations/2024_08_30_031345_add_quantity_to_orders_table.php
public function up(): void
{
    Schema::table('orders', function (Blueprint $table) {
        $table->integer('quantity')->after('id'); // Ganti 'id' dengan nama kolom yang ada di tabel jika perlu
    });
}

public function down(): void
{
    Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn('quantity');
    });
}


};
