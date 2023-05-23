<?php

namespace App\Http\Livewire\Datatable;

use Livewire\Component;

class SimpleDatatable extends Component
{
    public array $headings;
    public array $collections;
    public array $names;
    public array $fields;
    public function mount(array $collections, array $headings, array $names, array $fields): void
    {
        $this->collections = $collections;
        $this->headings = $headings;
        $this->names = $names;
        $this->fields = $fields;
    }

    public function render()
    {
        return view('livewire.datatable.simple-datatable');
    }
}
