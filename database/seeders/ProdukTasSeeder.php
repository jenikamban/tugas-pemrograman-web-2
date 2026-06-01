<?php

namespace Database\Seeders;

use App\Models\ProdukTas;
use Illuminate\Database\Seeder;

class ProdukTasSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 data manual (opsional)
        ProdukTas::create([
            'nama_produk' => 'Tas Kulit Premium',
            'brand_tas_id' => 1,
            'harga' => 750000,
            'warna' => 'Hitam',
            'stok' => 4,
        ]);

        // Tambahkan 99 data acak dari factory
        ProdukTas::factory()->count(100)->create();
    }
}
