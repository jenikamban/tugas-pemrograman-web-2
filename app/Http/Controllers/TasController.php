<?php

namespace App\Http\Controllers;

use App\Models\Tas;
use Illuminate\Http\Request;

class TasController extends Controller
{
    public function index()
    {
        return view('produk-tas.index', [
            'title' => 'DAFTAR JUALAN TAS',
            'tas' => Tas::all(),
        ]);
    }

    public function create()
    {
        return view('produk-tas.create', [
            'title' => 'Create Produk Tas',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'merk' => 'required|max:255',
            'harga' => 'required|numeric|min:5000000',
            'warna' => 'required|max:255',
            'jumlah' => 'required|integer|min:1|max:3',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'merk.required' => 'Merk wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'harga.min' => 'Harga minimal Rp 5.000.000',
            'warna.required' => 'Warna wajib diisi',
            'jumlah.required' => 'jumlah wajib diisi',
            'jumlah.integer' => 'jumlah harus bilangan bulat',
            'jumlah.min' => 'jumlah minimal 1',
            'jumlah.max' => 'jumlah max 3',
        ]);

        Tas::create($validated);

        return redirect()->route('produk-tas.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Tas $tas)
    {
        //
    }

    public function edit(Tas $tas)
    {
        //
    }

    public function update(Request $request, Tas $tas)
    {
        //
    }

    public function destroy(Tas $tas)
    {
        //
    }
}
