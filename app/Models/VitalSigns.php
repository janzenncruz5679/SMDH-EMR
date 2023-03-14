<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSigns extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->belongsTo(Patients::class, 'patient_id');
    }

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'date' => 'array',
        'weight' => 'array',
        'temperature' => 'array',
        'blood_pressure' => 'array',
        'pulse' => 'array',
        'respiration' => 'array',
        'pain' => 'array',
        'initials' => 'array',
    ];
}
