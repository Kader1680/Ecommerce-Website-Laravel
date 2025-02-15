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
        Schema::table('carts', function (Blueprint $table) {
            $table->integer('id_product')->foreignId('id_product')->constrained('products')->onDelete('cascade');
    //         $table->bigInteger('id_product')->unsigned();
    // $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
       
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
};
