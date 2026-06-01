<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('koleksi_tas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_koleksi');
            $table->string('jenis_koleksi');   // jenis koleksi (Handbag, Backpack, dll.)
            $table->string('material');        // material tas (Kulit, Kanvas, dll.)
            $table->string('warna');           // warna tas
            $table->foreignId('brand_tas_id')  // relasi ke brand_tas
                  ->constrained('brand_tas')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('koleksi_tas');
    }
};
