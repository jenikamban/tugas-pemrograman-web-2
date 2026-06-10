<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <div class="d-flex gap-2 mb-3">
        <a class="btn btn-primary" href="{{ route('produk-tas.create') }}" role="button">Create</a>

    </div>

    <ul class="list-group">
        @foreach ($tas as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    {{ $loop->iteration }}.
                    {{ $item->nama_produk }} --
                    Rp {{ number_format($item->harga, 0, ',', '.') }} --
                    {{ $item->warna }} --
                    Stok: {{ $item->stok }} --
                    Deskripsi: {{ $item->deskripsi }} <!-- Tambahan -->
                </span>
                <span class="d-flex gap-2">
                    <a href="{{ route('produk-tas.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('produk-tas.destroy', $item) }}" method="POST"
                        onsubmit="return confirm('ANDA YAKIN INGIN MENGHAPUS PRODUK INI?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

</x-app>
