<?php

namespace App\Observers;

use App\Models\Ability;
use App\Models\Character;
use App\Models\Skill;
use App\Models\Weapon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Request;

class CharacterObserver
{
    /**
     * Handle the Character "created" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function creating(Character $character)
    {

    }

    /**
     * Handle the Character "created" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function created(Character $character)
    {
        // Abilities and skills
        foreach (Request::input('abilities') as $abilityId => $ability) {
            $character->abilities()->attach($abilityId, $ability['attributes']);

            $savingThrow = array_key_exists('savingThrow', $ability) ? $ability['savingThrow'] : [];
            $character->savingThrows()->attach($savingThrow['charactable_id'], $savingThrow);

            $skills = array_key_exists('skills', $ability) ? $ability['skills'] : [];
            foreach ($skills as $skillId => $skill) {
                $character->skills()->attach($skillId, $skill);
            }
        }

        // Attacks
        foreach (Request::input('attackIds') as $index => $attackId) {
            $character->attacks()
                ->attach($attackId, ['other_description' => Request::input('attackDescriptions')[$index]]);
        }
        // Utilities
        foreach (Request::input('maitriseIds') as $index => $maitriseId) {
            $character->utilities()
                ->attach($maitriseId, ['description' => Request::input('maitriseDescriptions')[$index]]);
        }
        // Features
        foreach (Request::input('features') as $featureId) {
            $character->features()->attach($featureId);
        }
        // Weapons
        foreach (Request::input('weapons') as $weaponData) {
            $character->weapons()->attach(Weapon::getWeaponIdByInfos($weaponData));
        }
        // Coins
        foreach (Request::input('coins') as $coinId => $quantity) {
            $character->coins()->attach($coinId, ['quantity' => $quantity]);
        }
    }

    /**
     * Handle the Character "updated" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function updated(Character $character)
    {
        //
    }

    /**
     * Handle the Character "deleted" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function deleted(Character $character)
    {
        //
    }

    /**
     * Handle the Character "restored" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function restored(Character $character)
    {
        //
    }

    /**
     * Handle the Character "force deleted" event.
     *
     * @param \App\Models\Character $character
     * @return void
     */
    public function forceDeleted(Character $character)
    {
        //
    }
}
