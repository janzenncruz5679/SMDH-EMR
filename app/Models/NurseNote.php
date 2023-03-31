<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseNote extends Model
{
    use HasFactory;

    protected $table = "nurse_notes";

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'record_date' => 'array',
        'record_time' => 'array',
        'focus' => 'array',
        'data_action_response' => 'array',
    ];
}
