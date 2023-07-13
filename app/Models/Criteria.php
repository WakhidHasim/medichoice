<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = [
        'criteria_name',
        'weight',
        'type'
    ];

    public function sub_criterias()
    {
        return $this->hasMany(SubCriteria::class);
    }
}