<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputLabel extends Component
{
    public $name;
    public $text;
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text
            ?? ucwords(str_replace('_', ' ', $name));
    }

    public function render(): View|Closure|string
    {
        return view('components.input-label');
    }
}
