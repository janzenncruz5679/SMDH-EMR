<?php

namespace App\Models;

use App\Models\First_admission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admissions';
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'age',
        'gender',
        'address',
    ];

    public function admission_one()
    {
        return $this->hasOne(First_admission::class, 'record_id');
    }
}