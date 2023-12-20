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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("payment_header_ID");
            $table->unsignedBigInteger("product_ID");
            $table->integer("product_quantity");
            $table->foreign('payment_header_ID')->references('id')->on('payment_headers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_ID')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
