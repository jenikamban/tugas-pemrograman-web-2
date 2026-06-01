<?php

namespace App\Http\Controllers;

use App\Models\BrandTas;
use App\Models\KoleksiTas;
use Illuminate\Http\Request;

class KoleksiTasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $brandFilter = $request->input('brand_tas_id');

        $koleksis = KoleksiTas::with('brand')
            ->when($search, function ($query, $search) {
                $query->where('nama_koleksi', 'like', "%{$search}%")
                      ->orWhere('material', 'like', "%{$search}%")
                      ->orWhere('warna', 'like', "%{$search}%");
            })
            ->when($brandFilter, function ($query, $brandFilter) {
                $query->where('brand_tas_id', $brandFilter);
            })
            ->paginate(5);

        $brands = BrandTas::all();

        return view('koleksi_tas.index', compact('koleksis', 'brands'));
    }

    public function create()
    {
        $brands = BrandTas::all();
        return view('koleksi_tas.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_koleksi' => 'required|string|max:100',
            'jenis_koleksi' => 'required|string|max:50',
            'material' => 'required|string|max:50',
            'warna' => 'required|string|max:50',
            'brand_tas_id' => 'required|exists:brand_tas,id',
        ]);

        KoleksiTas::create($validated);

        return redirect()->route('koleksi-tas.index')->with('success', 'Data koleksi berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(KoleksiTas $koleksi_ta)
{
    return view('koleksi_tas.show', [
        'koleksi' => $koleksi_ta,
        'title' => 'Detail Koleksi Tas'
    ]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KoleksiTas $koleksi_ta)
{
    $brands = BrandTas::all();

    return view('koleksi_tas.edit', [
        'koleksi' => $koleksi_ta,
        'brands' => $brands
    ]);
}

public function update(Request $request, KoleksiTas $koleksi_ta)
{
    $request->validate([
        'nama_koleksi' => 'required|string|max:100',
        'jenis_koleksi' => 'required|string|max:50',
        'material' => 'required|string|max:50',
        'warna' => 'required|string|max:50',
        'brand_tas_id' => 'required|exists:brand_tas,id',
    ]);

    $koleksi_ta->update($request->all());

    return redirect()->route('koleksi-tas.index')
                     ->with('success', ' Data Koleksi berhasil diubah');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KoleksiTas $koleksi_ta)
{
    $koleksi_ta->delete();

    return redirect()->route('koleksi-tas.index')
                     ->with('success', 'Data Koleksi berhasil dihapus!');
}
}
