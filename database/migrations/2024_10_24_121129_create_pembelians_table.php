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
        Schema::create('Pembelian', function (Blueprint $table) {
            $table->id("IdPembelian");
            $table->integer("JumlahPembelian");
            $table->integer("HargaBeli");

            $table->foreignId("IdPengguna")->references("IdPengguna")->on("Pengguna");
            $table->foreignId("IdBarang")->references("IdBarang")->on("Barang");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pembelian');
    }
};
