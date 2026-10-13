<div class="kartu">
    @isset($judul) <h3>{{ $judul }}</h3> @endisset
    {{ $slot }}
</div>

<x-kartu>
    <x-slot:judul>Keyboard</x-slot:judul>
    Harga Rp 150.000
</x-kartu>