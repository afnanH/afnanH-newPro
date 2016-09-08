<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InPatientRequestController extends Controller
{
    //Controller to show the blood transfusion institute patient request form

    public function in_request ()
    {
        return view('blood_bank.in_patient.InRequest');
    }
}
