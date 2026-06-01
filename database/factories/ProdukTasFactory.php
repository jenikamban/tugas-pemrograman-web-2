<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukTasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->words(3, true),
            'brand_tas_id' => 1,
            'harga' => $this->faker->numberBetween(100000, 1000000),
            'warna' => $this->faker->randomElement(['Hitam', 'Coklat', 'Biru', 'Putih', 'Abu-abu']),
            'stok' => $this->faker->numberBetween(5, 50),
        ];
    }
}
