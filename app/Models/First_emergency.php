<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_emergency extends Model
{
    use HasFactory;
    protected $table = "first_emergencies";
    protected $fillable = [
        'address',
        'sr_no',
        'full_name',
        'last_name',
        'first_name',
        'middle_name',
        'type',
        'birthday',
        'ward_room_bed_service',
        'age',
        'gender',
        'phone',
    ];


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

    public function emergency_two()
    {
        return $this->hasOne(Second_emergency::class, 'record_id');
    }

    //for testing
    // public function admission_two()
    // {
    //     return $this->hasOne(Second_admission::class, 'record_id');
    // }

    // public function admission_three()
    // {
    //     return $this->hasOne(Third_admission::class, 'record_id');
    // }

    // public function admission_four()
    // {
    //     return $this->hasOne(Fourth_admission::class, 'record_id');
    // }

    // public function admission_five()
    // {
    //     return $this->hasOne(Fifth_admission::class, 'record_id');
    // }

    // public function admission_six()
    // {
    //     return $this->hasOne(Sixth_admission::class, 'record_id');
    // }
}