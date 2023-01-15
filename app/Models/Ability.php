<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;

    public function skills() {
        return $this->belongsToMany(Skill::class);
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
