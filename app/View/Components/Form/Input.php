<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;

    /**
     * The properties / methods that should not be exposed to the component template.
     *
     * @var array
     */
    protected $except = ['notExposed'];
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }

    /**
     * This function can also be publically accessed inside component
     */
    public function label($value)
    {
        return strtoupper($value);
    }

    public function notExposed()
    {
        dd(1);
    }
}
