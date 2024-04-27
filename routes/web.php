<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
    ]);
});

Route::get('/penilaian', function () {
    return view('penilaian', [
        'title' => 'Penilaian',
    ]);
});

Route::get('/presensi', function () {
    return view('presensi', [
        'title' => 'Presensi',
    ]);
});

Route::get('/jadwalkelas', function () {
    return view('jadwalkelas', [
        'title' => 'Jadwal Kelas',
    ]);
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', [
        'title' => 'Peminjaman Buku',
    ]);
});

Route::get('/pencarianprofil', function () {
    return view('pencarianprofil', [
        'title' => 'Pencarian Profil',
    ]);
});

Route::get('/datakaryawan', function () {
    return view('datakaryawan', [
        'title' => 'Data Karyawan',
    ]);
});
