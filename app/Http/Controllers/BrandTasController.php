<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandTas;

class BrandTasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $brands = BrandTas::query()
            ->when($search, function ($query, $search) {
                $query->where('nama_brand', 'like', "%{$search}%")
                      ->orWhere('negara_asal', 'like', "%{$search}%");
            })->paginate(5);

        return view('brand_tas.index', compact('brands','search'));
    }

    public function create()
    {
        return view('brand_tas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_brand'   => 'required|string|max:255',
            'negara_asal'  => 'required|string|max:255',
            'tahun_berdiri'=> 'required|integer',
        ]);

        BrandTas::create($request->all());

        return redirect()->route('brand-tas.index')->with('success', 'Brand berhasil ditambahkan');
    }

    public function edit(BrandTas $brand_ta)
{
    return view('brand_tas.edit', ['brand' => $brand_ta]);
}

    public function update(Request $request, BrandTas $brand_ta)
{
    $request->validate([
        'nama_brand'    => 'required|string|max:255',
        'negara_asal'   => 'required|string|max:255',
        'tahun_berdiri' => 'required|integer',
    ]);

    $brand_ta->update($request->all());

    return redirect()->route('brand-tas.index')->with('success', 'Brand berhasil diubah');
}
    public function destroy(BrandTas $brand)
    {
        
    }
}
