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
        Schema::create('order_pengiriman', function (Blueprint $table) {
            $table->id('id_order_pengiriman');
            $table->foreignId('customer_id')->references('id_customer')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('order_pernjualan_id')->references('id_order_penjualan')->on('order_penjualan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl_pengiriman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_pengiriman');
    }
};
