<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_outpatient extends Model
{
    use HasFactory;
    protected $table = "first_outpatients";
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

    //for real
    // public function outpatient_two()
    // {
    //     return $this->hasOne(Second_admission::class, 'record_id');
    // }

    public function patient_id_table()
    {
        return $this->belongsTo(Patient_id::class);
    }

    //for testing
    public function outpatient_two()
    {
        return $this->hasOne(Second_outpatient::class, 'record_id');
    }

    public function outpatient_three()
    {
        return $this->hasOne(Third_outpatient::class, 'record_id');
    }

    public function outpatient_four()
    {
        return $this->hasOne(Fourth_outpatient::class, 'record_id');
    }

    public function outpatient_five()
    {
        return $this->hasOne(Fifth_outpatient::class, 'record_id');
    }

    public function outpatient_six()
    {
        return $this->hasOne(Sixth_outpatient::class, 'record_id');
    }
}