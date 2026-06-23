<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $fillable = [
        'user_id', 'name', 'race', 'gender',
        'trait', 'ideal', 'ideal_description', 'bond', 'flaw',
        'strength', 'dexterity', 'constitution',
        'intelligence', 'wisdom', 'charisma',
    ];
}
