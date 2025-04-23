<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class OrgStructure extends Component
{
    public $leaders;

    public function __construct()
    {
        $this->leaders = [
            [
                "name" => "Ibu Hj. Nama Ketua",
                "position" => "Ketua",
                "photo" =>
                    "https://placehold.co/300x300/5A92C9/ffffff?text=Ketua",
                "description" =>
                    "Ketua TP-PKK Kabupaten Bangkalan periode 2021-2026.",
            ],
            [
                "name" => "Ibu Hj. Nama Wakil",
                "position" => "Wakil Ketua I",
                "photo" =>
                    "https://placehold.co/300x300/5A92C9/ffffff?text=Wakil+I",
                "description" =>
                    "Wakil Ketua I TP-PKK Kabupaten Bangkalan periode 2021-2026.",
            ],
            [
                "name" => "Ibu Hj. Nama Wakil",
                "position" => "Wakil Ketua II",
                "photo" =>
                    "https://placehold.co/300x300/5A92C9/ffffff?text=Wakil+II",
                "description" =>
                    "Wakil Ketua II TP-PKK Kabupaten Bangkalan periode 2021-2026.",
            ],
            [
                "name" => "Ibu Hj. Nama Sekretaris",
                "position" => "Sekretaris",
                "photo" =>
                    "https://placehold.co/300x300/5A92C9/ffffff?text=Sekretaris",
                "description" =>
                    "Sekretaris TP-PKK Kabupaten Bangkalan periode 2021-2026.",
            ],
            [
                "name" => "Ibu Hj. Nama Bendahara",
                "position" => "Bendahara",
                "photo" =>
                    "https://placehold.co/300x300/5A92C9/ffffff?text=Bendahara",
                "description" =>
                    "Bendahara TP-PKK Kabupaten Bangkalan periode 2021-2026.",
            ],
        ];
    }

    public function render()
    {
        return view("components.pages.org-structure");
    }
}
