<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KoleksiTas;

class KoleksiTasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KoleksiTas::factory(10)->create();
    }
}
