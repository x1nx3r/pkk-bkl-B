<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class ProgramSection extends Component
{
    public $title;
    public $bgColor;
    public $titleColor;
    public $borderColor;

    public function __construct(
        $title = "",
        $bgColor = "bg-white",
        $titleColor = "text-[#5A92C9]",
        $borderColor = "border-[#5A92C9]"
    ) {
        $this->title = $title;
        $this->bgColor = $bgColor;
        $this->titleColor = $titleColor;
        $this->borderColor = $borderColor;
    }

    public function render()
    {
        return view("components.pages.program-section");
    }
}
