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
        Schema::create('payment_headers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userID");
            $table->unsignedBigInteger("promoID");
            $table->string("payment_method");
            $table->boolean("status");
            $table->foreign('userID')->references('id')->on('penggunas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promoID')->references('id')->on('promos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_headers');
    }
};
