<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'min:3', 'max:45'],
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        return back()->with('loginError', 'Login failed!');
    }
    protected function redirectBasedOnRole()
    {
        $role = Auth::user()-> role; 
        switch ($role) {
            case 'Admin':
                return redirect('/admin/dashboard');
            case 'Siswa':
                return redirect('/siswa/dashboard');
            case 'Pustakawan':
                return redirect('/pustakawan/dashboard');
            case 'Guru':
                return redirect('/guru/dashboard');
            default:
                return redirect('auth.login');
        }
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('auth.login');
    }
}
