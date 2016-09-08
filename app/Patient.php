<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';

    //protected $fillable = ['patient_name', 'age'];

    public function in_patient ()
    {
        return $this->hasMany('App\InPatient', 'patient_id');
    }
}
