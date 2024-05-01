<?php

namespace App\Http\Controllers;

use App\Models\TahunSekolah;
use Illuminate\Http\Request;

class TahunSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunSekolah = TahunSekolah::all(); 
        return view('tahunSekolah.index', compact('tahunSekolah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tahunSekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tahun" => 'required|interger',
            "startDate" => 'required|date',
            "endDate" => 'required|date'
        ]);
        $tahunSekolah = new TahunSekolah([
            "tahun" => $request->tahun,
            "startDate" => $request->startDate,
            "endDate" => $request->endDate
        ]); 
        $tahunSekolah->save(); 
        return redirect()->route('tahunSekolah.create')->with('success', 'Tahun Sekolah berhasil ditambahkan');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $tahunSekolah = TahunSekolah::find($id); 
        $tahunSekolah->delete(); 
        return redirect()->route('tahunSekolah.index')->with('success', 'Tahun Sekolah berhasil dihapus');
    }
}
