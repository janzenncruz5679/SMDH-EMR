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
        'perma_address',
        'civil_status',
        'birthday',
        'birthplace',
        'nationality',
        'religion',
        'occupation',
    ];

    public function admission_first()
    {
        return $this->belongsTo(First_admission::class);
    }

    public function admission_third()
    {
        return $this->hasOne(Third_admission::class, 'record_id');
    }
}
