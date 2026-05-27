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
        Schema::create('koleksi_tas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_koleksi');
        $table->text('deskripsi');
        $table->integer('tahun_rilis');
        $table->integer('jumlah_item');
        $table->foreignId('brand_tas_id')->constrained('brand_tas')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi_tas');
    }
};
