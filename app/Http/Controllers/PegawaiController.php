<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPegawai = Pegawai::all(); 
        return view('kepsek.datakaryawan', compact('listPegawai'));
    }

    public function create()
    {
        return view('kepsek.tambahkaryawan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:45', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:45',
            'role' => 'string|in:Siswa,Guru,Admin,Pustakawan'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        $userId = $user->id; 

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tanggalMasuk' => 'required|date',
            "user_id" => "exists:users, id",
            'nomorTelp' => 'required|string',
        ]);

        $pegawai = new Pegawai([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggalMasuk' => $request->tanggalMasuk,
            'user_id' => $userId, 
            'nomorTelp' => $request->nomorTelp,
        ]);

        $pegawai->save();
        return redirect()->route('kepsek.tambahkaryawan')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function show($id)
    {
        $Pegawai = Pegawai::find($id); 
        return view('kepsek.view', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('kepsek.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Pegawai = Pegawai::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'nomorTelp' => 'required|string',
        ]);

        $Pegawai->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'tanggalMasuk' => $request->tanggalMasuk,
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
