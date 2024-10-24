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
        Schema::create('Pengguna', function (Blueprint $table) {
            $table->id("IdPengguna");
            $table->string("NamaPengguna");
            $table->string("NamaDepan");
            $table->string("Password");
            $table->string("NoHp");
            $table->string("Alamat");

            $table->foreignId("IdAkses")->references("IdAkses")->on("HakAkses");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengguna');
    }
};
