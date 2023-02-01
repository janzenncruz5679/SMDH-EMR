<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_outpatient extends Model
{
    use HasFactory;
    protected $table = 'third_outpatients';
    protected $fillable = [
        'record_id',
        'employer_name',
        'employer_address',
        'employer_phone',
        'father_name',
        'father_address',
        'father_phone',
        'mother_maiden_name',
        'mother_address',
        'mother_phone',
        'spouse_name',
        'spouse_address',
        'spouse_phone',
    ];

    public function outpatient_second()
    {
        return $this->belongsTo(Second_outpatient::class);
    }

    public function outpatient_fourth()
    {
        return $this->hasOne(Fourth_outpatient::class, 'record_id');
    }

    //test
    public function outpatient_three()
    {
        return $this->belongsTo(First_outpatient::class, 'record_id');
    }
}