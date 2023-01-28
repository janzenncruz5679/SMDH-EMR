<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixth_emergency extends Model
{
    use HasFactory;
    protected $table = 'sixth_emergencies';
    protected $fillable = [
        'admission_diagnosis',
        'principal_diagnosis',
        'other_diagnosis',
        'idc_code',
        'principal_operation',
        'other_operation',
        'icpm_code',
    ];

    public function emergency_fifth()
    {
        return $this->belongsTo(Fifth_emergency::class);
    }
}