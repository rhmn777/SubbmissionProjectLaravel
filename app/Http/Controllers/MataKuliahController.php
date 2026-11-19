<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::orderBy('kode_matakuliah')->get();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create($validated);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}