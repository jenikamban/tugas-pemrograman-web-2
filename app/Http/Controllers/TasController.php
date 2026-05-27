<?php

namespace App\Http\Controllers;

use App\Models\Tas;
use Illuminate\Http\Request;

class TasController extends Controller
{
    

     public function index(Request $request)
    {
        
       $search = $request->input('search');

    // Query dengan kondisi pencarian + pagination
    $tas = Tas::query()
        ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('warna', 'like', "%{$search}%")
                  ->orWhere('merk', 'like', "%{$search}%");
            });
        })
        ->paginate(5)
        ->withQueryString(); // supaya pagination tetap bawa parameter search

    // Return ke view dengan data
    return view('produk-tas.index', [
        'title'  => 'Data Produk Tas',
        'tas'    => $tas,
        'search' => $search,
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

        return redirect()->route('tas.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Tas $tas)
    {
        //
    }

    public function edit(Tas $tas)
    {
         return view('produk-tas.edit', [
            'title' => ' edit produk',
            'tas' => $tas,
        ]);
    }

    public function update(Request $request, Tas $tas)
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

       $tas->update($validated);

        return redirect()->route('tas.index')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy(Tas $tas)
    {
        $tas->delete($tas);

        return redirect()->route('tas.index')
            ->with('success', 'Data berhasil dihapus');
          }
          
    }
        


