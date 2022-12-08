<?php

namespace App\Models;

use App\Models\Admission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_admission extends Model
{
    use HasFactory;
    protected $table = "first_admissions";
    protected $fillable = [
        'record_id',
        'sr_no',
        // 'perma_address',
        // 'phone',
        // 'civil_status',
        // 'birthday',
        // 'nationality',
        // 'religion',
        // 'occupation',
    ];

    public function admission_display()
    {
        return $this->belongsTo(Admission::class);
    }

    public function admission_two()
    {
        return $this->hasOne(Second_admission::class, 'record_id');
    }
}