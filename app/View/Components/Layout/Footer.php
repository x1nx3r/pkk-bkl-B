<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Footer extends Component
{
    public $orgName;
    public $address;
    public $email;
    public $phone;
    public $facebookLink;
    public $instagramLink;
    public $youtubeLink;

    public function __construct(
        $orgName = "MPP-PKK Kabupaten Bangkalan",
        $address = "Jl. Contoh No. 123, Bangkalan",
        $email = "info@pkk-bangkalan.go.id",
        $phone = "(0123) 456789",
        $facebookLink = "#",
        $instagramLink = "#",
        $youtubeLink = "#"
    ) {
        $this->orgName = $orgName;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->facebookLink = $facebookLink;
        $this->instagramLink = $instagramLink;
        $this->youtubeLink = $youtubeLink;
    }

    public function render()
    {
        return view("components.layout.footer");
    }
}
