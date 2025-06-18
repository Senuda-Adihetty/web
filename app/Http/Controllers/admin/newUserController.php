<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class newUserController extends Controller
{
    public function index()
    {
        $users = User::whereDoesntHave('roles')->get();
  $roles = Role::pluck('name', 'name')->all();
        return view('admin_panel.User_Manage.userPermission', compact('users', 'roles'));
    }

    public function unlockUser(Request $request)
    {
        $user = User::find($request->id);
        $user->roles()->sync($request->role);

        return redirect()->back()->with('success', 'New Member Unlock successfully! ');
    }

    public function deleteuser($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'User deleted successfully! ');
    }
}
