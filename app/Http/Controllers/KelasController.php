<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKelas = Kelas::all(); 
        return view('kelas.index', compact('listKelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tSubjek_id" => "required|exists:tsubjek,id",
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah", 
            "tkelompokkelas_id" => "required|exists:tkelompokkelas, id",
            "lokasiKelas" => "required|string|max:45",
            "tanggal" => "required|date",
            "jamMulai" => "required|time",
            "jamSelesai" => "required|time"
        ]);
        $kelas = new Kelas([
            "tSubjek_id" => $request->tSubjek_id,
            "idGuru" => $request->idGuru, 
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah,
            "tkelompokkelas_id" => $request->tkelompokkelas_id, 
            "lokasiKelas" => $request->lokasiKelas, 
            "tanggal" => $request->tanggal, 
            "jamMulai" => $request->jamMulai, 
            "jamSelesai" => $request->jamSelesai
        ]);
        $kelas->save(); 
        $siswaIds = Siswa::where('idKelompokKelas', $request->tkelompokkelas_id)
                 ->pluck('id');
        foreach($siswaIds as $id)
        {
            $kehadiran = new Kehadiran([
                "tSiswa_idSiswa" => $id,
                "tanggal" => $kelas->tanggal,
                "statusHadir" => 0,
                "tKelas_id" => $kelas->id,
            ]); 
            $kehadiran->save(); 
        }
        return redirect()->route('kelas.create')->with('success', 'Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
public function show($id)
    {
        $kelas = Kelas::find($id); 
        return view('kelas.view', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id); 
        return view('kelas.edit', compact('kelas')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id); 
        $request->validate([
            "tSubjek_id" => "required|exists:tsubjek,id",
            "idGuru" => "required|exists:tpegawai,idPegawai",
            "tahunSekolah_idtahunSekolah" => "required|exists:tahunsekolah, idtahunSekolah", 
            "tkelompokkelas_id" => "required|exists:tkelompokkelas, id",
            "lokasiKelas" => "required|string|max:45",
            "tanggal" => "required|date",
            "jamMulai" => "required|time",
            "jamSelesai" => "required|time"
        ]);
        $kelas->update([
            "tSubjek_id" => $request->tSubjek_id,
            "idGuru" => $request->idGuru, 
            "tahunSekolah_idtahunSekolah" => $request->tahunSekolah_idtahunSekolah,
            "tkelompokkelas_id" => $request->tkelompokkelas_id, 
            "lokasiKelas" => $request->lokasiKelas, 
            "tanggal" => $request->tanggal, 
            "jamMulai" => $request->jamMulai, 
            "jamSelesai" => $request->jamSelesai
        ]);
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $kelas = Kelas::find($id); 
        $kelas->delete(); 
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}
