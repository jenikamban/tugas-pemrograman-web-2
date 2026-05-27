<?php

namespace Database\Seeders;

use App\Models\BrandTas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         BrandTas::create([
            'nama_brand'   => 'Louis Vuitton',
            'negara_asal'  => 'Prancis',
            'tahun_berdiri'=> 1854,
        ]);

        BrandTas::create([
            'nama_brand'   => 'Gucci',
            'negara_asal'  => 'Italia',
            'tahun_berdiri'=> 1921,
        ]);

        BrandTas::create([
            'nama_brand'   => 'Hermès',
            'negara_asal'  => 'Prancis',
            'tahun_berdiri'=> 1837,
        ]);
    }
}
