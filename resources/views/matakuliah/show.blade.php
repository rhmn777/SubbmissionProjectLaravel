<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>

    <ul>
        <li><strong>Kode Mata Kuliah:</strong> {{ $matakuliah->kode_matakuliah }}</li>
        <li><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_matakuliah }}</li>
        <li><strong>Jumlah SKS:</strong> {{ $matakuliah->sks }}</li>
        <li><strong>Tanggal Dibuat:</strong> {{ $matakuliah->created_at->format('d-m-Y H:i:s') }}</li>
        <li><strong>Tanggal Diperbarui:</strong> {{ $matakuliah->updated_at->format('d-m-Y H:i:s') }}</li>
    </ul>

    <a href="{{ route('matakuliah.index') }}">Kembali ke Daftar Mata Kuliah</a>
</body>
</html>