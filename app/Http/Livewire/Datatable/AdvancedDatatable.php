<?php

namespace App\Http\Livewire\Datatable;

use Livewire\Component;

class AdvancedDatatable extends SimpleDatatable
{
    public int $limitFields;
    public function mount(array $collections, array $headings, array $names, array $fields): void
    {
        parent::mount($collections, $headings, $names, $fields);
        $this->limitFields = 1;
    }

    public function render()
    {
        return view('livewire.datatable.advanced-datatable');
    }
}
