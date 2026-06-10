<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('produk-tas.index') }}" role="button">Back to Index</a>

    <ul class="list-group">
        @foreach ($tas as $item)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $item->nama_produk }} -- Rp {{ number_format($item->harga, 0, ',', '.') }} --
                {{ $item->warna }} -- Stok: {{ $item->stok }}

                <form action="{{ route('produk-tas.restore', $item) }}" method="POST" class="d-inline">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm"
                        onclick="return confirm('Yakin ingin mengembalikan data ini?')">Restore</button>
                </form>

                <form action="{{ route('produk-tas.forceDelete', $item) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus permanen?')">Force Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>
