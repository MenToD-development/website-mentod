<?php

namespace App\View\Components\Elements;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string|null $icon           Icon blade file name.
     * @param bool|null   $textShowMobile Show test on mobile?
     */
    public function __construct (
        public ?string $icon = null,
        public ?bool   $textShowMobile = false,
        public ?string $color = 'white',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.elements.button');
    }
}
