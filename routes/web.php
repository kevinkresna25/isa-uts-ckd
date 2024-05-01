<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// UMUM

Route::get('/', function () {
    return view('umum.dashboard', [
        'title' => 'Dashboard',
    ]);
});

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



// KEPSEK

Route::get('/datakaryawan', function () {
    return view('kepsek.kepsekdatakaryawan', [
        'title' => 'Data Karyawan',
        'role' => 'kepsek',
    ]);
});

