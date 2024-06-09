<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserInfoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function update() {
        $user = Auth::user();
        return view('auth.user-profile', compact('user'));
    }

    public function store(StoreUserInfoRequest $request, $id) {
        try {
            // Find the user by ID
            $user = User::findOrFail($id);

            // Update the user's attributes with validated data
            $user->update($request->validated());

            // Return a success response
            return redirect('/user-profile');
        } catch (\Exception $e) {
            // Return an error response in case of an exception
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
