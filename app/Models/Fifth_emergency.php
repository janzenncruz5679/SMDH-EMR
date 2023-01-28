<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fifth_emergency extends Model
{
    use HasFactory;

    protected $table = "fifth_emergencies";
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

    public function emergency_fourth()
    {
        return $this->belongsTo(Fourth_emergency::class);
    }

    public function emergency_sixth()
    {
        return $this->hasOne(Sixth_emergency::class, 'record_id');
    }
}