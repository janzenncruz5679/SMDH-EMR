<?php

namespace App\Models\Traits;

use App\Models\{Admissions, NurseNotes, VitalSigns};

trait PatientsRelationships
{
    public function admission()
    {
        return $this->hasOne(Admissions::class, 'patient_id')->latestOfMany();
    }
    public function admissions()
    {
        return $this->hasMany(Admissions::class, 'patient_id');
    }
    public function nurseNotes()
    {
        return $this->hasMany(NurseNotes::class, 'patient_id');
    }
    public function vitalSigns()
    {
        return $this->hasMany(VitalSigns::class, 'patient_id');
    }
}
