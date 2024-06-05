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
        Schema::create('db_users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('auth_id');
            $table->string('full_name');
            $table->text('address');
            $table->string('phone_number');
            $table->string('role');
            $table->string('last_login');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('db_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->text('description');
            $table->float('price');
            $table->integer('stock');
            $table->string('genre');
        });

        Schema::create('db_carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTimeTz('order_date');
            $table->float('total_price');
            $table->integer('quantity');
            $table->string('status');
            $table->integer('product_id');
            $table->integer('user_id');
        });

        Schema::create('db_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTimeTz('order_date');
            $table->float('total_price');
            $table->integer('quantity');
            $table->integer('product_id');
            $table->integer('user_id');
        });

        Schema::create('db_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('star');
            $table->text('review');
            $table->integer('product_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_users');
    }
};
