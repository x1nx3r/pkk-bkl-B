<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class ValueProposition extends Component
{
    public $values;

    public function __construct()
    {
        $this->values = [
            [
                "icon" =>
                    "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z",
                "title" => "Visi",
                "description" =>
                    "Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.",
            ],
            [
                "icon" =>
                    "M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7v-7zm4-3h2v10h-2V7zm4 6h2v4h-2v-4z",
                "title" => "Misi",
                "description" =>
                    "Meningkatkan pembentukan karakter keluarga melalui penghayatan, pengamalan Pancasila, kegotong royongan serta kesetaraan dan keadilan gender. Meningkatkan pendidikan dan ekonomi keluarga melalui berbagai upaya keterampilan dan pengembangan koperasi. Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang dan perumahan sehat dan layak huni.",
            ],
            [
                "icon" =>
                    "M2 20h20v-4H2v4zm2-3h2v2H4v-2zM2 4v4h20V4H2zm4 3H4V5h2v2zm-4 7h20v-4H2v4zm2-3h2v2H4v-2z",
                "title" => "Tujuan",
                "description" =>
                    "Meningkatkan pelaksanaan pendidikan dan keterampilan. Meningkatkan kualitas dan kuantitas pangan keluarga. Meningkatkan derajat kesehatan keluarga. Meningkatkan pengelolaan perumahan dan penataan lingkungan bersih dan sehat.",
            ],
        ];
    }

    public function render()
    {
        return view("components.pages.value-proposition");
    }
}
