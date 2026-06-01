<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BrandTas;

class KoleksiTasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_koleksi' => $this->faker->words(2, true),
            'jenis_koleksi' => $this->faker->randomElement(['Handbag','Backpack','Tote','Shoulder Bag']),
            'material' => $this->faker->randomElement(['Kulit','Kanvas','Denim','Nylon']),
            'warna' => $this->faker->safeColorName(),
            
            // ✅ Perbaikan: langsung ambil ID acak dari BrandTas
            'brand_tas_id' => BrandTas::query()->inRandomOrder()->value('id'),
        ];
    }
}
