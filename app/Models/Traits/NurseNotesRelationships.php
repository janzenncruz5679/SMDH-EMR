<?php

namespace App\Models\Traits;

use App\Models\Admissions;
use App\Models\Patients;

trait NurseNotesRelationships
{
    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }
    public function admission()
    {
        return $this->belongsTo(Admissions::class);
    }
}
