<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DischargeSummaryHistory extends Model
{
    use HasFactory;

    protected $table = 'discharge_summary_histories';

    protected $guarded = [];

    protected $hidden = [];

    public function dischargeSummary()
    {
        return $this->belongsTo(DischargeSummary::class, 'history_id');
    }
}
