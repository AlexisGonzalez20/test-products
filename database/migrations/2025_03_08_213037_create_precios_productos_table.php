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
        Schema::create('precios_productos', function (Blueprint $table) {
            $table->engine('InnoDB');
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('currency_id');
            $table->decimal('price');
            $table->foreign('product_id')->references('id')->on('productos')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
            $table->foreign('currency_id')->references('id')->on('divisas')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precios_productos');
    }
};
