<?php

namespace App\Http\Controllers;

use App\Models\ProdukTas;
use Illuminate\Http\Request;

class TasController extends Controller
{
    public function index()
    {
        $tas = ProdukTas::paginate(5);

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
            'harga' => 'required|numeric',
            'warna' => 'required',
            'stok' => 'required|numeric',
        ]);

        ProdukTas::create($request->all());

        return redirect()->route('produk-tas.index')
                         ->with('success', 'Produk tas berhasil ditambahkan');
    }

    public function edit(ProdukTas $tas)
    {
        return view('produk-tas.edit', [
            'title' => 'Edit Produk Tas',
            'tas' => $tas,
        ]);
    }

    public function update(Request $request, ProdukTas $tas)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'warna' => 'required',
            'stok' => 'required|numeric',
        ]);

        $tas->update($request->all());

        return redirect()->route('produk-tas.index')
                         ->with('success', 'Produk tas berhasil diperbarui');
    }

    public function destroy(ProdukTas $tas)
    {
        $tas->delete();

        return redirect()->route('produk-tas.index')
                         ->with('success', 'Produk tas berhasil dihapus');
    }
}
