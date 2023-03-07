<?php
namespace App\Models;

use App\Models\Traits\PatientsRelationships;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use PatientsRelationships;
    protected $table = 'patients';
    protected function fullName(): Attribute
    {
        return Attribute::make(
        get: function ($value) {
            return implode(
                ' ',
                array_filter(
                    [
                        $this->fname,
                        $this->mname,
                        $this->lname,
                        $this->suffix,
                    ],
                    function ($item) {

                        return !empty($item);

                    }
                )
            );
        }
        );
    }

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'bdate' => 'date',
        'emergency_contact' => 'array',
        'address' => 'array',
        'relatives' => 'array'
    ];
}
