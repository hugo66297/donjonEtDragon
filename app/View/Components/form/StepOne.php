<?php

namespace App\View\Components\form;

use App\Models\Adventure;
use App\Models\Alignment;
use App\Models\Background;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Subrace;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepOne extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Collection $categories,
        public Collection $backgrounds,
        public Collection $subRaces,
        public Collection $alignments,
        public Collection $goals,
        public Collection $adventures,
    )
    {
        $this->categories = Category::all();
        $this->backgrounds = Background::all();
        $this->subRaces = Subrace::all();
        $this->alignments = Alignment::all();
        $this->goals = Goal::all();
        $this->adventures = Adventure::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.step-one');
    }
}
