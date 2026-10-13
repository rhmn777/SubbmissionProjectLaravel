<?php 
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', function () { 
    return view('welcome'); 
}); 
 
Route::get('/halo', function () { 
    return 'Halo, selamat datang di Laravel 13!'; 
}); 
 
// Arrow function (lebih ringkas) 
Route::get('/waktu', fn () => now()->format('d-m-Y H:i:s')); 

// Parameter wajib 
Route::get('/profil/{nama}', function (string $nama) { 
    return "Halo, {$nama}!"; 
}); 
 
// Parameter opsional (beri nilai default) 
Route::get('/kategori/{nama?}', function (?string $nama = 'semua') { 
    return "Menampilkan kategori: {$nama}"; 
}); 
 
// Lebih dari satu parameter 
Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) { 
    return "Kelas {$kode}, NIM {$nim}"; 
}); 

Route::get('/artikel/{id}', function (int $id) { 
    return "Artikel nomor {$id}"; 
})->whereNumber('id'); 
 
Route::get('/pengguna/{username}', function (string $username) { 
    return "Pengguna: {$username}"; 
})->whereAlpha('username'); 
 
Route::get('/kode/{kode}', function (string $kode) { 
    return "Kode: {$kode}"; 
})->where('kode', '[A-Z]{3}[0-9]{2}'); 

// Route::view tidak memerlukan closure 
Route::view('/tentang', 'tentang')->name('tentang'); 
 
Route::get('/kontak', function () { 
    return view('kontak', ['email' => 'info@kampus.ac.id']); 
})->name('kontak'); 

Route::prefix('admin')->name('admin.')->group(function () { 
 
    Route::get('/dashboard', fn () => 'Dashboard Admin') 
        ->name('dashboard');   // URL: /admin/dashboard, nama: admin.dashboard 
 
    Route::get('/pengaturan', fn () => 'Pengaturan Admin') 
        ->name('pengaturan');  // URL: /admin/pengaturan, nama: admin.pengaturan 
}); 

Route::redirect('/beranda', '/'); 

// Dieksekusi bila tidak ada route yang cocok (letakkan paling bawah) 
Route::fallback(function () { 
    return response('Halaman tidak ditemukan (kustom).', 404); 
});

use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');