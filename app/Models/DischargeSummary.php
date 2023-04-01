<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DischargeSummary extends Model
{
    use HasFactory;

    protected $table = 'discharge_summaries';

    protected $guarded = [];

    protected $hidden = [];
}
