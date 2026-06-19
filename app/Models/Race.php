<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
        'name'
    ];
    public function firstNames()
    {
        return $this->hasMany(FirstName::class);
    }

    public function lastNames()
    {
        return $this->hasMany(LastName::class);
    }
}
