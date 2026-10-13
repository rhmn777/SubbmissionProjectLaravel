<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Rohman Dwi Cahyo';
        $nim = '242520108';
        $prodi = 'Teknik Informatika';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
}