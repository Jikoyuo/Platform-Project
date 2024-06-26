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
        Schema::create('d_b_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');  
            $table->string('year');
            $table->text('description');
            $table->float('price');
            $table->integer('stock');
            $table->string('img_url')->default('no_image.webp');
            $table->text('trailer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_b_products');
    }
};
