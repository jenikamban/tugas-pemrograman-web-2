<?php

namespace Database\Seeders;

use App\Models\BrandTas;
use Illuminate\Database\Seeder;

class BrandTasSeeder extends Seeder
{
    public function run(): void
    {
        

        // Tambahkan 49 data acak dari factory
        BrandTas::factory()->count(50)->create();
    }
}
