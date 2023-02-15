<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function characterSkills() {
        return $this->belongsToMany(Skill::class);
    }

    public function ownSkills() {
        return $this->hasMany(Skill::class);
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
