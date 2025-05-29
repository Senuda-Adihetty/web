<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class roleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin_panel.User_Manage.role', compact('roles'));
    }

    public function storerole(Request $request)
    {

        $request->validate([
            'role_name' => 'required',
        ]);
        Role::create(['name' => $request->role_name]);
        return redirect()->back()->with('success', 'Role added successfully! ');
    }

    public function updaterole(Request $request)
    {

        $request->validate([
            'role_name' => 'required',
            'role_id' => 'required',
        ]);
        $update = Role::find($request->role_id);
        $update->name = $request->role_name;
        $update->save();
        return redirect()->back()->with('success', 'Role updated successfully! ');
    }

    public function deleteRole($id)
    {
        $rolecc = Role::find($id);
        $rolecc ->delete();
        return redirect()->back()->with('success', 'Role deleted successfully! ');
    }
}
