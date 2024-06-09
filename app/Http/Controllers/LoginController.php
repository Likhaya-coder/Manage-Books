<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function auth(AuthLoginRequest $request) {
        $validatedData = $request->validated();

        if(!Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            throw ValidationException::withMessages([
                'email' => ['Sorry, those credentials do not match.'],
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        return view('dashboard', compact('user'));
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
