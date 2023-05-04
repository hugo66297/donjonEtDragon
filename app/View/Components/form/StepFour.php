<?php

namespace App\View\Components\form;

use App\Models\Feature;
use App\Models\Utility;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepFour extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Collection $utilities,
        public Collection $features
    )
    {
        $this->utilities = Utility::all();
        $this->features = Feature::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.step-four');
    }
}
