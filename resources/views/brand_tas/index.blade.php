<x-app>
    <x-slot:title>Daftar Brand Tas</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary" href="{{ route('brand-tas.create') }}" role="button">Tambah Brand</a>

    <form action="{{ route('brand-tas.index') }}">
        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="search" name="search"
                    placeholder="Cari nama brand / negara asal..." value="{{ request('search') }}">
            </div>

            <div class="col-md-4">
                <select class="form-select" id="tahun_berdiri" name="tahun_berdiri">
                    <option value="">Semua Tahun</option>
                    @foreach ($brands->pluck('tahun_berdiri')->unique() as $tahun)
                        <option value="{{ $tahun }}" {{ request('tahun_berdiri') == $tahun ? 'selected' : '' }}>
                            {{ $tahun }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>

    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    {{ $brands->firstItem() + $loop->index }}. {{ $brand->nama_brand }} --
                    {{ $brand->negara_asal }} ({{ $brand->tahun_berdiri }})
                </span>
                <span>
                    <a href="{{ route('brand-tas.edit', $brand->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </span>
            </li>
        @endforeach
    </ul>

    {{ $brands->links() }}
</x-app>
