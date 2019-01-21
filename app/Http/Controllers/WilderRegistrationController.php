<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilderRegistrationController extends Controller
{
    public function show()
    {
        return view('wilderRegistration');
    }
}