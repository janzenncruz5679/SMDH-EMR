<?php

namespace App\Models;

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
}