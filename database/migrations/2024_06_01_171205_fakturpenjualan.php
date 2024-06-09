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
        Schema::create('faktur_penjualan', function (Blueprint $table) {
            $table->id('id_faktur');
            $table->foreignId('customer_id')->references('id_customer')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('order_penjualan_id')->references('id_order_penjualan')->on('order_penjualan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl-faktur');
            $table->date('tgl-jatuh-tempo');
            $table->string('jumlah-pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faktur_penjualan');
    }
};
