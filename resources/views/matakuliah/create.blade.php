<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Data Mata Kuliah</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div>
            <label for="kode_matakuliah">Kode Mata Kuliah</label><br>
            <input type="text" id="kode_matakuliah" name="kode_matakuliah" value="{{ old('kode_matakuliah') }}">
            @error('kode_matakuliah')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <div>
            <label for="nama_matakuliah">Nama Mata Kuliah</label><br>
            <input type="text" id="nama_matakuliah" name="nama_matakuliah" value="{{ old('nama_matakuliah') }}">
            @error('nama_matakuliah')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <div>
            <label for="sks">Jumlah SKS (1 - 6)</label><br>
            <input type="number" id="sks" name="sks" min="1" max="6" value="{{ old('sks') }}">
            @error('sks')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
</body>
</html>