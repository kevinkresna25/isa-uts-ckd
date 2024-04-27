<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('umum.dashboard', [
        'title' => 'Dashboard',
    ]);
});

Route::get('/penilaian', function () {
    return view('guru.penilaian', [
        'title' => 'Penilaian',
    ]);
});

Route::get('/presensi', function () {
    return view('guru.presensi', [
        'title' => 'Presensi',
    ]);
});

Route::get('/jadwalkelas', function () {
    return view('guru.walikelas.jadwalkelas', [
        'title' => 'Jadwal Kelas',
    ]);
});

Route::get('/peminjamanbuku', function () {
    return view('pustakawan.peminjamanbuku', [
        'title' => 'Peminjaman Buku',
    ]);
});

Route::get('/pencarianprofil', function () {
    return view('umum.pencarianprofil', [
        'title' => 'Pencarian Profil',
    ]);
});

Route::get('/datakaryawan', function () {
    return view('kepsek.datakaryawan', [
        'title' => 'Data Karyawan',
    ]);
});
