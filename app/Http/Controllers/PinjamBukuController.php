<?php

namespace App\Http\Controllers;

use App\Models\PinjamBuku;
use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPinjamBuku = PinjamBuku::all();
        return view('pinjamBuku.index', compact('listPinjamBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjamBuku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tSiswa_idSiswa" => "required|exists:tsiswa, idSiswa",
            "tBuku_idBuku" => "required|exists: tbuku, idBuku ",
            "tanggalPinjam" => "required|date",
            "tanggalSeharusnyaKembali" => "required|date|after:tanggalPinjam",
            "tanggalDikembalikan" => "date|after:tanggalPinjam",
            "statusKembali" => "required|boolean",
            "tPegawai_idPegawai" => "required|exists:tpegawai,idPegawai"
        ]);
        $pinjamBuku = new PinjamBuku([
            "tSiswa_idSiswa" => $request->tSiswa_idSiswa,
            "tBuku_idBuku" => $request->tBuku_idBuku,
            "tanggalPinjam" => $request->tanggalPinjam,
            "tanggalSeharusnyaKembali" => $request->tanggalSeharusnyaKembali,
            "statusKembali" => $request->statusKembali,
            "tPegawai_idPegawai" => $request->tPegawai_idPegawai,
        ]);
        $pinjamBuku->save();
        return redirect()->route('pinjamBuku.create')->with('success', 'Buku berhasil dipinjam');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pinjamBuku = PinjamBuku::find($id);
        return view('pinjamBuku.view', compact('pinjamBuku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pinjamBuku = PinjamBuku::find($id);
        return view('pinjamBuku.edit', compact('pinjamBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pinjamBuku = PinjamBuku::find($id);
        $request->validate([
            "tanggalDikembalikan" => "date|after:tanggalPinjam",
            "statusKembali" => "required|boolean",
        ]);
        $pinjamBuku->update([
            "tanggalSeharusnyaKembali" => $request->tanggalSeharusnyaKembali,
            "statusKembali" => $request->statusKembali,
        ]);
        return redirect()->route('pinjamBuku.index')->with('success', 'Buku berhasil dikembalikan');
    }
}
