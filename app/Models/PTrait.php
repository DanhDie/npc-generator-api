<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PTrait extends Model
{
    protected $table = 'personality_traits';

    protected $fillable = [
        'description'
    ];
}