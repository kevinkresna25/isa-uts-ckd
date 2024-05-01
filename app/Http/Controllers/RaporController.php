<?php

namespace App\Http\Controllers;

use App\Models\Rapor;
use Illuminate\Http\Request;

class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRapor = Rapor::all(); 
        return view('rapor.index', compact('listRapor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rapor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nilaiUTS" => "required|double",
            "nilaiUAS"  => "double",
            "nilaiTugas"  => "required|double",
            "nilaiKeterampilan"  => "required|double",
            "nilaiAfektif"  => "required|double",
            "pendapatGuru"  => "required|string",
            "tSiswa_idSiswa" => "required|exists:tsiswa, idSiswa", 
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah"
        ]);
        $rapor = new Rapor([
            "nilaiUTS" => $request-> nilaiUTS,
            "nilaiUAS"  =>$request->nilaiUAS,
            "nilaiTugas"  => $request->nilaiTugas,
            "nilaiKeterampilan"  =>$request-> nilaiKeterampilan,
            "nilaiAfektif"  => $request->nilaiAfektif,
            "pendapatGuru"  => $request->pendapatGuru,
            "tSiswa_idSiswa" => $request->tSiswa_idSiswa, 
            "idGuru" => $request->idGuru,
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah
        ]);
        $rapor->save(); 
        return redirect()->route('rapor.create')->with('success', 'Rapor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rapor = Rapor::find($id); 
        return view('rapor.view', compact('rapor'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $rapor = Rapor::find($id); 
        return view('rapor.edit', compact('rapor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rapor = Rapor::find($id); 
        $request->validate([
            "nilaiUTS" => "required|double",
            "nilaiUAS"  => "double",
            "nilaiTugas"  => "required|double",
            "nilaiKeterampilan"  => "required|double",
            "nilaiAfektif"  => "required|double",
            "pendapatGuru"  => "required|string",
            "tSiswa_idSiswa" => "required|exists:tsiswa, idSiswa", 
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah"
        ]);
        $rapor->update([
            "nilaiUTS" => $request-> nilaiUTS,
            "nilaiUAS"  =>$request->nilaiUAS,
            "nilaiTugas"  => $request->nilaiTugas,
            "nilaiKeterampilan"  =>$request-> nilaiKeterampilan,
            "nilaiAfektif"  => $request->nilaiAfektif,
            "pendapatGuru"  => $request->pendapatGuru,
            "tSiswa_idSiswa" => $request->tSiswa_idSiswa, 
            "idGuru" => $request->idGuru,
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah
        ]);
        return redirect()->route('rapor.index')->with('success', 'Rapor berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $rapor = Rapor::find($id); 
        $rapor->delete(); 
        return redirect()->route('rapor.index')->with('success', 'Rapor berhasil dihapus');
    }
}
