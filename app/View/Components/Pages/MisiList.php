<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class MisiList extends Component
{
    public $title;
    public $items;
    public $numbered;
    public $itemColor;
    public $titleColor;

    public function __construct(
        $title = "",
        $items = [],
        $numbered = true,
        $itemColor = "text-gray-700",
        $titleColor = "text-[#5A92C9]"
    ) {
        $this->title = $title;
        $this->items = $items;
        $this->numbered = $numbered;
        $this->itemColor = $itemColor;
        $this->titleColor = $titleColor;
    }

    public function render()
    {
        return view("components.pages.misi-list");
    }
}
