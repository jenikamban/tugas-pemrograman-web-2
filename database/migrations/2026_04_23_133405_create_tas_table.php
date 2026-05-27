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
        Schema::create('tas', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('merk');
    $table->integer('harga');
    $table->string('warna');
    $table->integer('jumlah');
    $table->foreignId('brand_tas_id')->constrained('brand_tas')->onDelete('cascade');
    $table->foreignId('koleksi_tas_id')->constrained('koleksi_tas')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tas');
    }
};
