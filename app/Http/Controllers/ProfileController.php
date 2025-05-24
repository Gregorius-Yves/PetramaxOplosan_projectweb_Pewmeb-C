<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfileImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');

            // Save image to storage (e.g., storage/app/public/profile_images)
            $path = $image->store('profile_images', 'public');

            // Update user's profile_image column with path
            $user->profile_image = $path;
            $user->save();

            return back()->with('success', 'Profile image updated successfully!');
        }

        return back()->with('error', 'Please upload a valid image.');
    }
}
