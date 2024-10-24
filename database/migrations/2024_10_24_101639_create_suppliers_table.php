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
        Schema::create('Supplier', function (Blueprint $table) {
            $table->id("IdSupplier");
            $table->string("NamaSupplier");
            $table->string("NoHp");
            $table->string("Alamat");
            $table->string("Keterangan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Supplier');
    }
};
