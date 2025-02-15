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
        Schema::create('orderlists', function (Blueprint $table) {
           
            $table->id();
            $table->foreignId('id_order')->constrained()->onDelete('cascade')->references('id')->on('orders');
            $table->foreignId('id_product')->constrained()->onDelete('cascade')->references('id')->on('products');
            $table->integer('quantity');
            $table->decimal('price', 10, 2); 
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderlists');
    }
};
