<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second_outpatient extends Model
{
    use HasFactory;

    protected $table = 'second_outpatients';
    protected $fillable = [
        'perma_address',
        'civil_status',
        'birthplace',
        'nationality',
        'religion',
        'occupation',
    ];

    public function outpatient_first()
    {
        return $this->belongsTo(First_outpatient::class);
    }

    public function outpatient_third()
    {
        return $this->hasOne(Third_outpatient::class, 'record_id');
    }


    ///test
    public function outpatient_two()
    {
        return $this->belongsTo(First_outpatient::class, 'record_id');
    }
}