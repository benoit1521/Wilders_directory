<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wilders;

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

    public function index()
    {
        $wilders = Wilders::all();   
        foreach($wilders as $wilder) {
            echo $wilder->lastname . '<br>';
        }
    }
}