<x-app>
    <x-slot:title>Edit Koleksi Tas</x-slot>

    <!-- Perhatikan: pakai parameter koleksi_ta -->
    <form action="{{ route('koleksi-tas.update', ['koleksi_ta' => $koleksi]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_koleksi" class="form-label">Nama Koleksi</label>
            <input type="text" class="form-control" id="nama_koleksi" name="nama_koleksi"
                value="{{ old('nama_koleksi', $koleksi->nama_koleksi) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_koleksi" class="form-label">Jenis Koleksi</label>
            <input type="text" class="form-control" id="jenis_koleksi" name="jenis_koleksi"
                value="{{ old('jenis_koleksi', $koleksi->jenis_koleksi) }}" required>
        </div>

        <div class="mb-3">
            <label for="material" class="form-label">Material</label>
            <input type="text" class="form-control" id="material" name="material"
                value="{{ old('material', $koleksi->material) }}" required>
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control" id="warna" name="warna"
                value="{{ old('warna', $koleksi->warna) }}" required>
        </div>

        <div class="mb-3">
            <label for="brand_tas_id" class="form-label">Brand Tas</label>
            <select class="form-select" id="brand_tas_id" name="brand_tas_id" required>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}"
                        {{ old('brand_tas_id', $koleksi->brand_tas_id) == $brand->id ? 'selected' : '' }}>
                        {{ $brand->nama_brand }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('koleksi-tas.index') }}" class="btn btn-warning">Cancel</a>
    </form>

</x-app>
