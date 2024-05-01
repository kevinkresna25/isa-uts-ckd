<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pustakawan.pustakatambahbuku', [
            'title' => 'Tambah Buku',
            'role' => 'pustaka',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'deskripsi' => 'required',
            'tahun_terbit' => 'required|date_format:Y-m-d',
        ]);

        Buku::create([
            'namaBuku' => $request->judul,
            'pengarangBuku' => $request->pengarang,
            'deskripsiBuku' => $request->deskripsi,
            'tahunTerbitBuku' => $request->tahun_terbit,
        ]);

        return redirect()->route('tambahbuku.create')->with('success', 'Buku berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
