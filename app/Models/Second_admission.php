<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Second_admission extends Model
{
    use HasFactory;

    protected $table = 'second_admissions';

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'person_of_contact' => 'array',
        'admitting_personel' => 'array',
        'admission_start' => 'array',
        'admission_end' => 'array',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'other_opt' => 'array',
    ];

    public function admission_first()
    {
        return $this->belongsTo(First_admission::class);
    }

    ///test
    public function admission_two()
    {
        return $this->belongsTo(First_admission::class, 'record_id');
    }
}
