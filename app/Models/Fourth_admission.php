<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourth_admission extends Model
{
    use HasFactory;

    protected $table = 'fourth_admissions';
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

    public function admission_third()
    {
        return $this->belongsTo(Third_admission::class);
    }

    public function admission_fifth()
    {
        return $this->hasOne(Fifth_admission::class, 'record_id');
    }

    //test
    public function admission_four()
    {
        return $this->belongsTo(First_admission::class, 'record_id');
    }
}