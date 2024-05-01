<?php

namespace App\Http\Controllers;

use App\Models\Subjek;
use Illuminate\Http\Request;

class SubjekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSubjek = Subjek::all(); 
        return view('subjek.index', compact('listSubjek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "namaSubjek" => 'required|string'
        ]);
        $subjek = new Subjek([
            "namaSubjek" => $request->namaSubjek
        ]);
        $subjek->save(); 
        return redirect()->route('subjek.create')->with('success', 'Subjek berhasil ditambahkan');
    }
    public function delete($id)
    {
        $subjek = Subjek::find($id); 
        $subjek->delete(); 
        return redirect()->route('subjek.index')->with('success', 'Subjek berhasil dihapus');
    }
}
