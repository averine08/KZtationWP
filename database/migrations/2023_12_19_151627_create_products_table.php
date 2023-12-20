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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("artist_id");
            $table->string('ProductName');
            $table->string('ProductPhoto');
            $table->integer('ProductCat');
            $table->integer('ProductPrice');
            $table->date('ProductReleaseDate');
            $table->string('ProductRegion');
            $table->string('ProductManufacturer');
            $table->string('ProductContent');
            $table->string('ProductLinkYoutube');
            $table->integer('ProductStock');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
