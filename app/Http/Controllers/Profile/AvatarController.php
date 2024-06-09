<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AvatarController extends Controller
{
    public function store(Request $request) {
        // Validate the request
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,jpg,png,bnp|max:2048',
        ]);
    
        // Get the file extension
        $ext = $request->file('avatar')->getClientOriginalExtension();
    
        // Generate a random file name
        $fileName = Str::random(25);
    
        // Create the full path name
        $fullPathName = "avatar/$fileName.$ext";

        if ($oldImage = auth()->user()->avatar) {
            Storage::disk('public')->delete($oldImage);
        }
    
        // Store the file
        Storage::disk('public')->put($fullPathName, file_get_contents($request->file('avatar')->getRealPath()));

        $user = Auth::user();

        // Update the user's avatar path
        $user->update(['avatar' => $fullPathName]);

        // Redirect to the user profile with a success message
        return redirect()->back();
    }
}
