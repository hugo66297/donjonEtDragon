<?php

namespace App\View\Components\Datatable;

use Illuminate\View\Component;

class AdvancedDatatable extends SimpleDatatable
{
    public function __construct(array $collections, array $headings, array $names, array $fields)
    {
        parent::__construct($collections, $headings, $names, $fields);
    }

    public function render()
    {
        return view('components.datatable.advanced-datatable');
    }
}
