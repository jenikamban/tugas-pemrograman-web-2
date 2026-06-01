<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['nama_produk','brand_tas_id','harga','warna','stok'])]
class ProdukTas extends Model
{
    use HasFactory;

    // Relasi ke BrandTas
    public function brand()
    {
        return $this->belongsTo(BrandTas::class, 'brand_tas_id');
    }

    // Relasi ke KoleksiTas (jika ada)
    public function koleksi()
    {
        return $this->hasMany(KoleksiTas::class, 'produk_tas_id');
    }
}
