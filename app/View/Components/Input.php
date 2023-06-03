<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class Input extends \BladeUIKit\Components\Forms\Inputs\Input
{
    public string $label;
    public string $placeholder;
    public bool $decimal;
    public bool $required;
    public function __construct(
        string $name,
        string $type = 'text',
        string $id = null,
        string $label = null,
        string $placeholder = null,
        ?string $value = '',
        bool $decimal = false,
        bool $required = false
    )
    {
        parent::__construct($name, $id, $type);
        $this->value = old($this->transformName(), $value ?? '');
        $this->label = $label ?? '';
        $this->placeholder = $placeholder ?? $label ?? '';
        $this->decimal = $decimal;
        $this->required = $required;
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
