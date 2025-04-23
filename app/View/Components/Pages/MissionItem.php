<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class MissionItem extends Component
{
    public $number;
    public $title;

    public function __construct($number = 1, $title = "")
    {
        $this->number = $number;
        $this->title = $title;
    }

    public function render()
    {
        return view("components.pages.mission-item");
    }
}
