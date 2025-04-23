<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class HeroSection extends Component
{
    /**
     * The section title.
     *
     * @var string
     */
    public $title;

    /**
     * The section subtitle.
     *
     * @var string
     */
    public $subtitle;

    /**
     * The section description.
     *
     * @var string
     */
    public $description;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param  string  $subtitle
     * @param  string  $description
     * @return void
     */
    public function __construct($title = "", $subtitle = "", $description = "")
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("components.home.hero-section");
    }
}
