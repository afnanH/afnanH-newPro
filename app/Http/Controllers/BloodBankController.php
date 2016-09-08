<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BloodBankController extends Controller
{
    //Controller to show the blood bank system main content

    public function index ()
    {
        return view('BloodBank');
    }
}
