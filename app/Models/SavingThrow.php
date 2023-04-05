<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingThrow extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function characters()
    {
        return $this->morphToMany(Character::class, 'charactable');
    }

    public function ability() {
        return $this->belongsTo(Ability::class);
    }

    public function modifierSavingThrow($ability, $hero) {
        $modifier = $ability->modifierAbility();
        if ($this->pivot->other_modifier_throw && $this->pivot->is_proficient) {
            return $modifier + $this->pivot->other_modifier_throw + $hero->proficiency_bonus;
        } elseif ($this->pivot->other_modifier_skill) {
            return $modifier + $this->pivot->other_modifier_throw;
        } elseif ($this->pivot->is_proficient) {
            return $modifier + $hero->proficiency_bonus;
        }
        return $modifier;
    }
}
