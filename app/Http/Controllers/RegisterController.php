<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa; 

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:45', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:45',
            'role' => 'string|in: Siswa, Guru, Admin, Pustakawan'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $userId = $user->id; 
        $request->validate([
            'name' => 'required|string|max:255',
            "jenisKelamin" => 'required|string|in:L,P',
            'tanggalLahir' => 'required|date',
            "tkelompokkelas_id" => "exists:tkelompokkelas, id",
            "user_id" => "exists:users, id",
            'alamat' => 'required|string',
            'nomorTelp' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date',
        ]);
        $siswa = new Siswa([
            'nama' => $request->name,
            "jenisKelamin" => $request->jenisKelamin,
            'tanggalLahir' => $request->tanggalLahir,
            "tkelompokkelas_id" => $request->tkelompokkelas_id,
            'user_id' => $userId, 
            'alamat' => $request->alamat,
            'nomorTelp' => $request->nomorTelp,
            'tanggalMasuk' => $request->tanggalMasuk,
            'tanggalKeluar' => $request->tanggalKeluar,
        ]);
        $siswa->save();
        dd($siswa); 

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
