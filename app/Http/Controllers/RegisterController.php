<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function showDashboard() {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function store(StoreRegistrationRequest $request) {
        $user = User::create($request->validated());

        Auth::login($user);

        $user = Auth::user();

        return view('dashboard', compact('user'));
    }
}
