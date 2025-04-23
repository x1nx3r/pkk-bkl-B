<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class ProgramTable extends Component
{
    public $headers;
    public $items;
    public $headerBg;
    public $headerText;

    public function __construct(
        $headers = [],
        $items = [],
        $headerBg = "bg-[#5A92C9]",
        $headerText = "text-white"
    ) {
        $this->headers = $headers;
        $this->items = $items;
        $this->headerBg = $headerBg;
        $this->headerText = $headerText;
    }

    public function render()
    {
        return view("components.pages.program-table");
    }
}
