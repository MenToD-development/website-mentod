<?php

namespace App\View\Components\Elements;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BulletGrid extends Component
{
    /**
     * Creates new BulletGrid component.
     *
     * @param int $items Amount of items in one row.
     * @param int $rows  Amount of rows.
     */
    public function __construct (
        public int $items = 4,
        public int $rows = 3,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render (): View
    {
        return view('components.elements.bullet-grid');
    }
}
