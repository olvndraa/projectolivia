<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('address');
        $table->string('payment_method');
        $table->string('status');
        $table->decimal('total', 8, 2);
        $table->timestamps();
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
    


    // public function down()
    // {
    //     Schema::table('orders', function (Blueprint $table) {
    //         $table->dropColumn('quantity');
    // });
}
