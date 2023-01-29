<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixth_admission extends Model
{
    use HasFactory;
    protected $table = 'sixth_admissions';
    protected $fillable = [
        'admission_diagnosis',
        'principal_diagnosis',
        'other_diagnosis',
        'idc_code',
        'principal_operation',
        'other_operation',
        'icpm_code',
    ];

    public function admission_fifth()
    {
        return $this->belongsTo(Fifth_admission::class);
    }

    //test
    public function admission_six()
    {
        return $this->belongsTo(First_admission::class, 'record_id');
    }
}