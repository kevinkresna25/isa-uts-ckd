<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\PinjamBukuController; 
use App\Http\Controllers\PDFController;
use App\Models\PinjamBuku; 

Route::get('/welcome', function () {
    return view('welcome');
});

// AUTH

Route::group(
    ['middleware' => 'guest'],
    function () {
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'authenticate']);

        Route::get('/register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'store']);
    }
);

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/', function () {
            return view('umum.dashboard', [
                'title' => 'Dashboard',
            ]);
        });
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    }
);
Route::group(
    ['middleware' => 'Admin'],
    function () {
        Route::get('/dataKaryawan', [PegawaiController::class, 'index'])->name('dataKaryawan');
        Route::get('/tambahKaryawan', [PegawaiController::class, 'create'])->name('kepsek.tambahkaryawan');
        Route::post('/tambahKaryawan', [PegawaiController::class, 'store']);
    }
);
Route::group(
    ['middleware' => 'Siswa'],
    function () {
        Route::get('/siswapenilaian', [RaporController::class, 'show'])->name('penilaianSiswa');
        Route::get('/generate-pdf', [RaporController::class, 'generatePDF']);
        Route::get('/siswapeminjamanbuku', [PinjamBukuController::class, 'show']);
        });
         // Route::get('/siswapresensi', function () {
        //     return view('siswa.siswapresensi', [
        //         'title' => 'Presensi',
        //         'role' => 'siswa',
        //     ]);
        // });

        // Route::get('/siswajadwalkelas', function () {
        //     return view('siswa.siswajadwalkelas', [
        //         'title' => 'Jadwal Kelas',
        //         'role' => 'siswa',
        //     ]);
        // });
Route::group(
    ['middleware' => 'Guru'],
    function () {
        Route::get('/gurupenilaian', [RaporController::class, 'index'])->name('penilaianGuru');
        Route::get('/guruTambahPenilaian', [RaporController::class, 'create']);
        Route::post('/guruTambahPenilaian', [RaporController::class, 'store']);
        // Route::get('/gurupresensi', function () {
        //     return view('guru.gurupresensi', [
        //         'title' => 'Presensi',
        //         'role' => 'guru',
        //     ]);
        // });

        // Route::get('/gurujadwalkelas', function () {
        //     return view('guru.walikelas.walijadwalkelas', [
        //         'title' => 'Jadwal Kelas',
        //         'role' => 'wali',
        //     ]);
        // });
    }
);
Route::group(
    ['middleware' => 'Pustakawan'],
    function () {

        Route::get('/pustakapeminjamanbuku', [PinjamBukuController::class, 'create'])->name('peminjaman.create');
        Route::post('/pustakapeminjamanbuku', [PinjamBukuController::class, 'store'])->name('peminjaman.store');


        Route::get('/pustakatambahbuku', [BukuController::class, 'create'])->name('tambahbuku.create');
        Route::post('/pustakatambahbuku', [BukuController::class, 'store'])->name('buku.store');
    }
);
