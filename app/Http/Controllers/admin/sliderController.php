<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class sliderController extends Controller
{
    public function SlideEditor()
    {
        $sliders = slider::all();
        return view('admin_panel.home.slideEditor', compact('sliders'));
    }

    public function SlideStore(Request $request)
    {
        $validatedData = $request->validate([
            'first_headingBlack'   => 'required|string|max:255',
            'first_headingBlue'    => 'required|string|max:255',
            'second_headingBlack'  => 'required|string|max:255',
            'second_headingBlue'   => 'required|string|max:255',
            'mini_para'            => 'required|string|max:1000',
            'image_link'           => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'more_infoLink'        => 'required|string',
            'more_infoLink2'       => 'required|string',
        ]); 

        if ($request->hasFile('image_link')) {
            $imagepath = $request->file('image_link')->store('slides', 'public');
        }

        slider::create([
            'first_headingBlack'   => $validatedData['first_headingBlack'],
            'first_headingBlue'    => $validatedData['first_headingBlue'],
            'second_headingBlack'  => $validatedData['second_headingBlack'],
            'second_headingBlue'   => $validatedData['second_headingBlue'],
            'mini_para'            => $validatedData['mini_para'],
            'image_link'           => $imagepath,
            'more_infoLink'        => $validatedData['more_infoLink'],
            'more_infoLink2'       => $validatedData['more_infoLink2'],
        ]);

        return redirect()->back()->with('success', 'Slide added successfully.');
    }

    public function SlideUpdater(Request $request)
    {

        $validatedData = $request->validate([
            'first_headingBlack'   => 'required|string|max:255',
            'first_headingBlue'    => 'required|string|max:255',
            'second_headingBlack'  => 'required|string|max:255',
            'second_headingBlue'   => 'required|string|max:255',
            'mini_para'            => 'required|string|max:1000',
            'more_infoLink'        => 'required|string',
            'more_infoLink2'       => 'required|string',
        ]);


        if ($request->hasFile('image_link')) {
            $imagepath = $request->file('image_link')->store('slides', 'public');
        }

        $update = slider::find($request->id);

        $update->first_headingBlack   = $validatedData['first_headingBlack'];
        $update->first_headingBlue    = $validatedData['first_headingBlue'];
        $update->second_headingBlack  = $validatedData['second_headingBlack'];
        $update->second_headingBlue   = $validatedData['second_headingBlue'];
        $update->mini_para            = $validatedData['mini_para'];

        if ($request->hasFile('image_link')) {
            $update->image_link = $imagepath;
        }


        $update->more_infoLink        =   $validatedData['more_infoLink'];
        $update->more_infoLink2       =   $validatedData['more_infoLink2'];

        $update->save();


        return redirect()->back()->with('success', 'Slide updated successfully.');

    }











    public function SlideDelete($id)
    {
        $delete = slider::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Slide deleted successfully.');
    }

}
