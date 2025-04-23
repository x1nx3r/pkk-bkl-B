<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TimelineItem extends Component
{
    public $number;

    public function __construct($number = "1")
    {
        $this->number = $number;
    }

    public function render()
    {
        return view("components.ui.timeline-item");
    }
}
