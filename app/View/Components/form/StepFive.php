<?php

namespace App\View\Components\form;

use App\Models\Coin;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepFive extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Collection $coins
    )
    {
        $this->coins = Coin::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.step-five');
    }
}
