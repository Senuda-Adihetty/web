<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class permissionsController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin_panel.User_Manage.permissions',compact('permissions'));
    }

    public function storepermission(Request $request){

        $request->validate([
            'name' => 'required',
        ]);
        Permission::create(['name' => $request->name]);

        return redirect()->back()->with('success','Permission added successfully! ');
    }

     public function updatepermission(Request $request){
        $request->validate([
            'name' => 'required',
            'id' => 'required',
        ]);
        $update = Permission::find($request->id);
        $update->name = $request->name;
        $update->save();
        return redirect()->back()->with('success','Permission updated successfully! ');
    }

    public function deletePermission($id){
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->back()->with('success','Permission deleted successfully! ');
    }
}
