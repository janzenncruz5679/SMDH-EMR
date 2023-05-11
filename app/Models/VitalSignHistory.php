<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSignHistory extends Model
{
    use HasFactory;

    protected $table = 'vital_sign_histories';

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'date' => 'array',
        'weight' => 'array',
        'temp' => 'array',
        'bp' => 'array',
        'pulse' => 'array',
        'respiration' => 'array',
        'pains' => 'array',
        'initials' => 'array',
    ];

    public function vitalSign()
    {
        return $this->belongsTo(VitalSign::class, 'history_id');
    }
}
