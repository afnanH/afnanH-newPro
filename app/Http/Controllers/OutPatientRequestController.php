<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OutPatientRequestController extends Controller
{
    //Controller to show the blood transfusion out patient request form

    public function out_request ()
    {
        return view('blood_bank.out_patient.OutRequest');
    }

}
