<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserPasswordController extends Controller
{
    public function update() {
        return view('auth.user-profile');
    }

    public function store(StoreUserPasswordRequest $request, $id) {
        try {
            // Find the user by ID
            $user = User::findOrFail($id);

            // Check if current password is correct
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                return back()->with(['error' => 'Current password is incorrect']);
            } else {
                // Update the user's attributes with validated data
                $user->update($request->validated());

                // Return a success response
                return redirect('/user-profile')->with('success', 'Password has been changed');
            }
        } catch (\Exception $e) {
            // Return an error response in case of an exception
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
