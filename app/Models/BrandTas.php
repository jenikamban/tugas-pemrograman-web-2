<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


  #[Fillable(['nama_brand', 'negara_asal', 'tahun_didirikan'])]
class BrandTas extends Model
{
    use HasFactory;

    public function produks()
    {
        return $this->hasMany(ProdukTas::class, 'brand_tas_id');
    }

  public function koleksiTas()
{
    return $this->hasMany(KoleksiTas::class, 'brand_tas_id');
}

}