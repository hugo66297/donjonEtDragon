<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class Input extends \BladeUIKit\Components\Forms\Inputs\Input
{
    public function __construct(string $name, string $id = null, string $type = 'text', ?string $value = '')
    {
        parent::__construct($name, $id, $type);
        $this->value = old($this->transformName(), $value ?? '');
    }
    public function transformName(): array|string {
        if (str_contains($this->name, '[') !== false) {
            return str_replace(['[', ']'], ['.', ''], $this->name);
        } else {
            return $this->name;
        }
    }
    public function render(): View
    {
        return view('components.input');
    }
}
