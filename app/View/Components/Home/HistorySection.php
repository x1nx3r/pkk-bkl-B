<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HistorySection extends Component
{
    public $title;
    public $imagePlaceholder;
    public $historyItems;

    public function __construct(
        $title = "Sejarah Singkat",
        $imagePlaceholder = "Foto Sejarah PKK"
    ) {
        $this->title = $title;
        $this->imagePlaceholder = $imagePlaceholder;
        $this->historyItems = [
            "Gerakan PKK bermula pada tahun 1957 sebagai Pendidikan Kesejahteraan Keluarga yang diprakarsai oleh Departemen Pendidikan, Pengajaran dan Kebudayaan.",
            "Pada tahun 1972, namanya berubah menjadi Pembinaan Kesejahteraan Keluarga.",
            "Sejak tahun 2000, PKK mengalami perubahan nama menjadi Pemberdayaan dan Kesejahteraan Keluarga, menekankan pada aspek pemberdayaan wanita untuk turut berpartisipasi dalam pembangunan.",
            "Di Kabupaten Bangkalan, gerakan PKK telah menjadi mitra pemerintah dalam melaksanakan berbagai program pembangunan, khususnya yang berkaitan dengan kesejahteraan keluarga dan pemberdayaan masyarakat.",
        ];
    }

    public function render()
    {
        return view("components.home.history-section");
    }
}
