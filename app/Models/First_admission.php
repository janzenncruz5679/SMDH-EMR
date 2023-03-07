<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_admission extends Model
{
    use HasFactory;
    protected $table = "first_admissions";

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'personal_info' => 'array',
        'full_address' => 'array',
        'contact_person' => 'array',
    ];

    //combine first middle and last name using accessor and mutators
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name  . ' ' . ($this->suffix ? $this->suffix . ' ' : '');
    }

    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name . ' ' . ($this->suffix ? $this->suffix . ' ' : '');
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name . ' ' . ($this->suffix ? $this->suffix . ' ' : '');
    }

    public function setSuffixNameAttribute($value)
    {
        $this->attributes['suffix'] = $value;
        $this->attributes['full_name'] = $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name . ' ' . ($this->suffix ? $this->suffix . ' ' : '');
    }


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . ' ' . $this->last_name . ' ' . ($this->suffix ? $this->suffix . ' ' : '');
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
}
