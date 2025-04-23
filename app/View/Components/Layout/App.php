<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public $title;
    public $appName;

    public function __construct(
        $title = "MPP-PKK Kabupaten Bangkalan",
        $appName = "MPP-PKK Kabupaten Bangkalan"
    ) {
        $this->title = $title;
        $this->appName = $appName;
    }

    public function render()
    {
        return view("components.layout.app");
    }
}
