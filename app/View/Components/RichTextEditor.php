<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class RichTextEditor extends Component
{
    public string $id;
    public string $name;
    public string $label;
    public string $placeholder;
    public bool $required;

    public function __construct(string $id, string $name, string $label, string $placeholder, bool $required = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    public function render()
    {
        return view('components.rich-text-editor');
    }
}
