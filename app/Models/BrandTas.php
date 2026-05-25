<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'nama_brand',
    'negara_asal',
    'tahun_berdiri',
])]
class BrandTas extends Model
{
    /** @use HasFactory<\Database\Factories\BrandTasFactory> */
    use HasFactory;

    public function koleksiTas()
    {
        return $this->hasMany(KoleksiTas::class);
    }
}
