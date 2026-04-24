<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($tas as $tas)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $tas->nama }}. {{ $tas->merk }}.
                {{ $tas->harga }}. {{ $tas->stok }}. {{ $tas->warna }}</li>
        @endforeach
    </ul>
</x-app>
