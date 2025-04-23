<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureCard extends Component
{
    public $title;
    public $link;
    public $linkText;

    public function __construct(
        $title = "",
        $link = "#",
        $linkText = "Selengkapnya"
    ) {
        $this->title = $title;
        $this->link = $link;
        $this->linkText = $linkText;
    }

    public function render()
    {
        return view("components.ui.feature-card");
    }
}
