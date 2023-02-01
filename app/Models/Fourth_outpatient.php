<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourth_outpatient extends Model
{
    use HasFactory;

    protected $table = 'fourth_outpatients';
    protected $fillable = [
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'total_days',
        'admitting_physician',
        'admitting_clerk',
        'admission_type',
        'referred_by',
    ];

    public function outpatient_third()
    {
        return $this->belongsTo(Third_outpatient::class);
    }

    public function outpatient_fifth()
    {
        return $this->hasOne(Fifth_outpatient::class, 'record_id');
    }

    //test
    public function outpatient_four()
    {
        return $this->belongsTo(First_outpatient::class, 'record_id');
    }
}