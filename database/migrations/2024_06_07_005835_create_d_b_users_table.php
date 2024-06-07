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
        Schema::create('db_user', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('full_name');
            $table->text('address');
            $table->string('phone_number');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('db_cart', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('order_date');
            $table->float('total_price');
            $table->integer('quantity');
            $table->string('status');
            $table->foreignId('product_id');
            $table->foreignId('user_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_user');
        Schema::dropIfExists('db_cart');
    }
};
