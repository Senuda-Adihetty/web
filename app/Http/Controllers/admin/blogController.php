<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;

class blogController extends Controller
{
     public function index(){
        $blogs = blogs::all();
        return view('admin_panel.Home.blogs',compact('blogs'));
    }

    public function storeBlog(Request $request){

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('blogs','public');
        }

        blogs::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success','Blog added successfully! ');
    }


    public function updateBlog(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

         if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('blogs','public');
        }


        $update = blogs::find($request->id);

        $update->title = $validatedData['title'];
        $update->slug = $validatedData['slug'];
        $update->body = $validatedData['body'];

         if ($request->hasFile('image')) {
            $update->image = $imagePath;
        }

        $update->save();

        return redirect()->back()->with('success', 'Blog updated successfully.');
    }

    public function deleteBlog($id)
    {
        $delete = blogs::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }
}
