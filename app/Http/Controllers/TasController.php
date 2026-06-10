<?php

namespace App\Http\Controllers;

use App\Models\BrandTas;
use App\Models\ProdukTas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasController extends Controller
{
    public function index()
    {
        // ambil semua data tanpa pagination
        $tas = ProdukTas::all();

        return view('produk-tas.index', [
            'title' => 'Data Produk Tas',
            'tas' => $tas,
        ]);
    }

    public function create()
    {
        return view('produk-tas.create', [
            'title' => 'Tambah Produk Tas',
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_produk' => 'required',
        'brand_tas_id' => 'required|numeric',
        'harga' => 'required|numeric',
        'warna' => 'required',
        'stok' => 'required|numeric',
        'deskripsi' => 'nullable|string',
    ]);

    DB::beginTransaction();
    try {
        ProdukTas::create($request->only([
            'nama_produk','brand_tas_id','harga','warna','stok','deskripsi'
        ]));
        DB::commit();
        return redirect()->route('produk-tas.index')
                         ->with('success','Produk tas berhasil ditambahkan');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error','Gagal menyimpan data: '.$e->getMessage());
    }
}
public function update(Request $request, ProdukTas $tas)
{
    
}

public function destroy(ProdukTas $tas)
{
    $tas->delete();

    return redirect()->route('produk-tas.index')
                     ->with('success', 'Produk tas berhasil dihapus');
}



}
