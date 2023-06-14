<?php

namespace App\Http\Livewire\Spells;

use App\Models\Level;
use App\Models\School;
use App\Models\Spell;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public $page = 1;
    public array $range = [];
    public string $selectSchool = '';
    public bool $isRituel = false;
    public array $filtres = [];

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount() {
        $this->range = [
            'min' => [0, 5],
            'max' => [4, 9],
            'values' => [0, 9],
        ];
    }

    public function updatingSearch($value): void
    {
        $this->resetPage();
        if ($value !== '') {
            $this->filtres['search'] = $value;
        } else {
            unset($this->filtres['search']);
        }
    }

    public function updatingRange($value): void
    {
        $this->resetPage();
    }

    public function updatingSelectSchool($value): void
    {
        $this->resetPage();
        if ($value !== '') {
            $this->filtres['school'] = $value;
        } else {
            unset($this->filtres['school']);
        }
    }

    public function updatingIsRituel($value): void
    {
        $this->resetPage();
        $this->filtres['is_rituel'] = $value;
    }

    public function render()
    {
        return view('livewire.spells.index', [
            'spells' => Spell::select('spells.*')
                ->join('levels', 'levels.id', 'spells.level_id')
                ->when($this->search, function (Builder $builder) {
                    $builder->where('name', 'like', "%$this->search%");
                })
                ->when($this->selectSchool, function (Builder $builder) {
                    $builder->where('school_id', $this->selectSchool);
                })
                ->when($this->isRituel, function (Builder $builder) {
                    $builder->where('is_rituel', $this->isRituel);
                })
                ->whereBetween('levels.level_name', $this->range['values'])
                ->orderBy('name')
                ->paginate(20),
            'levels' => Level::all(),
            'schools' => School::all()
        ]);
    }
}
