<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Penjualan', function (Blueprint $table) {
            $table->id("IdPenjualan");
            $table->integer("JumlahPenjualan");
            $table->integer("HargaJual");

            $table->foreignId("IdPengguna")->references("IdPengguna")->on("Pengguna");
            $table->foreignId("IdBarang")->references("IdBarang")->on("Barang");
            $table->foreignId("IdPelanggan")->references("IdPelanggan")->on("Pelanggan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Penjualan');
    }
};
