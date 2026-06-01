<?php

namespace Database\Seeders;

use App\Models\BrandTas;
use Illuminate\Database\Seeder;

class BrandTasSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 data manual (opsional)
        BrandTas::create([
            'nama_brand' => 'LuxuryBag',
            'negara_asal' => 'Indonesia',
            'tahun_didirikan' => 2010,
        ]);

        // Tambahkan 49 data acak dari factory
        BrandTas::factory()->count(50)->create();
    }
}
