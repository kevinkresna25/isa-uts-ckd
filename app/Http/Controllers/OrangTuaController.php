<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listOrangTua = OrangTua::all(); 
        return view('orangTua.index', compact('listOrangTua'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orangTua.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:torangtua',
            'username' => 'required|string|max:255|unique:torangtua',
            'password' => 'required|string|min:8',
            "jenisKelamin" => 'required|string|in: L, P',
            'nomorTelp' => 'required|string',
            'hubungan' => 'required|string'
        ]);
        $orangTua = new OrangTua([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'jenisKelamin' => $request->jenisKelamin, 
            'nomorTelp' => $request->nomorTelp,
            'pasFoto' => $request->pasFoto,
            'hubungan' => $request->hubungan,
        ]);
        $orangTua->save();
        return redirect()->route('orangTua.create')->with('success', 'Orang tua berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orangTua = OrangTua::find($id); 
        return view('orangTua.view', compact('orangTua')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orangTua = OrangTua::find($id); 
        return view('orangTua.edit', compact('orangTua')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $orangTua = OrangTua::find($id); 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:torangtua',
            'username' => 'required|string|max:255|unique:torangtua',
            'password' => 'required|string|min:8',
            "jenisKelamin" => 'required|string|in: L, P',
            'nomorTelp' => 'required|string',
            'hubungan' => 'required|string'
        ]);
        $orangTua->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password) ? bcrypt($request->password) : $orangTua->password,
            'jenisKelamin' => $request->jenisKelamin, 
            'nomorTelp' => $request->nomorTelp,
            'pasFoto' => $request->pasFoto,
            'hubungan' => $request->hubungan,
        ]);
        return redirect()->route('orangTua.index')->with('success', 'Orang tua berhasil diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(OrangTua $id)
    {
        $orangTua = OrangTua::find($id); 
        $orangTua->delete();
        return redirect()->route('orangTua.index')->with('success', 'Orang tua berhasil dihapus'); 
    }
}
