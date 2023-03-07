<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'admission_start' => 'datetime',
        'admission_end' => 'datetime',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'data_origin' => 'array',
        'additional_diagnosis' => 'array',
        'additional_operation_procedure' => 'array',
    ];
}
