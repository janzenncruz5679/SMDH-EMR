<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionHistory extends Model
{
    use HasFactory;

    protected $table = 'admission_histories';

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'personal_info' => 'array',
        'full_address' => 'array',
        'contact_person' => 'array',
        'patient_affiliate' => 'array',
        'admitting_personel' => 'array',
        'hospital_visit' => 'array',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'other_opt' => 'array',
    ];

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'history_id');
    }

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


    public function patient_id_admission()
    {
        return $this->belongsTo(Patient_id::class);
    }
}