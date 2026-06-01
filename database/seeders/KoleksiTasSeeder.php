<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KoleksiTas;

class KoleksiTasSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\KoleksiTas::factory()->count(50)->create();
    }
}
