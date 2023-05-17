<?php

namespace App\View\Components\Datatable;

use Illuminate\View\Component;

class SimpleDatatable extends Component
{
    public array $headings;
    public array $collections;
    public array $names;
    public array $fields;
    public function __construct(array $collections, array $headings, array $names, array $fields)
    {
        $this->collections = $collections;
        $this->headings = $headings;
        $this->names = $names;
        $this->fields = $fields;
    }

    public function render()
    {
        return view('components.datatable.simple-datatable');
    }
}
