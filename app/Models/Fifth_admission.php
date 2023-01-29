<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fifth_admission extends Model
{
    use HasFactory;

    protected $table = "fifth_admissions";
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

    public function admission_fourth()
    {
        return $this->belongsTo(Fourth_admission::class);
    }

    public function admission_sixth()
    {
        return $this->hasOne(Sixth_admission::class, 'record_id');
    }

    //test
    public function admission_five()
    {
        return $this->hasOne(Fifth_admission::class, 'record_id');
    }
}