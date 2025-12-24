<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::share([
            "auth.user" => fn() => Auth::user(),
            "flash" => fn() => [
                "success" => session("success"),
                "error" => session("error"),
            ],
            "errors" => fn() => Request::session()->get("errors")
                ? Request::session()
                    ->get("errors")
                    ->getBag("default")
                    ->getMessages()
                : (object) [],
        ]);
    }
}
