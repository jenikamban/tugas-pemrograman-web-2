<x-app>
    <x-slot:title>Detail BrandTas</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('brand-tas.index') }}" role="button">Back</a>

    {{-- Data Brand --}}
    <h4>Data Brand</h4>
    <ul class="list-group mb-3">
        <li class="list-group-item active" aria-current="true">Detail Brand</li>
        <li class="list-group-item">Nama Brand: {{ $brand->nama_brand }}</li>
        <li class="list-group-item">Negara Asal: {{ $brand->negara_asal }}</li>
        <li class="list-group-item">Tahun Berdiri: {{ $brand->tahun_berdiri }}</li>
        <li class="list-group-item">
            Created At: {{ optional($brand->created_at)->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ optional($brand->updated_at)->diffForHumans() }}
        </li>
    </ul>

    {{-- Jika ada relasi produk tas --}}
    <h4>Data Produk Tas</h4>
    <ul class="list-group">
        @foreach ($brand->products ?? [] as $product)
            <li class="list-group-item">{{ $product->nama_produk }}</li>
        @endforeach
    </ul>
</x-app>
