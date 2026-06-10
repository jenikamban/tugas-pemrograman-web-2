<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('produk-tas.store') }}">
        @csrf

        <div class="mb-3">
            <label>NAMA PRODUK</label>
            <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror"
                value="{{ old('nama_produk') }}">
            @error('nama_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>HARGA</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                value="{{ old('harga') }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>WARNA</label>
            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror"
                value="{{ old('warna') }}">
            @error('warna')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>STOK</label>
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"
                value="{{ old('stok') }}">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a href="{{ route('produk-tas.index') }}" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
