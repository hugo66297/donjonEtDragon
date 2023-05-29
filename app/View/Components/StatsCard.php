<?php

namespace App\View\Components;

use App\Models\Ability;
use App\Models\SavingThrow;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StatsCard extends Component
{
    public Ability $ability;
        public SavingThrow $savingThrow;
        public Collection $skills;
        public string $color;
    public function __construct(Ability $ability, SavingThrow $savingThrow, Collection $skills, string $color)
    {
        $this->ability = $ability;
        $this->savingThrow = $savingThrow;
        $this->skills = $skills;
        $this->color = $color;
    }

    public function modifierFormat(Model $model) {
        if ($model instanceof Ability) {
            return $model->modifierAbility() >= 0 ? "+{$model->modifierAbility()}" : $model->modifierAbility();
        } elseif ($model instanceof Skill) {
            return $model->modifierSkill($this->ability, $model->characters()->first()) >= 0
                ? "+{$model->modifierSkill($this->ability, $model->characters()->first())}"
                : $model->modifierSkill($this->ability, $model->characters()->first());
        } elseif ($model instanceof SavingThrow) {
            return $model->modifierSavingThrow($this->ability, $model->characters()->first()) >= 0
                ? "+{$model->modifierSavingThrow($this->ability, $model->characters()->first())}"
                : $model->modifierSavingThrow($this->ability, $model->characters()->first());
        }
    }

    public function render()
    {
        return view('components.stats-card');
    }
}
