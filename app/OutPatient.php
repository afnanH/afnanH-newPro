<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutPatient extends Model
{
    //Model to relate the out patient with it's request record

    protected $table = 'bb_out_patient';

    protected $fillable = ['patient_name', 'age'];

    public function request ()
    {
        return $this->hasMany('App\BB_Request', 'patient_id');
    }
}
