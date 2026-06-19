<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastName extends Model
{
    protected $fillable = [
        'name',
        'race_id'
    ];
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}