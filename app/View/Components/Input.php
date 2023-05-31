<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class Input extends \BladeUIKit\Components\Forms\Inputs\Input
{
    public string $label;
    public string $placeholder;
    public bool $decimal;
    public function __construct(
        string $name,
        string $type = 'text',
        string $id = null,
        string $label = null,
        string $placeholder = null,
        ?string $value = '',
        bool $decimal = false
    )
    {
        parent::__construct($name, $id, $type);
        $this->value = old($this->transformName(), $value ?? '');
        $this->label = $label ?? '';
        $this->placeholder = $placeholder ?? $label ?? '';
        $this->decimal = $decimal;
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
