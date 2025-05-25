<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Settings::all()->pluck('value', 'key')->toArray();

        return view('admin_panel.Home.settings', compact('setting'));
    }

    // public function update(Request $request)
    // {
    //     $validation = $request->validate([
    //         'site_name' => 'required|string|max:255',
    //         'site_description' => 'nullable|string|max:500',
    //         'site_keywords' => 'nullable|string|max:255',
    //         'site_author' => 'nullable|string|max:255',
    //         'site_email' => 'required|email|max:255',
    //         'site_phone' => 'nullable|string|max:20',
    //         'facebook_link' => 'nullable|url|max:255',
    //         'twitter_link' => 'nullable|url|max:255',
    //         'linkedin_link' => 'nullable|url|max:255',
    //         'instagram_link' => 'nullable|url|max:255',
    //         'maintenance_mode' => 'required|boolean',
    //         'maintenance_mode_text' => 'nullable|string|max:500',
    //     ]);

    //     foreach ($request->all() as $key => $value) {
    //         Settings::updateOrCreate(['key' => $key], ['value' => $value]);
    //     }
    //     return redirect()->back()->with('success', 'Settings updated successfully! ');
    // }

public function update(Request $request)
{
    $validation = $request->validate([
        'site_name' => 'required|string|max:255',
        'site_description' => 'nullable|string|max:500',
        'site_keywords' => 'nullable|string|max:255',
        'site_author' => 'nullable|string|max:255',
        'site_email' => 'required|email|max:255',
        'site_phone' => 'nullable|string|max:20',
        'facebook_link' => 'nullable|url|max:255',
        'x_link' => 'nullable|url|max:255',
        'linkedin_link' => 'nullable|url|max:255',
        'instagram_link' => 'nullable|url|max:255',
        'maintenance_mode' => 'required|boolean',
        'maintenance_mode_text' => 'nullable|string|max:500',
        'site_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048', // file validation
    ]);

    // File upload check
    if ($request->hasFile('site_logo')) {
        $file = $request->file('site_logo');
        $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('uploads', $filename, 'public');
        Settings::updateOrCreate(['key' => 'site_logo'], ['value' => 'storage/' . $path]);
    }

    // All other settings update
    foreach ($request->except(['_token', 'site_logo']) as $key => $value) {
        Settings::updateOrCreate(['key' => $key], ['value' => $value]);
    }

    return redirect()->back()->with('success', 'Settings updated successfully!');
}


}
