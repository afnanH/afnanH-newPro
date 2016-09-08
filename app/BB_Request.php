<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BB_Request extends Model
{
    //Model to relate the "in/out" patient to it's request record

    protected $table = 'bb_request';

    public function in_patient ()
    {
        return $this->belongsTo('App\InPatient', 'patient_id');
    }

    public function out_patient ()
    {
        return $this->belongsTo('App\OutPatient' , 'patient_id');
    }
}
