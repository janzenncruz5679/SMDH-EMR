<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second_emergency extends Model
{
    use HasFactory;

    protected $table = 'second_emergencies';
    protected $fillable = [
        'perma_address',
        'civil_status',
        'birthplace',
        'nationality',
        'religion',
        'occupation',
    ];

    public function emergency_first()
    {
        return $this->belongsTo(First_emergency::class);
    }

    public function emergency_third()
    {
        return $this->hasOne(Third_emergency::class, 'record_id');
    }



    // public function emergency_third()
    // {
    //     return $this->hasOne(Third_admission::class, 'record_id');
    // }


    ///test
    // public function admission_two()
    // {
    //     return $this->belongsTo(First_admission::class, 'record_id');
    // }
}