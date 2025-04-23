<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionTitle extends Component
{
    public $title;

    public function __construct($title = "")
    {
        $this->title = $title;
    }

    public function render()
    {
        return view("components.ui.section-title");
    }
}
