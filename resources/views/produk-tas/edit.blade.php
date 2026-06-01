<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form action="{{ route('brand-tas.update', $brand) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NAMA PRODUK</label>
            <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror"
                value="{{ old('nama_produk', $tas->nama_produk) }}">
            @error('nama_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>HARGA</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                value="{{ old('harga', $tas->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>WARNA</label>
            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror"
                value="{{ old('warna', $tas->warna) }}">
            @error('warna')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>STOK</label>
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"
                value="{{ old('stok', $tas->stok) }}">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-warning">cancel</button>
    </form>
</x-app>
