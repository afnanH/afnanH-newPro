<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InPatient extends Model
{
    //Model to relate the in patient with it's request record

    protected $table = 'bb_in_patient';

    public function request ()
    {
        return $this->hasMany('App\BB_Request', 'patient_id');
    }

    public function patient ()
    {
        return $this->belongsTo('App\Patient' , 'patient_id');
    }
}
