<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function store(StoreRegistrationRequest $request) {
        $user = User::create($request->validated());

        Auth::login($user);

        return view('welcome');
    }


    public function login() {
        return view('auth.login');
    }

    public function session(AuthLoginRequest $request) {
        $validatedData = $request->validated();

        if(!Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            throw ValidationException::withMessages([
                $validatedData['email'] => 'Sorry, those credentials do not match'
            ]);
        }

        $request->session()->regenerate();

        return view('welcome');
    }

}
