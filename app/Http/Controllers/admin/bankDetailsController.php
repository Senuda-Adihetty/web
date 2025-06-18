<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\bankDetails;
use Illuminate\Http\Request;

class bankDetailsController extends Controller
{
       public function index()
    {
        $banks = bankDetails::all();
        return view('admin_panel.Home.bankDetails', compact('banks'));

    }

  public function storebankDetails(Request $request)
    {
        $validatedData = $request->validate([
            'bank_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',

            'notes' => 'nullable|string|max:255',

        ]);

        bankDetails::create([
            'bank_name' => $validatedData['bank_name'],
            'branch_name' => $validatedData['branch_name'],
            'account_name' => $validatedData['account_name'],
            'account_number' => $validatedData['account_number'],

            'notes' => $validatedData['notes'],

        ]);

        return redirect()->back()->with('success', 'Bank Details added successfully.');
    }


     public function updatebankDetails(Request $request)
    {
        $validatedData = $request->validate([
            'bank_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',

            'notes' => 'nullable|string|max:255',

        ]);

        $update = bankDetails::find($request->id);

        $update->bank_name = $validatedData['bank_name'];
        $update->branch_name = $validatedData['branch_name'];
        $update->account_name = $validatedData['account_name'];
        $update->account_number = $validatedData['account_number'];

        $update->notes = $validatedData['notes'];

        $update->save();

        return redirect()->back()->with('success', 'Bank Details updated successfully.');
    }



}
