<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class WilderRegistrationController extends Controller
{
    //cette fonction permet d'afficher la view seulement si on est logged
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('wilderRegistration');
    }

    public function register(Request $request)
    {
        $wilder = new App\Wilders;
        $wilder -> lastname = request('lastname');
        $wilder -> name = request('name');
        $wilder -> email = request('email');
        $wilder -> school = request('school');
        $wilder -> promo = request('promo');
        $wilder -> language = request('language');
        $wilder -> description = request('description');
        $wilder -> where = request('where');
        $wilder -> why = request('why');
        $wilder -> tomorrow = request('tomorrow');
        $wilder -> photo = request('photo');
        $wilder -> save();

     $this->validate($request, [
      'photo'  => 'required|image|max:5000'
     ]);

     $image = $request->file('photo');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);

     return view ('confirmation', [
        'wilder' => $wilder,
        'photo' => $new_name,
    ]);
    }
}