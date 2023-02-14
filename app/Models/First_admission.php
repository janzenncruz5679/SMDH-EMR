<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_admission extends Model
{
    use HasFactory;
    protected $table = "first_admissions";
    protected $fillable = [
        'full_name',
        'last_name',
        'middle_name',
        'first_name',
        'address',
        'ward_room_bed_service',
        'perma_address',
        'sr_no',
        'gender',
        'phone',
        'civil_status',
        'birthday',
        'age',
        'birthplace',
        'nationality',
        'religion',
        'occupation',
        'type',
    ];

    protected $guarded = [];

    protected $hidden = [];

    //combine first middle and last name using accessor and mutators
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name;
    }

    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name;
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name;
    }


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name;
    }

    //for real
    // public function admission_two()
    // {
    //     return $this->hasOne(Second_admission::class, 'record_id');
    // }

    public function patient_id_table()
    {
        return $this->belongsTo(Patient_id::class);
    }

    // public function emergency_two()
    // {
    //     return $this->hasOne(Second_emergency::class, 'record_id');
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
