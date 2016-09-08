<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    //Controller to show the main registration panel

    public function index ()
    {
        return view('blood_bank.Registration');
    }
}
