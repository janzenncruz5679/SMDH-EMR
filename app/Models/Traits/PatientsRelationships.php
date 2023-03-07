<?php

namespace App\Models\Traits;

trait PatientsRelationships
{
    public function admission()
    {
        return $this->hasOne(Admissions::class)->latestOfMany();
    }
    public function admissions()
    {
        return $this->hasMany(Admissions::class);
    }
}
