<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandTas;

class BrandTasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
     {
        $search = $request->input('search');
    $brands = BrandTas::query()
        ->when($search, function ($query, $search) {
            $query->where('nama_brand', 'like', "%{$search}%")
                  ->orWhere('negara_asal', 'like', "%{$search}%");
        })
        ->paginate(10);

    return view('brand_tas.index', compact('brands','search'));

        
     }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BrandTas $brandTas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BrandTas $brandTas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BrandTas $brandTas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BrandTas $brandTas)
    {
        //
    }
}