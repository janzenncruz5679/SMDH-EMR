<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Second_admission extends Model
{
    use HasFactory;

    protected $table = 'second_admissions';
    protected $fillable = [
        'person_of_contact',
        'admitting_personel',
        'admission_start',
        'admission_end',
        'admission_diff',
        'type_of_admission',
        'allergic',
        'ssc',
        'insurance',
        'diagnosis',
        'idc_code',
        'other_opt',
        'icpm_code',
    ];

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'person_of_contact' => 'array',
        'admitting_personel' => 'array',
        'admission_start' => 'array',
        'admission_end' => 'array',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'other_opt' => 'array',
    ];

    public function admission_first()
    {
        return $this->belongsTo(First_admission::class);
    }

    public function admission_third()
    {
        return $this->hasOne(Third_admission::class, 'record_id');
    }


    ///test
    public function admission_two()
    {
        return $this->belongsTo(First_admission::class, 'record_id');
    }
}
