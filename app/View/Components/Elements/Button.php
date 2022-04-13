<?php

namespace App\View\Components\Elements;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $icon = null
    ) { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.elements.button');
    }
}
