<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $type;

    public function __construct(string $name, string $type = 'text', ?string $id = null, ?string $value = null, ?string $placeholder = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
