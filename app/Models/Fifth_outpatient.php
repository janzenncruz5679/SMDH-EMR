<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fifth_outpatient extends Model
{
    use HasFactory;

    protected $table = "fifth_outpatients";
    protected $fillable = [
        'ssc',
        'alert_allergic',
        'hospitalization_plan',
        'health_insurance',
        'coverage_insurance',
        'furnished_by',
        'informant_address',
        'relation_to_patient',
    ];

    public function outpatient_fourth()
    {
        return $this->belongsTo(Fourth_outpatient::class);
    }

    public function outpatient_sixth()
    {
        return $this->hasOne(Sixth_outpatient::class, 'record_id');
    }

    //test
    public function outpatient_five()
    {
        return $this->hasOne(Fifth_outpatient::class, 'record_id');
    }
}