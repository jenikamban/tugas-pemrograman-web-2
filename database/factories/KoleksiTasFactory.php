<?php

namespace Database\Factories;

use App\Models\BrandTas; // tambahkan ini
use Illuminate\Database\Eloquent\Factories\Factory;

class KoleksiTasFactory extends Factory
{
    public function definition()
    {
        return [
            'brand_tas_id' => BrandTas::factory(),
            'nama_koleksi' => $this->faker->word,
            'tahun_rilis' => $this->faker->year,
            'tema' => $this->faker->word,
            'status_aktif' => $this->faker->boolean,
        ];
    }
}