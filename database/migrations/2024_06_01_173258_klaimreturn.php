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
        Schema::create('klaim_return', function (Blueprint $table) {
            $table->id('id_klaim_return');
            $table->foreignId('customer_id')->references('id_customer')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('order_pernjualan_id')->references('id_order_penjualan')->on('order_penjualan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_pengembalian');
            $table->string('judul_komplain');
            $table->string('isi_komplain');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klaim_return');
    }
};
