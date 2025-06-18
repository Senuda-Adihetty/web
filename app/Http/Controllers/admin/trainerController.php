<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class trainerController extends Controller
{
    public function index()
    {
        $trainers = trainer::all();

        // Max trainer ID eka gannawa
        $maxId = Trainer::max('Trainer_ID');
        $nextId = $maxId ? $maxId + 1 : 1; // Trainer table ek empty nam 1 walin patan ganna

        return view('admin_panel.GMS.trainers', compact('trainers', 'nextId'));
    }

    public function storeTrainer(Request $request)
    {

        $request->validate([
            'Trainer_ID' => 'required',
            'fName' => 'required',
            'lName' => 'nullable',
            'phone_No' => 'nullable',
            'gender' => 'required',
            'birthday' => 'nullable|date',
            'address' => 'nullable',
            'basic_Sal' => 'nullable|numeric',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048', // file validation
            'qulification' => 'nullable',
            'email' => 'required|email',
            'fb' => 'nullable|url',
            'insta' => 'nullable|url',

        ]);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('trainers', 'public');
        }

        trainer::create([
            'Trainer_ID' => $request->Trainer_ID,
            'fName' => $request->fName,
            'lName' => $request->lName,
            'phone_No' => $request->phone_No,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'basic_Sal' => $request->basic_Sal,
            'photo' => $imagePath,
            'qulification' => $request->qulification,
            'email' => $request->email,
            'fb' => $request->fb,
            'insta' => $request->insta,
        ]);

        return redirect()->back()->with('success', 'Trainer added successfully! ');
    }


    public function updateTrainer(Request $request)
    {
        $validatedData = $request->validate([
            'Trainer_ID' => 'required',
            'fName' => 'required',
            'lName' => 'nullable',
            'phone_No' => 'nullable',
            'gender' => 'required',
            'birthday' => 'nullable|date',
            'address' => 'nullable',
            'basic_Sal' => 'nullable|numeric',
            'qulification' => 'nullable',
            'email' => 'required|email',
            'fb' => 'nullable|url',
            'insta' => 'nullable|url',
        ]);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('trainers', 'public');
        }


        $update = trainer::find($request->id);

        $update->Trainer_ID = $validatedData['Trainer_ID'];
        $update->fName = $validatedData['fName'];
        $update->lName = $validatedData['lName'];
        $update->phone_No = $validatedData['phone_No'];
        $update->gender = $validatedData['gender'];
        $update->birthday = $validatedData['birthday'];
        $update->address = $validatedData['address'];
        $update->basic_Sal = $validatedData['basic_Sal'];
        $update->qulification = $validatedData['qulification'];
        $update->email = $validatedData['email'];
        $update->fb = $validatedData['fb'];
        $update->insta = $validatedData['insta'];

        if ($request->hasFile('photo')) {
            // If a new image is uploaded, update the image path
            $update->photo = $imagePath;
        }

        $update->save();

        return redirect()->back()->with('success', 'Trainer updated successfully.');
    }

    public function deleteTrainer($id)
    {
        $delete = trainer::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }

    public function dashboard()
    {
        $user = Auth::user();

        // Trainer table eke email field eka user email ekata match karana ekai ganna
        $trainer = Trainer::where('email', $user->email)->first();

        return view('admin_panel.dash2', compact('trainer'));
    }
}
