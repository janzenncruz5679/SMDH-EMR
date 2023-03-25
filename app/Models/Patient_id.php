<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_id extends Model
{
    use HasFactory;

    protected $table = 'patient_ids';


    public function admission_table()
    {
        return $this->hasOne(First_admission::class, 'patient_id');
    }

    public function emergency_table()
    {
        return $this->hasOne(Emergency::class, 'patient_id');
    }

    public function outpatient_table()
    {
        return $this->hasOne(Outpatient::class, 'patient_id');
    }
}
