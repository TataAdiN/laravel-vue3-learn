<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render("Auth/Index", []);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended()
                ->with(["success" => "Login success!"]);
        }
        return back()->withErrors([
            "auth" => "Wrong Username or Password, Please try again!",
        ]);
    }
}
