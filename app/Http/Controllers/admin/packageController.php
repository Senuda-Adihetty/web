<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;


class packageController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('admin_panel.GMS.package', compact('packages'));
    }

    public function storepackage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'valid' => 'nullable',
            'details' => 'nullable|array',
            'details.*' => 'string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

          // Not uploaded image will be default image
        $imagepath = 'profiles/default.png';

        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('packages', 'public');
        }

        Package::create([
            'name' => $request->name,
            'price' => $request->price,
            'valid' => $request->valid,
            'details' => $request->details,
            'image' => $imagepath,
        ]);

        return redirect()->back()->with('success', 'Package created successfully.');
    }

    public function updatepackage(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'valid' => 'nullable',
            'details' => 'nullable|array',
            'details.*' => 'string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $package = Package::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('packages', 'public');
            $package->image = $imagepath;
        }

        $package->name = $request->name;
        $package->price = $request->price;
        $package->valid = $request->valid;
        $package->details = $request->details;

        $package->save();

        return redirect()->back()->with('success', 'Package updated successfully.');
    }

      public function deletepackage($id){
        $package = Package::find($id);
        $package->delete();
        return redirect()->back()->with('success','Permission deleted successfully! ');
    }
}
