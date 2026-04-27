<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-primary mb-3" href="{{ route('produk-tas.create') }}">
        Create
    </a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="list-group">
        @forelse ($tas as $item)
            <li class="list-group-item">
                {{ $loop->iteration }} .
                {{ $item->nama }} --
                {{ $item->merk }} --
                Rp {{ number_format($item->harga, 0, ',', '.') }} --
                {{ $item->warna }} --
                {{ $item->jumlah }}
            </li>
        @empty
            <li class="list-group-item text-center">
                Data belum ada
            </li>
        @endforelse
    </ul>

</x-app>
