<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPegawai = Pegawai::all(); 
        return view('pegawai.index', compact('listPegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tpegawai',
            'username' => 'required|string|max:255|unique:tpegawai',
            'password' => 'required|string|min:8',
            'alamat' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'peran' => 'required|string|in:Guru, Admin, Pustakawan',
            'nomorTelp' => 'required|string',
        ]);

        $pegawai = new Pegawai([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'tanggalMasuk' => $request->tanggalMasuk,
            'peran' => $request->peran,
            'nomorTelp' => $request->nomorTelp,
        ]);

        $pegawai->save();
        return redirect()->route('pegawai.create')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function show($id)
    {
        $Pegawai = Pegawai::find($id); 
        return view('pegawai.view', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pegawai.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Pegawai = Pegawai::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tpegawai',
            'username' => 'required|string|max:255|unique:tpegawai',
            'password' => 'required|string|min:8',
            'alamat' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'peran' => 'required|string|in:Guru, Admin, Pustakawan',
            'nomorTelp' => 'required|string',
        ]);

        $Pegawai->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->has('password') ? bcrypt($request->password) : $Pegawai->password,
            'alamat' => $request->alamat,
            'tanggalMasuk' => $request->tanggalMasuk,
            'peran' => $request->peran,
            'nomorTelp' => $request->nomorTelp,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $Pegawai = Pegawai::find($id);
        $Pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
