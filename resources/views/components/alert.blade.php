@props(['tipe' => 'info'])
<div {{ $attributes->merge(['class' => "alert alert-$tipe"]) }}>
    {{ $slot }}
</div>

<x-alert tipe="sukses">Data berhasil disimpan.</x-alert>
<x-harga-produk :nilai="$p['harga']" :diskon="true" />