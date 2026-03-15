<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'reg_number',
        'brand',
        'model',
        'lecturer_id'
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
}
