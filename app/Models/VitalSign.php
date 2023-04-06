<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    use HasFactory;

    protected $table = 'vital_signs';

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'date' => 'array',
        'weight' => 'array',
        'temp' => 'array',
        'bp' => 'array',
        'pulse' => 'array',
        'respiration' => 'array',
        'pains' => 'array',
        'initials' => 'array',
    ];

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'vitals_id');
    }
}