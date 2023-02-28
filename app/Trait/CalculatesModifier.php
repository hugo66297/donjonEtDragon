<?php

namespace App\Trait;

use App\Models\Character;

trait CalculatesModifier
{
    public static function calculates(int $modifier, Character $character, bool $isProficient) {
        return $isProficient ? $modifier + $character->proficiency_bonus : $modifier;
    }
}
