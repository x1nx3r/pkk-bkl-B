<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageSection;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Visi section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "visi",
            "title" => "Visi",
            "order" => 10,
            "content" => '
<p><em>"Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan."</em></p>

<ol>
    <li><strong>Beriman dan Bertaqwa</strong>: Mewujudkan keluarga yang taat menjalankan ibadah sesuai dengan agama dan kepercayaan masing-masing, serta mengamalkan nilai-nilai agama dalam kehidupan sehari-hari. Nilai-nilai keimanan dan ketaqwaan menjadi fondasi utama dalam membangun keluarga yang harmonis.</li>

    <li><strong>Berakhlak Mulia dan Berbudi Luhur</strong>: Membentuk keluarga yang memiliki integritas moral tinggi, jujur, santun, dan menghormati nilai-nilai budaya dan adat istiadat. Budi pekerti luhur tercermin dalam sikap dan perilaku seluruh anggota keluarga dalam interaksi sosial kemasyarakatan.</li>

    <li><strong>Sehat Sejahtera</strong>: Mewujudkan keluarga yang memiliki kondisi kesehatan fisik, mental, dan sosial yang optimal, serta memiliki akses terhadap pelayanan kesehatan yang berkualitas. Kesejahteraan keluarga mencakup terpenuhinya kebutuhan dasar, pendidikan, dan ekonomi.</li>

    <li><strong>Maju dan Mandiri</strong>: Membentuk keluarga yang berpendidikan, produktif, dan memiliki daya saing dalam kehidupan bermasyarakat. Kemandirian mencakup kemampuan untuk memenuhi kebutuhan sendiri, mengambil keputusan, dan mengatasi masalah secara mandiri tanpa tergantung pada bantuan orang lain.</li>

    <li><strong>Kesetaraan dan Keadilan Gender</strong>: Mewujudkan hubungan yang setara dan adil antara laki-laki dan perempuan dalam keluarga, di mana semua anggota keluarga memiliki hak, kewajiban, peluang, dan penghargaan yang sama. Kesetaraan gender memungkinkan partisipasi penuh seluruh anggota keluarga dalam pembangunan.</li>

    <li><strong>Kesadaran Hukum dan Lingkungan</strong>: Membentuk keluarga yang taat hukum, menyadari hak dan kewajibannya sebagai warga negara, serta memiliki kepedulian terhadap kelestarian lingkungan hidup. Kesadaran hukum dan lingkungan akan menciptakan masyarakat yang tertib, aman, dan lestari.</li>
</ol>',
        ]);

        // Misi section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "misi",
            "title" => "Misi",
            "order" => 20,
            "content" => '
<ol>
    <li><strong>Meningkatkan Pembentukan Karakter Keluarga</strong>: Meningkatkan pembentukan karakter keluarga melalui penghayatan, pengamalan Pancasila, kegotong royongan serta kesetaraan dan keadilan gender.</li>

    <li><strong>Meningkatkan Pendidikan dan Keterampilan</strong>: Meningkatkan pendidikan dan keterampilan anggota keluarga melalui program pendidikan formal, non-formal, dan informal yang berkesinambungan.</li>

    <li><strong>Mengembangkan Ekonomi Keluarga</strong>: Meningkatkan pendapatan keluarga melalui pengembangan kewirausahaan, koperasi, dan usaha ekonomi produktif lainnya.</li>

    <li><strong>Meningkatkan Ketahanan Keluarga</strong>: Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang, perumahan sehat dan layak huni, serta pemenuhan kebutuhan dasar lainnya.</li>

    <li><strong>Meningkatkan Derajat Kesehatan Keluarga</strong>: Meningkatkan derajat kesehatan keluarga, kelestarian lingkungan hidup, dan perencanaan sehat melalui pola hidup sehat dan pencegahan penyakit.</li>

    <li><strong>Menguatkan Kelembagaan PKK</strong>: Meningkatkan pengelolaan gerakan PKK dengan memperkuat kelembagaan dan meningkatkan kemitraan dengan berbagai pihak, baik pemerintah maupun non-pemerintah.</li>
</ol>',
        ]);

        // Tujuan section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "tujuan",
            "title" => "Tujuan",
            "order" => 30,
            "content" => '
<div>
    <h4><strong>Jangka Pendek</strong></h4>
    <ul>
        <li>Meningkatkan kapasitas kader PKK</li>
        <li>Meningkatkan keterampilan keluarga dalam pengolahan pangan lokal</li>
        <li>Meningkatkan pemahaman masyarakat tentang kesehatan keluarga</li>
        <li>Mengembangkan program usaha ekonomi produktif</li>
    </ul>
</div>

<div>
    <h4><strong>Jangka Menengah</strong></h4>
    <ul>
        <li>Terwujudnya peningkatan kualitas pendidikan keluarga</li>
        <li>Berkembangnya koperasi dan UMKM binaan PKK</li>
        <li>Terwujudnya pola hidup bersih dan sehat di keluarga</li>
        <li>Meningkatnya partisipasi perempuan dalam pembangunan</li>
    </ul>
</div>

<div>
    <h4><strong>Jangka Panjang</strong></h4>
    <ul>
        <li>Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa</li>
        <li>Terwujudnya keluarga yang sehat, sejahtera, maju dan mandiri</li>
        <li>Terwujudnya kesetaraan dan keadilan gender dalam keluarga</li>
        <li>Terwujudnya kesadaran hukum dan lingkungan hidup dalam keluarga</li>
        <li>Terwujudnya keluarga sebagai pilar ketahanan bangsa</li>
    </ul>
</div>',
        ]);

        // Isu Strategis section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "isu-strategis",
            "title" => "Isu Strategis",
            "order" => 40,
            "content" => '
<div>
    <h4><strong>Pemberdayaan Masyarakat</strong></h4>
    <p>Meningkatkan keberdayaan masyarakat dalam berbagai aspek kehidupan, baik sosial, ekonomi, maupun budaya. Masyarakat menjadi subjek pembangunan yang aktif dan mampu mengidentifikasi masalah serta mencari solusi secara mandiri.</p>
</div>

<div>
    <h4><strong>Penguatan Ekonomi Keluarga</strong></h4>
    <p>Meningkatkan kapasitas ekonomi keluarga melalui pengembangan kewirausahaan, pembentukan dan penguatan koperasi, serta pengembangan industri rumah tangga. Ekonomi keluarga yang kuat akan menjadi fondasi kesejahteraan masyarakat.</p>
</div>

<div>
    <h4><strong>Kesehatan Keluarga</strong></h4>
    <p>Meningkatkan kesadaran dan kemampuan keluarga dalam menerapkan pola hidup bersih dan sehat, pemenuhan gizi keluarga, serta akses terhadap pelayanan kesehatan. Keluarga sehat adalah modal dasar pembangunan SDM berkualitas.</p>
</div>',
        ]);
    }
}
