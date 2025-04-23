<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutSection extends Component
{
    public $title;
    public $logoPlaceholder;

    public function __construct(
        $title = "Tentang PKK",
        $logoPlaceholder = "Logo PKK"
    ) {
        $this->title = $title;
        $this->logoPlaceholder = $logoPlaceholder;
    }

    public function render()
    {
        return view("components.home.about-section");
    }
}
