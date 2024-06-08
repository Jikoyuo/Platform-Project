<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_b_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('order_date');
            $table->float('total_price');
            $table->float('price');
            $table->integer('quantity');
            $table->foreignId('product_id');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_b_transactions');
    }
};
