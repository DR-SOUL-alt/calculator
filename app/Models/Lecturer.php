<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'phone',
        'email'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
