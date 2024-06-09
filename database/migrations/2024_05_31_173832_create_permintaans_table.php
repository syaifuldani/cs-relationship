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
        Schema::create('order_permintaan', function (Blueprint $table) {
            $table->id('id_order_permintaan');
            $table->foreignId('customer_id')->references('id_customer')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('warnagelas');
            $table->string('kategori');
            $table->string('kapasitas');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('diameter');
            $table->string('designbotol');
            $table->string('labelbotol');
            $table->string('kuantum');
            $table->enum('jenis_pembayaran', ['Kredit', 'Transfer bank', 'Digital']);
            $table->enum('jangka_pembayaran', ['30', '60', '120', '180']);
            $table->enum('jenis_pajak', ['2.5', '3.5', '5'])->nullable();
            $table->string('jumlah-pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_permintaan');
    }
};
