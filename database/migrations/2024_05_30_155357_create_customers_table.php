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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id_customer');
            $table->foreignId('login_id')->references('id')->on('login')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('foto_profil')->nullable();
            $table->string('nama');
            // $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('jabatan');
            $table->string('nama-perusahaan');
            $table->enum('jenis-perusahaan', ['PT', 'CV', 'Perusahaan Negara', 'Koperasi']);
            $table->string('no-hp');
            $table->enum('kegiatan-bisnis', ['Manufaktur', 'Jasa', 'Dagang']);
            $table->enum('bidang-industri', ['Makanan & Minuman', 'Farmasi', 'Kimia']);
            $table->string('alamat');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
