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
        Schema::create('Barang', function (Blueprint $table) {
            $table->id("IdBarang");
            $table->string("NamaBarang");
            $table->string("Keterangan");
            $table->string("Satuan");

            $table->foreignId("IdPengguna")->references("IdPengguna")->on("Pengguna");
            $table->foreignId("IdSupplier")->references("IdSupplier")->on("Supplier");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Barang');
    }
};
