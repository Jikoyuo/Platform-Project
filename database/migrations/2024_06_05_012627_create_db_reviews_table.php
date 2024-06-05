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
        Schema::create('db_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('star');
            $table->text('review');
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('user_id')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_reviews');
    }
};
