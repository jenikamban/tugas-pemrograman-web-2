<x-app>
    <x-slot:title>Data Brand Tas</x-slot:title>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('brand-tas.create') }}">Create</a>

    <form method="GET" action="{{ route('brand-tas.index') }}" class="mb-3">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama brand atau negara asal">
        <button type="submit" class="btn btn-secondary">search</button>
    </form>

    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $brand->nama_brand }} --
                {{ $brand->negara_asal }} --
                Tahun Berdiri: {{ $brand->tahun_berdiri }}

                <a href="{{ route('brand-tas.edit', $brand) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('brand-tas.destroy', $brand) }}" method="POST" class="d-inline">
                    @method('DELETE') @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('ANDA YAKIN?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $brands->links() }}
</x-app>
