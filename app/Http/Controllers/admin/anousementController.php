<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\anousementModel;
use Illuminate\Http\Request;

class anousementController extends Controller
{
    public function index()
    {
        $anousements = anousementModel::all();
        return view('admin_panel.Home.anousementEditor', compact('anousements'));

    }

    public function anousementStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'max:255',
            'description' => 'max:255',
            'more_infoLink' => 'max:255',
        ]);

        AnousementModel::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'more_infoLink' => $validatedData['more_infoLink'],
        ]);

        return redirect()->back()->with('success', 'Announcement added successfully.');
    }

    public function anousementUpdater(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'max:255',
            'description' => 'max:255',
            'more_infoLink' => 'max:255',
        ]);

        $update = AnousementModel::find($request->id);

        $update->title = $validatedData['title'];
        $update->description = $validatedData['description'];
        $update->more_infoLink = $validatedData['more_infoLink'];

        $update->save();

        return redirect()->back()->with('success', 'Announcement updated successfully.');
    }
    public function anousementDelete($id)
    {
        $anousement = AnousementModel::find($id);
        $anousement->delete();

        return redirect()->back()->with('success', 'Announcement deleted successfully.');
    }
}

