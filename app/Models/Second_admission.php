<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second_admission extends Model
{
    use HasFactory;

    protected $table = 'second_admissions';
    protected $fillable = [
        'record_id',
        'employer_name',
    ];

    public function admission_first()
    {
        return $this->belongsTo(First_admission::class);
    }
}