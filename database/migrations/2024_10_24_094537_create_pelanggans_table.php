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
        Schema::create('Pelanggan', function (Blueprint $table) {
            $table->id("IdPelanggan");
            $table->string("NamaPelanggan");
            $table->string("NoHp");
            $table->string("Alamat");
            $table->string("Email");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pelanggan');
    }
};
