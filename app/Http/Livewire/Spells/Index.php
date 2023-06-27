<?php

namespace App\Http\Livewire\Spells;

use App\Models\Category;
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
    public int $lowerValue = 0;
    public int $upperValue = 9;
    public string $selectSchool = '';
    public string $selectCategory = '';
    public bool $isRituel = false;
    public array $filters = [];

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount() {
        $this->range = [
            'min' => 0,
            'max' => 9,
            'values' => [
                $this->lowerValue,
                $this->upperValue
            ]
        ];
    }

    public function updatingSearch($value): void
    {
        $this->resetPage();
        if ($value !== '') {
            $this->filters['search'] = $value;
        } else {
            unset($this->filters['search']);
        }
    }

    public function updatingLowerValue(int $value): void
    {
        $this->resetPage();
        $this->range['values'][0] = $value;
    }

    public function updatingUpperValue(int $value): void
    {
        $this->resetPage();
        $this->range['values'][1] = $value;
    }

    public function updatingSelectSchool($value): void
    {
        $this->resetPage();
        if ($value !== '') {
            $this->filters['school'] = $value;
        } else {
            unset($this->filters['school']);
        }
    }

    public function updatingSelectCategory($value): void
    {
        $this->resetPage();
        if ($value !== '') {
            $this->filters['category'] = $value;
        } else {
            unset($this->filters['category']);
        }
    }

    public function updatingIsRituel($value): void
    {
        $this->resetPage();
        if ($value === true) {
            $this->filters['is_rituel'] = $value;
        } else {
            unset($this->filters['is_rituel']);
        }
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
                ->when($this->selectCategory, function (Builder $builder) {
                    $builder->join('category_spell', 'category_spell.spell_id', 'spells.id')
                        ->where('category_id', $this->selectCategory);
                })
                ->when($this->isRituel === true, function (Builder $builder) {
                    $builder->where('is_rituel', $this->isRituel);
                })
                ->whereBetween('levels.level_name', collect($this->range['values'])->sort())
                ->orderBy('name')
                ->paginate(20),
            'levels' => Level::all(),
            'schools' => School::all(),
            'categories' => Category::all(),
        ]);
    }
}
