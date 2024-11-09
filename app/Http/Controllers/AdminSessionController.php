<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AdminSessionController extends Controller
{
    public function index(): View
    {
        return view('admin.login');
    }

    public function login(): RedirectResponse
    {

        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::guard('admin')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.',
            ]);
        }
        request()->session()->regenerate();
        return redirect()->route('admin.index');
    }

    public function destroy(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
