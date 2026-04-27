<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('produk-tas.update', $tas) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama', $tas->nama) }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>MERK</label>
            <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror"
                value="{{ old('merk', $tas->merk) }}">
            @error('merk')
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
            <label>JUMLAH</label>
            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                value="{{ old('jumlah', $tas->jumlah) }}">
            @error('jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a href="{{ route('tas.index') }}" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-app>
