<x-app>
    <x-slot:title>Daftar Koleksi Tas</x-slot>

    <!-- Tombol menuju halaman create -->
    <a href="{{ route('koleksi-tas.create') }}" class="btn btn-primary mb-3">Create</a>

    <form action="{{ route('koleksi-tas.index') }}" method="GET" class="row g-3 mb-3">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Cari nama koleksi / material / warna..."
                value="{{ request('search') }}">
        </div>

        <div class="col-md-4">
            <select name="brand_tas_id" class="form-select">
                <option value="">Semua Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ request('brand_tas_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->nama_brand }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>

    <ul class="list-group">
        @foreach ($koleksis as $koleksi)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    {{ $koleksis->firstItem() + $loop->index }}.
                    {{ $koleksi->nama_koleksi }} - {{ $koleksi->jenis_koleksi }},
                    {{ $koleksi->material }} - {{ $koleksi->warna }}
                    <strong>[Brand: {{ $koleksi->brand->nama_brand ?? 'Tidak ada brand' }}]</strong>
                </span>
                <span class="d-flex gap-2">
                    <!-- Commit 9 nanti: tombol edit & delete -->
                </span>
            </li>
        @endforeach
    </ul>

    <div class="mt-3">
        {{ $koleksis->links() }}
    </div>
</x-app>
