<?php

namespace App\Models;

use App\Models\Admission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class First_admission extends Model
{
    use HasFactory;
    protected $table = "first_admissions";
    protected $fillable = [
        'address',
        'sr_no',
        'last_name',
        'first_name',
        'middle_name',
        'ward_room_bed_service',
        'age',
        'gender',
        'phone',
    ];

    // public function admission_display()
    // {
    //     return $this->belongsTo(Admission::class);
    // }

    public function admission_two()
    {
        return $this->hasOne(Second_admission::class, 'record_id');
    }
}