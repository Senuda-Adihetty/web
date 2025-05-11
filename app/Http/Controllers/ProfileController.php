<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin_panel.Profile.profile', [                          // I  edit this line
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information. (This code is from the Breeze Package Code)
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return redirect()->back()->with('success', 'Profile updated successfully.'); // I  write this line

    //     // return Redirect::route('admin_panel.Profile.profile')->with('status', 'profile-updated');
    // }

public function update(ProfileUpdateRequest $request): RedirectResponse               // I  edit this line
{
    $user = $request->user();

    // Validate and update basic profile data
    $user->fill($request->validated());

    // Check and update profile image
    if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp,bmp,svg,tiff,ico|max:92160',   // 90MB limit
                                                //  (Realistic maximum safe limit: 100MB (102400 KB))
        ]);

        // Delete old image if exists (why, I cant waste space)
        if ($user->image) {
            Storage::delete($user->image);
        }

        // Store new image
        $path = $request->file('image')->store('profiles', 'public');
        $user->image = $path;
    }

    // If email changed, reset verification
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}


    /**
     * Delete the user's account. (This code is from the Breeze Package Code)
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
