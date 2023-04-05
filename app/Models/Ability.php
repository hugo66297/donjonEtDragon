<?php

namespace App\Models;

use App\Trait\CalculatesModifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
      'charactable_id',

    ];

    // One-to-many polymorphic relationships
    public function skills() {
        return $this->hasMany(Skill::class);
    }

    // One-to-one relationships
    public function savingThrow() {
        return $this->hasOne(SavingThrow::class);
    }

    // Many-to-many polymorphic relationships
    public function characters()
    {
        return $this->morphToMany(Character::class, 'charactable');
    }

    public function modifierAbility() {
        return round(
            ($this->pivot->ability_value - 10) / 2,
            mode: $this->pivot->ability_value >= 10 ? PHP_ROUND_HALF_DOWN : PHP_ROUND_HALF_UP
        ) + $this->pivot->other_modifier_ability ?? 0;
    }
}
