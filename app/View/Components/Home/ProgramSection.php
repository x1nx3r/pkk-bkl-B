<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class ProgramSection extends Component
{
    public $title;
    public $programs;
    public $learnMoreLink;
    public $learnMoreText;

    public function __construct(
        $title = "10 Program Pokok PKK",
        $learnMoreLink = "#",
        $learnMoreText = "Pelajari Lebih Lanjut"
    ) {
        $this->title = $title;
        $this->learnMoreLink = $learnMoreLink;
        $this->learnMoreText = $learnMoreText;

        $this->programs = [
            "Penghayatan dan Pengamalan Pancasila",
            "Gotong Royong",
            "Pangan",
            "Sandang",
            "Perumahan dan Tatalaksana Rumah Tangga",
            "Pendidikan dan Keterampilan",
            "Kesehatan",
            "Pengembangan Kehidupan Berkoperasi",
            "Kelestarian Lingkungan Hidup",
            "Perencanaan Sehat",
        ];
    }

    public function render()
    {
        return view("components.home.program-section");
    }
}
