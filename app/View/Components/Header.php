<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $appName;

    public function __construct($appName = "Your Organization Name")
    {
        $this->appName = $appName;
    }

    public function render()
    {
        return view("components.header");
    }
}
