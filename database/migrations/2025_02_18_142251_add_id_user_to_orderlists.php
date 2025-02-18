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
        Schema::table('orderlists', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained()->onDelete('cascade')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orderlists', function (Blueprint $table) {
            //
        });
    }
};
