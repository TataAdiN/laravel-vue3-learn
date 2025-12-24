<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [DashboardController::class, "index"])
    ->name("home")
    ->middleware("auth");
Route::controller(AuthController::class)
    ->prefix("auth")
    ->name("auth.")
    ->group(function () {
        Route::get("/", "index");
        Route::post("/", "auth")->name("validate");
    });
