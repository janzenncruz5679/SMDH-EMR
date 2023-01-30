<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixth_outpatient extends Model
{
    use HasFactory;
    protected $table = 'sixth_outpatients';
    protected $fillable = [
        'admission_diagnosis',
        'principal_diagnosis',
        'other_diagnosis',
        'idc_code',
        'principal_operation',
        'other_operation',
        'icpm_code',
    ];

    public function outpatient_fifth()
    {
        return $this->belongsTo(Fifth_outpatient::class);
    }

    //test
    public function outpatient_six()
    {
        return $this->belongsTo(First_outpatient::class, 'record_id');
    }
}