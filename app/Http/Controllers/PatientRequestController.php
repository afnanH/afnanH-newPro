<?php

namespace App\Http\Controllers;

use App\BB_Request;
use App\InPatient;
use App\OutPatient;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PatientRequestController extends Controller
{
    //Controller to handle the request form "for both in & out patient"

    //Function to save the data from the request form depending on the patient type "in/out"
    //it takes the HTTP request from the form
    //if all the data correct, it will redirect to the main registration panel and display flash message with success
    //otherwise errors will be shown to correct the input

    private function generalRequestRequired (Request $request)
    {
        $this->validate($request, [
            'with_date' => 'required | date | date_format:"Y-m-d"',
            'with_time' => 'required',
            'arr_date' => 'required | date | date_format:"Y-m-d"',
            'arr_time' => 'required',
            'with_by' => 'required',
            'diag' => 'required',
            'fresh_blood_bag' => 'integer | min :0',
            'cryoppt_unit' => 'numeric | min :0',
            'packed_RBCs_unit' => 'numeric | min :0',
            'platelet_conc_unit' => 'numeric | min :0',
            'fresh_plasma_unit' => 'numeric | min :0',
            'plt_rich_plasma_unit' => 'numeric | min :0',
            'old_plasma_unit' => 'numeric | min :0',
            'washed_RBCs_unit' => 'numeric | min :0',
            'physician' => 'required | alpha',
            'sig_date' => 'required',
        ]);
    }

    private function generalRequestInputData (Request $request, BB_Request $bb_req)
    {
        $bb_req->with_date = $request->input('with_date');
        $bb_req->with_time = $request->input('with_time');
        $bb_req->arr_date = $request->input('arr_date');
        $bb_req->arr_time = $request->input('arr_time');
        $bb_req->with_by = $request->input('with_by');

        $bb_req->diag = $request->input('diag');
        $bb_req->fever = $request->input('fever');

        $bb_req->bleeding = $request->input('bleeding');
        $bb_req->hepatomegaly = $request->input('hepatomegaly');
        $bb_req->splenomegaly = $request->input('splenomegaly');
        $bb_req->anemia = $request->input('anemia');
        $bb_req->bleeding_hist = $request->input('bleeding_hist');
        $bb_req->allergy_hist = $request->input('allergy_hist');
        $bb_req->transfusion_hist = $request->input('transfusion_hist');
        $bb_req->drug_hist = $request->input('drug_hist');

        $fresh_blood = $request->input('fresh_blood');
        $fresh_blood_bag = $request->input('bag');

        $result = $this->empty_bag_unit_text($fresh_blood, $fresh_blood_bag);

        $bb_req->fresh_blood = $result[0];
        $bb_req->fresh_blood_bag = $result[1];

        $cryoppt = $request->input('cryoppt');
        $cryoppt_unit = $request->input('cryoppt_unit');

        $result = $this->empty_bag_unit_text($cryoppt, $cryoppt_unit);

        $bb_req->cryoppt = $result[0];
        $bb_req->cryoppt_unit = $result[1];

        $packed_RBCs = $request->input('packed_RBCs');
        $packed_RBCs_unit = $request->input('packed_RBCs_unit');

        $result = $this->empty_bag_unit_text($packed_RBCs, $packed_RBCs_unit);

        $bb_req->packed_RBCs = $result[0];
        $bb_req->packed_RBCs_unit = $result[1];

        $platelet_conc = $request->input('platelet_conc');
        $platelet_conc_unit = $request->input('platelet_conc_unit');

        $result = $this->empty_bag_unit_text($platelet_conc, $platelet_conc_unit);

        $bb_req->platelet_conc = $result[0];
        $bb_req->platelet_conc_unit = $result[1];

        $fresh_plasma = $request->input('fresh_plasma');
        $fresh_plasma_unit = $request->input('fresh_plasma_unit');

        $result = $this->empty_bag_unit_text($fresh_plasma, $fresh_plasma_unit);

        $bb_req->fresh_plasma = $result[0];
        $bb_req->fresh_plasma_unit = $result[1];

        $plt_rich_plasma = $request->input('plt_rich_plasma');
        $plt_rich_plasma_unit = $request->input('plt_rich_plasma_unit');

        $result = $this->empty_bag_unit_text($plt_rich_plasma, $plt_rich_plasma_unit);

        $bb_req->plt_rich_plasma = $result[0];
        $bb_req->plt_rich_plasma_unit = $result[1];

        $old_plasma = $request->input('old_plasma');
        $old_plasma_unit = $request->input('old_plasma_unit');

        $result = $this->empty_bag_unit_text($old_plasma, $old_plasma_unit);

        $bb_req->old_plasma = $result[0];
        $bb_req->old_plasma_unit = $result[1];

        $washed_RBCs = $request->input('washed_RBCs');
        $washed_RBCs_unit = $request->input('washed_RBCs_unit');

        $result = $this->empty_bag_unit_text($washed_RBCs, $washed_RBCs_unit);

        $bb_req->washed_RBCs = $result[0];
        $bb_req->washed_RBCs_unit = $result[1];

        $bb_req->coombs = $request->input('coombs');
        $bb_req->grouping = $request->input('grouping');
        $bb_req->serology = $request->input('serology');
        $bb_req->ab_screening = $request->input('ab_screening');
        $bb_req->EDTA_sample = $request->input('EDTA_sample');
        $bb_req->serum_sample = $request->input('serum_sample');
        $bb_req->physician = $request->input('physician');
        $bb_req->sig_date = $request->input('sig_date');

    }

    public function store (Request $request)
    {
        $patient_type = $request->input('patient_type');
        $bb_req = new BB_Request();
        $this->generalRequestRequired($request, $bb_req);

        if ($patient_type == 'out')
        {
            $this->validate($request, [
                'patient_name' => 'required | alpha',
                'age' => 'required | min:1 | integer',
            ]);

            $this->validate($request, ['dept' => 'required']);

            $patient = new OutPatient();

            $patient->patient_name = $request->input('patient_name');
            $patient->gender = $request->input('gender');
            $patient->age = $request->input('age');
            $patient->save();

            $bb_req->out_patient()->associate($patient);
            $bb_req->patient_type = 0;

            $bb_req->dept = $request->input('dept');
        }
        else
        {
            //institute patient
            $patient = new InPatient();
            $patient->patient_id = $request->input('patient_id');
            $patient->save();

            $bb_req->in_patient()->associate($patient);
            $bb_req->patient_type = 1;

            $bb_req->dept = 'men';
        }

        $this->generalRequestInputData($request, $bb_req);
        $bb_req->save();

        Session::flash('flash_message', 'Request successfully added!');
        return redirect('blood_bank/Registration');

    }


    //Private function to make the default bag and unit if the related checkbox is checked
    private function empty_bag_unit_text ($checkbox, $unit)
    {

        if (($checkbox == 1) && ($unit == 0))
        {
            $unit = 1;

        }

        if ($checkbox == 0)
        {
            $checkbox = 0;
            $unit = 0;
        }

        return array($checkbox, $unit);
    }

}
