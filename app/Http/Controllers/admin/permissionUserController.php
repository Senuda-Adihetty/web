<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class permissionUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin_panel.User_Manage.userPermission', compact('users'));
    }

    public function storeuser(Request $request)
    {

        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required',
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,webp,bmp,svg,tiff,ico', 'max:92160'],
        ]);

        $imagepath = 'profiles/default.png';
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('profiles', 'public');
        }

        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->password),
            'image' => $imagepath,
        ]);

        $user->syncRoles($request->roles);


        return redirect()->back()->with('success', 'User added successfully! ');
    }

}
