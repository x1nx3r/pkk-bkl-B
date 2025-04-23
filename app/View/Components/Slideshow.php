<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slideshow extends Component
{
    public $slides;
    public $autoplay;
    public $interval;

    public function __construct(
        $slides = [],
        $autoplay = true,
        $interval = 5000
    ) {
        $this->slides = $slides;
        $this->autoplay = $autoplay;
        $this->interval = $interval;
    }

    public function render()
    {
        return view("components.slideshow");
    }
}
