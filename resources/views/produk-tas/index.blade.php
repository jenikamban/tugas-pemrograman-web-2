<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Alert sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Tombol Create --}}
    <a class="btn btn-primary mb-3" href="{{ route('produk-tas.create') }}" role="button">
        Create
    </a>




    {{-- Daftar Produk Tas --}}
    <ul class="list-group">
        @forelse ($tas as $item)
            <li class="list-group-item fs-7">
                {{ $loop->iteration }}.
                <strong>{{ $item->nama }}</strong> --
                {{ $item->merk }} --
                Rp {{ number_format($item->harga, 0, ',', '.') }} --
                {{ $item->warna }} --
                Stok: {{ $item->jumlah }}

                <div class="mt-2">

                    <a href="{{ route('produk-tas.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('produk-tas.destroy', $item) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('ANDA YAKIN?')">Delete</button>
                    </form>


                </div>
            </li>
        @empty
            <li class="list-group-item">Data produk tas tidak ditemukan.</li>
        @endforelse
    </ul>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $tas->links() }}
    </div>
</x-app>
