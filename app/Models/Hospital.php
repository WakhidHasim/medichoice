<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital_name',
        'address'
    ];

    public function alternatives()
    {
        return $this->hasMany(Alternative::class);
    }
}