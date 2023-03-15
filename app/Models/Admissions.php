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
        'is_billed' => 'boolean',
        'admission_start' => 'datetime',
        'admission_end' => 'datetime',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'additional_diagnosis' => 'array',
        'additional_operation_procedure' => 'array',
    ];
}
