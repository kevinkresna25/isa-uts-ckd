<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User; 
use Illuminate\Support\Facades\Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('access-admin', function (User $user) {
            return $user->role === "Admin";
        });
        Gate::define('access-siswa', function (User $user) {
            return $user->role === "Siswa";
        });
        Gate::define('access-guru', function (User $user) {
            return $user->role === "Guru";
        });
        Gate::define('access-pustakawan', function (User $user) {
            return $user->role === "Pustakawan";
        });
    }
}
