<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    // public function up(): void
    // {
    //     Schema::create('order_items', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('order_id');
    //         $table->unsignedBigInteger('product_id');
    //         $table->integer('quantity');
    //         $table->decimal('price', 8, 2);
    //         $table->timestamps();

    //         $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
    //         $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    //     });
    // }
    public function up()
{
    Schema::create('order_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('order_id')->constrained()->onDelete('cascade');
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->integer('quantity');
        $table->string('photo')->nullable();
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
}
