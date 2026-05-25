<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'brand_tas_id',
    'nama_koleksi',
    'tahun_rilis',
    'tema',
    'status_aktif',
])]
class KoleksiTas extends Model
{
    /** @use HasFactory<\Database\Factories\KoleksiTasFactory> */
    use HasFactory;

    public function brandTas()
    {
        return $this->belongsTo(BrandTas::class);
    }
}
