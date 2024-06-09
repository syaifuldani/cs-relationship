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
        Schema::create('order_penawaran', function (Blueprint $table) {
            $table->id('id_penawaran');
            $table->foreignId('order_permintaan_id')->references('id_order_permintaan')->on('order_permintaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('order_penjualan_id')->references('id_order_penjualan')->on('order_penjualan')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('Status_order', ['Setuju', 'Rekonsiliasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
