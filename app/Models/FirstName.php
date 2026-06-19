<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstName extends Model
{
    protected $fillable = [
        'name',
        'race_id',
        'gender'
    ];
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}