<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PinjamBukuController;

Route::get('/welcome', function () {
    return view('welcome');
});

// AUTH

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// UMUM

Route::get('/', function () {
    return view('umum.dashboard', [
        'title' => 'Dashboard',
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dataKaryawan', [PegawaiController::class, 'index'])->name('dataKaryawan');
Route::get('/tambahKaryawan', [PegawaiController::class, 'create'])->name('kepsek.tambahkaryawan');
Route::post('/tambahKaryawan', [PegawaiController::class, 'store']);

Route::get('/pencarianprofil', function () {
    return view('umum.pencarianprofil', [
        'title' => 'Pencarian Profil',
    ]);
});


// SISWA

Route::get('/siswapenilaian', function () {
    return view('siswa.siswapenilaian', [
        'title' => 'Penilaian',
        'role' => 'siswa',
    ]);
});

Route::get('/siswapresensi', function () {
    return view('siswa.siswapresensi', [
        'title' => 'Presensi',
        'role' => 'siswa',
    ]);
});

Route::get('/siswajadwalkelas', function () {
    return view('siswa.siswajadwalkelas', [
        'title' => 'Jadwal Kelas',
        'role' => 'siswa',
    ]);
});

Route::get('/siswapeminjamanbuku', function () {
    return view('siswa.siswapeminjamanbuku', [
        'title' => 'Peminjaman Buku',
        'role' => 'siswa',
    ]);
});



// GURU

Route::get('/gurupenilaian', function () {
    return view('guru.gurupenilaian', [
        'title' => 'Penilaian',
        'role' => 'guru',
    ]);
});

Route::get('/gurupresensi', function () {
    return view('guru.gurupresensi', [
        'title' => 'Presensi',
        'role' => 'guru',
    ]);
});

Route::get('/gurujadwalkelas', function () {
    return view('guru.walikelas.walijadwalkelas', [
        'title' => 'Jadwal Kelas',
        'role' => 'wali',
    ]);
});



// PUSTAKAWAN

Route::get('/pustakapeminjamanbuku', function () {
    return view('pustakawan.pustakapeminjamanbuku', [
        'title' => 'Peminjaman Buku',
        'role' => 'pustaka',
    ]);
});

Route::get('/pustakapeminjamanbuku', [PinjamBukuController::class, 'create'])->name('peminjaman.create');
Route::post('/pustakapeminjamanbuku', [PinjamBukuController::class, 'store'])->name('peminjaman.store');

Route::get('/pustakatambahbuku', function () {
    return view('pustakawan.pustakatambahbuku', [
        'title' => 'Tambah Buku',
        'role' => 'pustaka',
    ]);
});

Route::get('/pustakatambahbuku', [BukuController::class, 'create'])->name('tambahbuku.create');
Route::post('/pustakatambahbuku', [BukuController::class, 'store'])->name('buku.store');


// KEPSEK

Route::get('/datakaryawan', function () {
    return view('kepsek.kepsekdatakaryawan', [
        'title' => 'Data Karyawan',
        'role' => 'kepsek',
    ]);
});
