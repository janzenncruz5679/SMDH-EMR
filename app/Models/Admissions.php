<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{

    public const TYPE = [
        'new' => 1,
        'old' => 2,
        'former_opd' => 3,
    ];

    protected $table = 'new_admissions';

    public function patient()
    {
        return $this->hasOne(Patients::class, 'id', 'patient_id');
    }

    protected $guarded = [];

    protected $hidden = [];

    protected $dates = [
        'admission_start',
        'admission_end',
    ];

    protected $casts = [
        'insurance' => 'array',
        'data_origin' => 'array',
        'additional_diagnosis' => 'array',
        'additional_operation_procedure' => 'array',
    ];
}
