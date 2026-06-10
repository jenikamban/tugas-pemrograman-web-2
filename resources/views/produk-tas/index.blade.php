<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('produk-tas.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($tas as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    {{ $loop->iteration }}.
                    {{ $item->nama_produk }} --
                    Rp {{ number_format($item->harga, 0, ',', '.') }} --
                    {{ $item->warna }} --
                    Stok: {{ $item->stok }}
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
