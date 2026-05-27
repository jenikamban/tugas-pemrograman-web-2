<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'nama_koleksi',
    'deskripsi',
    'tahun_rilis',
    'jumlah_item',
    'brand_tas_id',
])]
class KoleksiTas extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(BrandTas::class, 'brand_tas_id');
    }
}
