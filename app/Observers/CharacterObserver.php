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
