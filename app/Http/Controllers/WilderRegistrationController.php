<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilderRegistrationController extends Controller
{
    public function show()
    {
        return view('wilderRegistration');
    }
    
    public function upload(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|image|max:5000'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}