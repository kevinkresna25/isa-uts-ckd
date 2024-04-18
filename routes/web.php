<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
    ]);
});

Route::get('/presensi', function () {
    return view('presensi', [
        'title' => 'Presensi',
    ]);
});
