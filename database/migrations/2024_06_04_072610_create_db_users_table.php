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
        Schema::dropIfExists('db_carts');
        Schema::dropIfExists('db_transactions');
        Schema::dropIfExists('db_reviews');
    }
};
