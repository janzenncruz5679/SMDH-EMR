<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FluidIntakeHistory extends Model
{
    use HasFactory;

    protected $table = "fluid_intake_histories";

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'patient_info' => 'array',
        'date_of_intake' => 'array',
        'intake' => 'array',
        'oral' => 'array',
        'parental' => 'array',
        'oral_parental_total' => 'array',
        'urine' => 'array',
        'drainage' => 'array',
        'others' => 'array',
        'urine_drainage_others_total' => 'array',
        'overall_total' => 'array',

    ];

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
}
