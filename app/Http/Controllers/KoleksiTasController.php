<?php

namespace App\Http\Controllers;

use App\Models\BrandTas;
use App\Models\KoleksiTas;
use App\Models\ProdukTas;
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(KoleksiTas $koleksiTas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KoleksiTas $koleksiTas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KoleksiTas $koleksiTas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KoleksiTas $koleksiTas)
    {
        //
    }
}
