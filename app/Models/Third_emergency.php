<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_emergency extends Model
{
    use HasFactory;
    protected $table = 'third_emergencies';
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

    public function emergency_second()
    {
        return $this->belongsTo(Second_emergency::class);
    }

    public function emergency_fourth()
    {
        return $this->hasOne(Fourth_emergency::class, 'record_id');
    }

    //test
    // public function admission_three()
    // {
    //     return $this->belongsTo(First_admission::class, 'record_id');
    // }
}