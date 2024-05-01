<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSiswa = Siswa::all();
        return view('siswa.index', compact('listPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         "jenisKelamin" => 'required|string|in: L, P',
    //         'tanggalLahir' => 'required|date',
    //         'alamat' => 'required|string',
    //         'nomorTelp' => 'required|string',
    //         'pasFoto' => 'required|string',
    //         'tanggalMasuk' => 'required|date',
    //         'tanggalKeluar' => 'required|date',
    //     ]);

    //     $siswa = new Siswa([
    //         'name' => $request->name,
    //         'tanggalLahir' => $request->tanggalLahir,
    //         'alamat' => $request->alamat,
    //         'nomorTelp' => $request->nomorTelp,
    //         'pasFoto' => $request->pasFoto,
    //         'tanggalMasuk' => $request->tanggalMasuk,
    //         'tanggalKeluar' => $request->tanggalKeluar,
    //     ]);

    //     $siswa->save();
    // return redirect()->route('siswa.create')->with('success', 'Siswa berhasil ditambahkan');
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Siswa = Siswa::Find($id);
        return view('siswa.view', compact('Siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Siswa = Siswa::Find($id);
        return view('siswa.edit', compact('Siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Siswa = Siswa::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'alamat' => 'required|string',
            'nomorTelp' => 'required|string',
            'pasFoto' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date',
        ]);
        $Siswa->update([
            'name' => $request->name,
            'tanggalLahir' => $request->tanggalLahir,
            'alamat' => $request->alamat,
            'nomorTelp' => $request->nomorTelp,
            'pasFoto' => $request->pasFoto,
            'tanggalMasuk' => $request->tanggalMasuk,
            'tanggalKeluar' => $request->tanggalKeluar,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $Siswa = Siswa::find($id);
        $Siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus');
    }

    public function search(Request $request)
    {
        $query = Siswa::query();

        if ($request->id) {
            $query->whereIn('idSiswa', explode(',', $request->id));
        }
        if ($request->name) {
            $query->where('nama', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->type && $request->type != '') { // Pastikan input tidak kosong
            $query->where('jenis_peran', $request->type);
        }
        if ($request->unit && $request->unit != '') { // Pastikan input tidak kosong
            $query->where('tKelompokKelas_id', $request->unit);
        }

        $siswa = $query->get();
        dd($siswa);
        return view('umum.pencarianprofil', compact('siswa'));
    }
}
