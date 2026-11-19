<h1>Detail Jurusan</h1>
<ul>
    <li><strong>ID:</strong> {{ $jurusan->id }}</li>
    <li><strong>Kode:</strong> {{ $jurusan->kode }}</li>
    <li><strong>Nama Jurusan:</strong> {{ $jurusan->nama }}</li>
    <li><strong>Dibuat Pada:</strong> {{ $jurusan->created_at->format('d-m-Y H:i') }}</li>
</ul>
<a href="/jurusan">Kembali ke Daftar Jurusan</a>