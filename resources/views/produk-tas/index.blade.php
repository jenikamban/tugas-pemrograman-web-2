<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('produk-tas.create') }}" role="button">
        Create
    </a>

    <ul class="list-group">
        @foreach ($tas as $item)
            <li class="list-group-item fs-7">
                {{ $loop->iteration }}.
                {{ $item->nama }} --
                {{ $item->merk }} --
                Rp {{ number_format($item->harga, 0, ',', '.') }} --
                {{ $item->warna }} --
                {{ $item->jumlah }}

                <a href="{{ route('produk-tas.edit', $item) }}" class="btn btn-warning">
                    Edit
                </a>

            </li>
        @endforeach
    </ul>

</x-app>
