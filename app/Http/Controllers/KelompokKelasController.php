<?php

namespace App\Http\Controllers;

use App\Models\KelompokKelas;
use Illuminate\Http\Request;

class KelompokKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKelompokKelas = KelompokKelas::all(); 
        return view('kelompokKelas.index', compact('listKelompokKelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelompokKelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "namaKelas" => "required|string|max:45", 
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah", 
        ]);
        $kelompokKelas = new KelompokKelas([
            "idGuru" => $request->idGuru,
            "namaKelas" => $request->namaKelas, 
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah, 
        ]); 
        $kelompokKelas->save(); 
        return redirect()->route('kelompokKelas.create')->with('success', 'Kelompok Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kelompokKelas = KelompokKelas::with('Siswa')->find($id);
        $listSiswa = $kelompokKelas->Siswa; 
        return view('kelompokKelas.view', compact('kelompokKelas', 'listSiswa'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelompokKelas = KelompokKelas::find($id); 
        return view('kelompokKelas.edit', compact('kelompokKelas')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelompokKelas = KelompokKelas::find($id); 
        $request->validate([
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "namaKelas" => "required|string|max:45", 
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah", 
        ]);
        $kelompokKelas->update([
            "idGuru" => $request->idGuru,
            "namaKelas" => $request->namaKelas, 
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah, 
        ]); 
        return redirect()->route('kelompokKelas.Index')->with('success', 'Kelompok Kelas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $kelompokKelas = KelompokKelas::find($id);
        $kelompokKelas->delete(); 
        return redirect()->route('kelompokKelas.Index')->with('success', 'Kelompok Kelas berhasil diubah');
    }
}
