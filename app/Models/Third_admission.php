<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_admission extends Model
{
    use HasFactory;
    protected $table = 'third_admissions';
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

    public function admission_second()
    {
        return $this->belongsTo(Second_admission::class);
    }

    public function admission_fourth()
    {
        return $this->hasOne(Fourth_admission::class, 'record_id');
    }
}