<x-app>
    <x-slot:title>Tambah Koleksi Tas</x-slot>


    <form action="{{ route('koleksi-tas.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Nama Koleksi</label>
            <input type="text" name="nama_koleksi" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Jenis Koleksi</label>
            <select name="jenis_koleksi" class="form-select" required>
                <option value="Handbag">Handbag</option>
                <option value="Backpack">Backpack</option>
                <option value="Tote">Tote</option>
                <option value="Shoulder Bag">Shoulder Bag</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Material</label>
            <select name="material" class="form-select" required>
                <option value="Kulit">Kulit</option>
                <option value="Kanvas">Kanvas</option>
                <option value="Denim">Denim</option>
                <option value="Nylon">Nylon</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Brand Tas</label>
            <select name="brand_tas_id" class="form-select" required>
                <option value="">-- Pilih Brand --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->nama_brand }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary">submit</button>
            <a href="{{ route('koleksi-tas.index') }}" class="btn btn-warning">cancel</a>
        </div>
    </form>
</x-app>
