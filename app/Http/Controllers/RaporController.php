<?php

namespace App\Http\Controllers;

use App\Models\Rapor;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TahunSekolah;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Subjek; 
use PHPUnit\TextUI\Command\ListTestSuitesCommand; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use function Illuminate\Support\Facades\Crypt\encrypt; 


class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRapor = Rapor::all(); 
        $listSiswa = Siswa::all(); 
        return view('guru.gurupenilaian', compact('listRapor', 'listSiswa'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listSiswa = Siswa::all(); 
        $listTahun = TahunSekolah::all();
        $listSubjek = Subjek::all();
        return view('guru.guruPenilaianDetail', compact('listSiswa', 'listTahun', 'listSubjek'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nilaiUTS" => "required|integer",
            "nilaiUAS"  => "integer",
            "nilaiAfektif"  => "required|integer",
            "pendapatGuru"  => "required|string",
            "tSiswa_idSiswa" => "required|exists:tsiswa,idSiswa", 
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunSekolah,idtahunSekolah"
        ]);
        $pegawaiId = Auth::user()->id;
        $rapor = new Rapor([
            "nilaiUTS" => $request-> nilaiUTS,
            "nilaiUAS"  =>$request->nilaiUAS,
            "nilaiAfektif"  => $request->nilaiAfektif,
            "pendapatGuru"  => $request->pendapatGuru,
            "tSiswa_idSiswa" => $request->tSiswa_idSiswa, 
            "idGuru" => $pegawaiId,
            "tSubjek_id" => $request->tSubjek_id,
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah
        ]);
        $rapor->save(); 
        return redirect()->back()->with('success', 'Rapor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $id = Auth::user()->siswa->idSiswa;
        $listRapor = Rapor::where('tSiswa_idSiswa', $id)->get(); 
        return view('siswa.siswapenilaian', compact('listRapor'));
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
            "nilaiAfektif"  => "required|double",
            "pendapatGuru"  => "required|string",
            "tSiswa_idSiswa" => "required|exists:tsiswa, idSiswa", 
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah"
        ]);
        $rapor->update([
            "nilaiUTS" => $request-> nilaiUTS,
            "nilaiUAS"  =>$request->nilaiUAS,
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
    public function generatePDF()
    {
        $id = Auth::user()->siswa->idSiswa;
        $listRapor = Rapor::where('tSiswa_idSiswa', $id)->get(); 

        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = Pdf::loadView('siswa.siswapenilaian', $data, compact('listRapor'));
        return $pdf->stream();
    }

    public function delete($id)
    {
        $rapor = Rapor::find($id); 
        $rapor->delete(); 
        return redirect()->route('rapor.index')->with('success', 'Rapor berhasil dihapus');
    }
}
