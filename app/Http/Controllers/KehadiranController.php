<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;
use App\Models\Kelas; 

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $kelas = Kelas::find($id); 
        $listPresensi = Kehadiran::whereBelongsTo($kelas); 
        return view('kehadiran.index', compact('listPresensi')); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $presensi = Kehadiran::Find($id); 
        $request->validate([
            'statusHadir' => 'required|string|in:Hadir, Sakit, Izin, Tidak Hadir'
        ]);
        $presensi->update(
            [
                'statusHadir' => $request->statusHadir 
            ]
        );
        return redirect()->route('kehadiran.index')->with('success', 'Presensi berhasil diubah');
    }
}
