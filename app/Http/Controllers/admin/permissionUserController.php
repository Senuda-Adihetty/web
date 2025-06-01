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
        $users = User::whereHas('roles')->with('roles')->get();
        $roles = Role::pluck('name', 'name')->all();

        return view('admin_panel.User_Manage.userPermission', compact('users', 'roles'));
    }

    public function storeuser(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,webp,bmp,svg,tiff,ico', 'max:92160'],
        ]);

        $imagepath = 'profiles/default.png';
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('profiles', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imagepath,
        ]);

        $user->syncRoles($request->roles);


        return redirect()->back()->with('success', 'User added successfully! ');
    }



    public function deleteuser($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'User deleted successfully! ');
    }
}
