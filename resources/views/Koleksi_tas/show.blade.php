<x-app>
    <x-slot:title>Detail Koleksi Tas</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('koleksi-tas.index') }}" role="button">Kembali</a>

    {{-- Data Koleksi --}}
    <h4>Data Koleksi</h4>
    <ul class="list-group mb-3">
        <li class="list-group-item active" aria-current="true">Detail Koleksi Tas</li>
        <li class="list-group-item">Nama Koleksi: {{ $koleksi->nama_koleksi }}</li>
        <li class="list-group-item">Jenis Koleksi: {{ $koleksi->jenis_koleksi }}</li>
        <li class="list-group-item">Material: {{ $koleksi->material }}</li>
        <li class="list-group-item">Warna: {{ $koleksi->warna }}</li>
        <li class="list-group-item">Brand: {{ $koleksi->brand->nama_brand ?? 'Tidak ada brand' }}</li>
        <li class="list-group-item">
            Created At: {{ optional($koleksi->created_at)->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ optional($koleksi->updated_at)->diffForHumans() }}
        </li>
    </ul>

    {{-- Jika nanti ada relasi tambahan (misalnya produk tas terkait) --}}
    @if ($koleksi->brand && $koleksi->brand->koleksiTas->count() > 0)
        <h4>Koleksi Lain dari Brand {{ $koleksi->brand->nama_brand }}</h4>
        <ul class="list-group">
            @foreach ($koleksi->brand->koleksiTas as $item)
                <li class="list-group-item">{{ $item->nama_koleksi }}</li>
            @endforeach
        </ul>
    @endif
</x-app>
