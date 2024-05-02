<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Siswa;
use App\Models\PinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
        $tsiswa = Siswa::all();
        $tbuku = Buku::all();
        return view('pustakawan.pustakapeminjamanbuku', compact('tsiswa', 'tbuku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tSiswa_idSiswa' => 'required|exists:tsiswa,idSiswa',
            'tBuku_idBuku' => 'required|exists:tbuku,idBuku',
            'tanggalPinjam' => 'required|date'
        ]);

        // Ambil ID pegawai yang sedang login
        $pegawaiId = Auth::user()->id;

        // Simpan data peminjaman buku ke dalam tabel tpinjambuku
        PinjamBuku::create([
            'tSiswa_idSiswa' => $request->tSiswa_idSiswa,
            'tBuku_idBuku' => $request->tBuku_idBuku,
            'tanggalPinjam' => $request->tanggalPinjam,
            'tPegawai_idPegawai' => $pegawaiId,
        ]);

        return redirect()->back()->with('success', 'Peminjaman buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $id = Auth::user()->siswa->idSiswa;
        $pinjamBuku = PinjamBuku::where('tSiswa_idSiswa', $id)->get(); 
        return view('siswa.siswapeminjamanbuku', compact('pinjamBuku'));
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
