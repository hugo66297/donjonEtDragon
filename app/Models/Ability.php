<?php

namespace App\Models;

use App\Trait\CalculatesModifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory, CalculatesModifier;
    public $timestamps = false;

    protected $fillable = [
      'charactable_id',

    ];

    public function ownSkills() {
        return $this->hasMany(Skill::class);
    }
    // Many-to-many polymorphic relationships
    public function characters()
    {
        return $this->morphToMany(Character::class, 'charactable');
    }
}
