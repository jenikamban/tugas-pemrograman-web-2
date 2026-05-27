<x-app>

    <x-slot:title>Create Brand Tas</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('brand-tas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Brand</label>
            <input type="text" name="nama_brand" class="form-control" placeholder="Masukkan nama brand..."
                value="{{ old('nama_brand') }}">
        </div>

        <div class="mb-3">
            <label>Negara Asal</label>
            <input type="text" name="negara_asal" class="form-control" placeholder="Masukkan negara asal..."
                value="{{ old('negara_asal') }}">
        </div>

        <div class="mb-3">
            <label>Tahun Berdiri</label>
            <input type="number" name="tahun_berdiri" class="form-control" placeholder="Masukkan tahun berdiri..."
                value="{{ old('tahun_berdiri') }}">
        </div>

        <a href="{{ route('brand-tas.index') }}" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>

</x-app>
