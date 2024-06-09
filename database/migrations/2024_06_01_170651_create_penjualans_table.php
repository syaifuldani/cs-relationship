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
        Schema::create('order_penjualan', function (Blueprint $table) {
            $table->id('id_order_penjualan');
            $table->foreignId('customer_id')->references('id_customer')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Status_Order');
            $table->date('tgl_pemesanan');
            $table->string('cetakfaktur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_penjualan', function (Blueprint $table) {
            // Use array notation or actual foreign key name
            $table->dropForeign(['order_penjualan_customer_id_foreign']);
            $table->dropColumn('customer_id');
        });

        Schema::dropIfExists('order_penjualan');
    }
};
