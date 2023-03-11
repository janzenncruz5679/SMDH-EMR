<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billings extends Model
{
    use HasFactory;
    public function admission()
    {
        return $this->belongsTo(Admissions::class);
    }
    public function emergency()
    {
        return $this->belongsTo(Emergency::class);
    }
    public function outPatient()
    {
        return $this->belongsTo(OutPatients::class);
    }

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [];
}
