<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Admin; 
use App\Http\Middleware\Guru; 
use App\Http\Middleware\Pustakawan; 
use App\Http\Middleware\Siswa;  

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'Admin' => Admin::class,
            'Guru' => Guru::class,
            'Siswa' => Siswa::class, 
            'Pustakawan' => Pustakawan::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
