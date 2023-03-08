<?php

namespace App\Models;

use App\Models\Traits\NurseNotesRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseNotes extends Model
{
    use HasFactory, NurseNotesRelationships;

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
