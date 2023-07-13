<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCriteria extends Model
{
    protected $fillable = ([
        'criteria_id',
        'sub_criteria',
        'parameter',
        'value'
    ]);

    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'criteria_id');
    }
}