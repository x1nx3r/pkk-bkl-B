<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class ProfileHeader extends Component
{
    public $title;
    public $subtitle;
    public $backgroundImage;

    public function __construct(
        $title = "Profil Kami",
        $subtitle = "Mengenal Lebih Dekat",
        $backgroundImage = "https://placehold.co/1200x400/5A92C9/ffffff"
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->backgroundImage = $backgroundImage;
    }

    public function render()
    {
        return view("components.pages.profile-header");
    }
}
