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
		Inertia::share(
			[
				'auth.user' => function () {
					return Auth::user() ? Auth::user()->load('roles') : null;
				},
                'auth.roles' => function () {
                    return Auth::user() ? Auth::user()->roles : [];
                },
				'flash' => function () {
					return [
						'success' => session('success'),
						'error' => session('error'),
					];
				},
				'errors' => function () {
					return Request::session()->get('errors') ? Request::session()->get('errors')->getBag('default')->getMessages() : (object)[];
				}
			]
		);
	}
}
