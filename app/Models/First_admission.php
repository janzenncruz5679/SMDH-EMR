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
        'birthday',
        'ward_room_bed_service',
        'age',
        'gender',
        'phone',
    ];


    //for real
    // public function admission_two()
    // {
    //     return $this->hasOne(Second_admission::class, 'record_id');
    // }


    //for testing
    public function admission_two()
    {
        return $this->hasOne(Second_admission::class, 'record_id');
    }

    public function admission_three()
    {
        return $this->hasOne(Third_admission::class, 'record_id');
    }

    public function admission_four()
    {
        return $this->hasOne(Fourth_admission::class, 'record_id');
    }

    public function admission_five()
    {
        return $this->hasOne(Fifth_admission::class, 'record_id');
    }

    public function admission_six()
    {
        return $this->hasOne(Sixth_admission::class, 'record_id');
    }
}