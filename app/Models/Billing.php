<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $table = 'billings';

    protected $guarded = [];

    protected $hidden = [];

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'admissionBilling_id');
    }

    public function emergency()
    {
        return $this->belongsTo(Emergency::class, 'emergencyBilling_id');
    }

    public function outpatient()
    {
        return $this->belongsTo(Outpatient::class, 'outpatientBilling_id');
    }
}
