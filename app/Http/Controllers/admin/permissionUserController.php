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
        // $users = User::all();
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

    // public function updateuser(Request $request, $id)
    // {
    //     $request->validate([
    //          'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',

    //         'role' => 'required|string|exists:roles,name',
    //     ]);

    //      if ($request->hasFile('image')) {
    //         $imagepath = $request->file('image')->store('profiles', 'public');
    //     }

    //     $update = User::find($request->id);

    //     $update->name = $request->name;
    //     $update->email = $request->email;
    //     $update->password = Hash::make($request->password);

    //      if ($request->hasFile('image')) {
    //         $update->image_link = $imagepath;
    //     }

    //     $user = User::findOrFail($id);
    //     $user->syncRoles($request->role); // existing roles remove wela new one assign wenawa

    //     return redirect()->back()->with('success', 'User role updated successfully!');
    // }

    public function updateuser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|string|exists:roles,name',
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:92160'],
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('profiles', 'public');
            $user->image = $imagepath; // adjust key if not `image`
        }

        $user->save();

        // Update role
        $user->syncRoles($request->role);

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function deleteuser($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'User deleted successfully! ');
    }
}
