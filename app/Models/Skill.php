<?php

namespace App\Models;

use App\Trait\CalculatesModifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function ability() {
        return $this->belongsTo(Ability::class);
    }

    // Many-to-many polymorphic relationships
    public function characters()
    {
        return $this->morphToMany(Character::class, 'charactable');
    }

    public function modifierSkill(Ability $ability, $hero)
    {
        $modifier = $ability->modifierAbility();
        if ($this->pivot->other_modifier_skill && $this->pivot->is_proficient) {
            return $modifier + $this->pivot->other_modifier_skill + $hero->proficiency_bonus;
        } elseif ($this->pivot->other_modifier_skill) {
            return $modifier + $this->pivot->other_modifier_skill;
        } elseif ($this->pivot->is_proficient) {
            return $modifier + $hero->proficiency_bonus;
        }
        return $modifier;
    }
}
