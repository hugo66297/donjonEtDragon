<?php

namespace App\View\Components\form;

use App\Models\Ability;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepTwo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Collection $abilities,
    )
    {
        $this->abilities = Ability::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.step-two');
    }
}
