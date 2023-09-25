<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public $datas;
    public $headings;
    /**
     * Create a new component instance.
     */
    public function __construct($datas, $headings)
    {
        $this->datas = $datas;
        $this->headings = $headings;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.index');
    }
}
