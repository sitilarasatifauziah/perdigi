<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    // Tambahkan fungsi create, read, update, dan delete di sini sesuai kebutuhan

    public function create()
    {
        return view('bukus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil ditambahkan!');
    }
}
