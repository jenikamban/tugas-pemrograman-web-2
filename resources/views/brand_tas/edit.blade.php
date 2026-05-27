<x-app>
    <x-slot:title>Edit BrandTas</x-slot>

    <form action="{{ route('brand-tas.update', $brand) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_brand" class="form-label">Nama Brand</label>
            <input type="text" class="form-control" id="nama_brand" name="nama_brand"
                value="{{ old('nama_brand', $brand->nama_brand) }}" required>
        </div>

        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal</label>
            <input type="text" class="form-control" id="negara_asal" name="negara_asal"
                value="{{ old('negara_asal', $brand->negara_asal) }}" required>
        </div>

        <div class="mb-3">
            <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
            <input type="number" class="form-control" id="tahun_berdiri" name="tahun_berdiri"
                value="{{ old('tahun_berdiri', $brand->tahun_berdiri) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('brand-tas.index') }}" class="btn btn-warning">cancel</a>
    </form>
</x-app>
