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
            $table->foreign('product_id')->references('id')->on('db_product');
            $table->foreign('user_id')->references('id')->on('db_users');
        });

        Schema::create('db_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTimeTz('order_date');
            $table->float('total_price');
            $table->integer('quantity');
            $table->foreign('product_id')->references('id')->on('db_product');
            $table->foreign('user_id')->references('id')->on('db_users');
        });

        Schema::create('db_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('star');
            $table->text('review');
            $table->foreign('product_id')->references('id')->on('db_product');
            $table->foreign('user_id')->references('id')->on('db_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db__products');
    }
};
