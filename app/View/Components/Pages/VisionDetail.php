<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class VisionDetail extends Component
{
    public $title;
    public $description;
    public $iconPath;
    public $iconBg;
    public $alignment;

    public function __construct(
        $title = "",
        $description = "",
        $iconPath = "",
        $iconBg = "bg-[#5A92C9]/10",
        $alignment = "left"
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->iconPath = $iconPath;
        $this->iconBg = $iconBg;
        $this->alignment = $alignment;
    }

    public function render()
    {
        return view("components.pages.vision-detail");
    }
}
