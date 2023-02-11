<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'new_patients';

    public function admission()
    {
        return $this->belongsTo(Admissions::class);
    }
    protected $guarded = [];

    protected $hidden = [];

    protected $dates = [
        'bdate'
    ];

    protected $casts = [
        'relatives' => 'array'
    ];
}
