<?php

namespace App\Models;

use App\Trait\CalculatesModifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory, CalculatesModifier;

    public $timestamps = false;

    public function ability() {
        return $this->belongsTo(Ability::class);
    }

    // Many-to-many polymorphic relationships
    public function characters()
    {
        return $this->morphToMany(Character::class, 'charactable');
    }
}
