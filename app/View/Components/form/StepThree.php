<?php

namespace App\View\Components\form;

use App\Models\Attack;
use App\Models\Weapon;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepThree extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Collection $weapons,
        public Collection $attacks
    )
    {
        $this->weapons = Weapon::all()->map(function (Weapon $weapon) {
            return Weapon::hydrate([
                [
                    'id' => $weapon->getKey(),
                    'name' => $weapon->name,
                    'full_description' => $weapon->fullDescription()
                ]
            ])->first();
        });
        $this->attacks = Attack::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.step-three');
    }
}
