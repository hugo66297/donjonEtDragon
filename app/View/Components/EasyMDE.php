<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class EasyMDE extends \BladeUIKit\Components\Editors\EasyMDE
{
    public function options(): array
    {
        return array_merge([
            'maxHeight' => '250px',
            'hideIcons' => ['fullscreen', 'side-by-side', 'guide', 'image', 'link', 'ordered-list', 'quote'],
            'showIcons' => ['table'],
            'status' => false,
        ], parent::options());
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
        return view('components.editors.easy-mde');
    }
}
