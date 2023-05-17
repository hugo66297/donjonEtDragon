<?php

namespace App\View\Components\form;

use App\Models\Ability;
use App\Models\SavingThrow;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StepTwo extends Component
{
    public function __construct(
        public Collection $abilities,
        public Collection $savingThrows,
        public Collection $skills,
    )
    {
        $this->abilities = Ability::all();
        $this->savingThrows = SavingThrow::all()->load('ability');
        $this->skills = Skill::all()->load('ability');
    }

    public function render()
    {
        return view('components.form.step-two');
    }
}
