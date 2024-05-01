<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBuku = Buku::all(); 
        return view('buku.index', compact('listBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "namaBuku" => 'required|string',
            "pengarangBuku" => 'required|string',
            "deskripsiBuku" => 'required|string',
            "tahunTerbitBuku => 'required|date",
        ]);
        $buku = new Buku([
            "namaBuku" => $request->namaBuku,
            "pengarangBuku" => $request->pengarangBuku,
            "deskripsiBuku" => $request -> deskripsiBuku,
            "tahunTerbitBuku" => $request -> tahunTerbitBuku,
        ]);
        $buku->save(); 
        return redirect()->route('buku.create')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Buku = Buku::find($id); 
        return view('buku.view', compact('Buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Buku = Buku::Find($id); 
        return view('buku.edit', compact('Buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Buku = Buku::Find($id); 
        $request->validate([
            "namaBuku" => 'required|string',
            "pengarangBuku" => 'required|string',
            "deskripsiBuku" => 'required|string',
            "tahunTerbitBuku => 'required|date",
        ]);
        $Buku->update([
            "namaBuku" => $request->namaBuku,
            "pengarangBuku" => $request->pengarangBuku,
            "deskripsiBuku" => $request -> deskripsiBuku,
            "tahunTerbitBuku" => $request -> tahunTerbitBuku,
        ]);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $Buku = Buku::find($id);   
        $Buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
