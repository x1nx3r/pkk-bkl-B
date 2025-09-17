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
            "active" => 1,
            "content" => '<p>"Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan."</p><ul><li><strong>Berakhlak Mulia dan Berbudi Luhur</strong>: Membentuk keluarga yang memiliki integritas moral tinggi, jujur, santun, dan menghormati nilai-nilai budaya dan adat istiadat. Budi pekerti luhur tercermin dalam sikap dan perilaku seluruh anggota keluarga dalam interaksi sosial kemasyarakatan.</li><li><strong>Sehat Sejahtera</strong>: Mewujudkan keluarga yang memiliki kondisi kesehatan fisik, mental, dan sosial yang optimal, serta memiliki akses terhadap pelayanan kesehatan yang berkualitas. Kesejahteraan keluarga mencakup terpenuhinya kebutuhan dasar, pendidikan, dan ekonomi.</li><li><strong>Maju dan Mandiri</strong>: Membentuk keluarga yang berpendidikan, produktif, dan memiliki daya saing dalam kehidupan bermasyarakat. Kemandirian mencakup kemampuan untuk memenuhi kebutuhan sendiri, mengambil keputusan, dan mengatasi masalah secara mandiri tanpa tergantung pada bantuan orang lain.</li><li><strong>Kesetaraan dan Keadilan Gender</strong>: Mewujudkan hubungan yang setara dan adil antara laki-laki dan perempuan dalam keluarga, di mana semua anggota keluarga memiliki hak, kewajiban, peluang, dan penghargaan yang sama. Kesetaraan gender memungkinkan partisipasi penuh seluruh anggota keluarga dalam pembangunan.</li><li><strong>Kesadaran Hukum dan Lingkungan</strong>: Membentuk keluarga yang taat hukum, menyadari hak dan kewajibannya sebagai warga negara, serta memiliki kepedulian terhadap kelestarian lingkungan hidup. Kesadaran hukum dan lingkungan akan menciptakan masyarakat yang tertib, aman, dan lestari.</li></ul>',
            "content_data" => json_encode([]),
        ]);

        // Misi section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "misi",
            "title" => "Misi",
            "order" => 20,
            "active" => 1,
            "content" => '<ol><li><strong>Meningkatkan Pembentukan Karakter Keluarga</strong>: Meningkatkan pembentukan karakter keluarga melalui penghayatan, pengamalan Pancasila, kegotong royongan serta kesetaraan dan keadilan gender.</li><li><strong>Meningkatkan Pendidikan dan Keterampilan</strong>: Meningkatkan pendidikan dan keterampilan anggota keluarga melalui program pendidikan formal, non-formal, dan informal yang berkesinambungan.</li><li><strong>Mengembangkan Ekonomi Keluarga</strong>: Meningkatkan pendapatan keluarga melalui pengembangan kewirausahaan, koperasi, dan usaha ekonomi produktif lainnya.</li><li><strong>Meningkatkan Ketahanan Keluarga</strong>: Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang, perumahan sehat dan layak huni, serta pemenuhan kebutuhan dasar lainnya.</li><li><strong>Meningkatkan Derajat Kesehatan Keluarga</strong>: Meningkatkan derajat kesehatan keluarga, kelestarian lingkungan hidup, dan perencanaan sehat melalui pola hidup sehat dan pencegahan penyakit.</li><li><strong>Menguatkan Kelembagaan PKK</strong>: Meningkatkan pengelolaan gerakan PKK dengan memperkuat kelembagaan dan meningkatkan kemitraan dengan berbagai pihak, baik pemerintah maupun non-pemerintah.</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // Tujuan section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "tujuan",
            "title" => "Tujuan",
            "order" => 30,
            "active" => 1,
            "content" => '<h3><strong>Jangka Pendek</strong></h3><ul><li>Meningkatkan kapasitas kader PKK</li><li>Meningkatkan keterampilan keluarga dalam pengolahan pangan lokal</li><li>Meningkatkan pemahaman masyarakat tentang kesehatan keluarga</li><li>Mengembangkan program usaha ekonomi produktif</li></ul><h3><strong>Jangka Menengah</strong></h3><ul><li>Terwujudnya peningkatan kualitas pendidikan keluarga</li><li>Berkembangnya koperasi dan UMKM binaan PKK</li><li>Terwujudnya pola hidup bersih dan sehat di keluarga</li><li>Meningkatnya partisipasi perempuan dalam pembangunan</li></ul><h3><strong>Jangka Panjang</strong></h3><ul><li>Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa</li><li>Terwujudnya keluarga yang sehat, sejahtera, maju dan mandiri</li><li>Terwujudnya kesetaraan dan keadilan gender dalam keluarga</li><li>Terwujudnya kesadaran hukum dan lingkungan hidup dalam keluarga</li><li>Terwujudnya keluarga sebagai pilar ketahanan bangsa</li></ul>',
            "content_data" => json_encode([]),
        ]);

        // Isu Strategis section
        PageSection::create([
            "page_slug" => "visi-misi",
            "section_key" => "isu-strategis",
            "title" => "Isu Strategis",
            "order" => 40,
            "active" => 1,
            "content" => '<div><h4><strong>Pemberdayaan Masyarakat</strong></h4><p>Meningkatkan keberdayaan masyarakat dalam berbagai aspek kehidupan, baik sosial, ekonomi, maupun budaya. Masyarakat menjadi subjek pembangunan yang aktif dan mampu mengidentifikasi masalah serta mencari solusi secara mandiri.</p></div><div><h4><strong>Penguatan Ekonomi Keluarga</strong></h4><p>Meningkatkan kapasitas ekonomi keluarga melalui pengembangan kewirausahaan, pembentukan dan penguatan koperasi, serta pengembangan industri rumah tangga. Ekonomi keluarga yang kuat akan menjadi fondasi kesejahteraan masyarakat.</p></div><div><h4><strong>Kesehatan Keluarga</strong></h4><p>Meningkatkan kesadaran dan kemampuan keluarga dalam menerapkan pola hidup bersih dan sehat, pemenuhan gizi keluarga, serta akses terhadap pelayanan kesehatan. Keluarga sehat adalah modal dasar pembangunan SDM berkualitas.</p></div>',
            "content_data" => json_encode([]),
        ]);

        // Pokja Sekretariat - Visi & Misi Asta Cita
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "visi-misi-asta",
            "title" => "Visi & Misi Asta Cita",
            "order" => 1,
            "active" => 1,
            "content" => '<h2>Visi</h2><p>Bersama Indonesia maju Indonesia Emas 2045</p><h2>8 Misi Asta Cita</h2><ol><li>Memperkokoh Ideologi Pancasila, Demokrasi dan Hak Asasi Manusia (HAM)</li><li>Memantapkan Sistem pertahanan keamanan Negara dan mendorong kemandirian bangsa melalui swasembada pangan dan energi, air, ekonomi kreatif, ekonomi hijau dan ekonomi biru</li><li>Meningkatkan lapangan kerja yang berkualitas, mendorong kewirausahaan, mengembangkan industri industri kreatif, dan melanjutkan pengembangan infrastruktur</li><li>Memperkuat pembangunan Sumber Daya Manusia (SDM), Sains, Teknologi, Pendidikan, Kesehatan, Prestasi Olahraga, Kesetaraan Gender serta Penguatan Peran Perempuan, Pemuda dan Penyandang Disabilitas</li><li>Melanjutkan Hilirisasi dan Industrilisasi untuk meningkatkan nilai tambah di Dalam Negeri</li><li>Membangun dari desa dan dari bawah untuk pemerataan ekonomi dan pemberantasan kemiskinan</li><li>Memperkuat reformasi politik, hukum, dan birokrasi serta memperkuat pencegahan dan pemberantasan Korupsi dan Narkoba</li><li>Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam, dan budaya, serta peningkatan toleransi antar umat beragama untuk mencapai masyarakat yang adil dan makmur</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // 8 Program Hasil Terbaik Cepat
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "8-program-terbaik",
            "title" => "8 Program Hasil Terbaik Cepat",
            "order" => 2,
            "active" => 1,
            "content" => '<ol><li>Memberi makan siang dan susu gratis di sekolah dan pesantren, serta bantuan gizi untuk anak balita dan ibu hamil</li><li>Menyelenggarakan pemeriksaan gratis, menuntaskan kasus TBC, dan membangun Rumah Sakit lengkap berkualitas di Kabupaten</li><li>Membangun sekolah-sekolah unggul terintegrasi di setiap kabupaten, dan memperbaiki sekolah-sekolah yang perlu renovasi</li><li>Mencetak dan Meningkatkan Produktivitas Lahan Pertanian Dengan Lumbung Pangan Desa, Daerah Dan Nasional</li><li>Melanjutkan dan menambahkan program kartu-kartu kesejahteraan sosial serta kartu usaha untuk menghilangkan kemiskinan absolut</li><li>Menaikkan gaji ASN (terutama guru, dosen, dan tenaga kesehatan), TNl/POLRI, dan pejabat negara</li><li>Melanjutkan Pembangunan infrastruktur desa, Bantuan Langsung Tunai (BLT), dan menyediakan rumah murah bersanitasi baik untuk yang membutuhkan</li><li>Mendirikan Badan Penerimaan Negara dan meningkatkan rasio penerimaan negara terhadap produk domestik bruto (PDB) ke 23%</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // RAKORNAS PKK
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "rakornas",
            "title" => "RAKORNAS PKK",
            "order" => 3,
            "active" => 1,
            "content" => '<h2>Strategi PKK dalam Aksi Nyata melalui Persiapan Rakernas X PKK yang Berkualitas untuk Mendukung RPJMN 2024-2029</h2><h3>Berdasarkan Perpres No 99/2017 dan Permendagri No 36/2020:</h3><p>Terdapat 3 dokumen yang perlu dibahas, disepakati dan ditetapkan melalui Rakernas PKK:</p><ol><li>Rencana Induk Gerakan PKK</li><li>Strategi Gerakan PKK</li><li>Juknis Tata Kelola Kelembagaan Gerakan PKK</li></ol><h3>Prinsip Penyusunan mengacu:</h3><p>Pasal 32, ayat 2, Pernendagri 36/2020</p><p>RPJMN 2024-2029 – Visi dan Misi yg tercantum dlm Rencana Induk Gerakan PKK 2025 - 2030, juga mengacu Visi dan Misi dari RPJMN 2024-2029</p><h3>9 RUMUSAN HASIL PLENO RAKORNAS PKK TAHUN 2024</h3><ol><li>Tata Kelola Gerakan PKK (Kelembagaan dan Administrasi) disempurnakan melalui revisi PERMENDAGRI 36 Tahun 2020 dan memperhatikan Permendagri 13 Tahun 2024 tentang POSYANDU</li><li>TP PKK Provinsi memasukkan saran dan masukan untuk RAKERNAS X sesuai draft Rakernas X dalam pleno sekretaris maksimal 31 Desember 2024</li><li>Pertemuan secara daring/luring terkait strategi gerakan PKK secara TEMATIK dengan melibatkan pihak terkait secara regular</li><li>Publikasi dan media social diaktifkan, saling mengikuti dan mendukung untuk mengangkat Gerakan PKK dari setiap tingkatan</li><li>Pengorganisasian dengan penyederhanaan penginputan data hingga ke desa dengan menetapkan PAPAN DATA yang disempurnakan pada RAKERNAS X</li><li>Mencari nomenklatur untuk penginputan data secara digital</li><li>Pembinaan kader melalui MONEV perlu perubahan indicator dalam hal penilaian</li><li>Penguatan perencanaan dan penganggaran Gerakan PKK mulai Provinsi sampai dengan Kelompok PKK di setiap RT RW di tahun 2025</li><li>Data PKK dikembangkan & diseragamkan dalam bentuk format/aplikasi yang disampaikan ke pusat sehingga menjadi database hingga ke tingkat nasional</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // Peran Pokja dalam mendukung Asta Cita
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "peran-pokja",
            "title" => "Peran Pokja dalam mendukung Asta Cita",
            "order" => 4,
            "active" => 1,
            "content" => '<ol><li><h4>Memperkokoh Ideologi Pancasila, Demokrasi, dan Hak Asasi Manusia</h4></li><li><h4>Memperkuat pembangunan SDM, Sains, Teknologi, Pendidikan</h4></li><li><h4>Memperkuat Reformasi Politik, Hukum, dan Birokrasi</h4></li><li><h4>Memperkuat penyelarasan kehidupan harmonis</h4></li></ol><blockquote>"Gerakan PKK yang dilaksanakan melalui 10 (sepuluh) Program Pokok PKK, dilakukan pembinaan, pemantauan, dan evaluasi secara berjenjang dari level desa, daerah, provinsi, hingga nasional"</blockquote><blockquote>"Gerakan PKK dilaksanakan melalui 10 (sepuluh) program pokok pemberdayaan dan Kesejahteraan Keluarga telah selaras dengan arah pembangunan RPJPD Jawa Timur Tahun 2025-2045 utamanya dalam Transformasi Sosial, Transformasi Ekonomi, dan Transformasi Budaya dan Ekologi"</blockquote>',
            "content_data" => json_encode([]),
        ]);

        // Fokus Transformasi
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "transformasi",
            "title" => "Fokus Transformasi",
            "order" => 5,
            "active" => 1,
            "content" => '<h3>Transformasi Sosial</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Pendampingan keluarga dengan Pemberian Makanan Tambahan (PMT)</li><li>Gerakan Amalkan dan Kukuhkan Halaman Asri, Teratur, Indah, dan Nyaman</li><li>Mendorong pengembangan rumah sehat layak huni</li><li>Kampanye program diversifikasi pangan dan pemanfaatan pangan lokal sebagai upaya mengurangi angka stunting</li><li>Peningkatan pengelolaan pada Pos Pelayanan Terpadu (Posyandu) di tingkat Desa/Kelurahan</li><li>Peningkatan peranserta masyarakat untuk mengembangkan kegiatan kesehatan dasar keluarga dan KB</li></ol><h3>Transformasi Ekonomi</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Peningkatan perekonomian berbasis keluarga sebagai upaya untuk meningkatkan pendapatan keluarga seperti kewirausahaan rumahtangga</li><li>Mendorong dan mengembangkan gerakan perkoperasian</li><li>Mendayagunakan lahan/pekarangan dengan tanaman produktif dan bernilai ekonomi tinggi</li></ol><h3>Ketahanan Sosial Budaya dan Ekologi</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Peningkatan kualitas keluarga sejahtera dan harmonis, keluarga bersih narkoba, keluarga anti trafficking, dan keluarga yang melindungi anak dari kekerasan seksual</li><li>Mendorong pengembangan tata laksana rumahtangga</li><li>Pembudayaan norma keluarga kecil bahagia sejahtera (NKKBS)</li><li>Peningkatan peran serta masyarakat dalam mewujudkan keluarga yang tanggap dan tangguh bencana</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // Rencana Program TP-PKK Provinsi Jatim Tahun 2025
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "program-provinsi",
            "title" => "Rencana Program TP-PKK Provinsi Jatim Tahun 2025",
            "order" => 6,
            "active" => 1,
            "content" => '<h3>Bidang Umum</h3><ul><li>Pelantikan Ketua TP. PKK Periode Tahun 2025 – 2029</li><li>Pengembangan APLIKASI E – PKK</li><li>Puncak Acara Peringatan HKG-PKK KE-52 Di Surabaya(Triwulan I)</li><li>Kader Prestasi TP PKK Kabupaten/Kota</li><li>Rakerda TP. PKK Prov. Jawa Timur Tahun 2025</li></ul><h3>POKJA 1</h3><p>Paredi pola asuh anak di Era Digital:</p><ol><li>KISAH (Keluarga Indonesia Sejahtera Harmonis): CEPAK, CATIN, LANSIAP, JUPITER</li><li>Keluarga Indonesia Sehat Tanpa Narkoba (KRISAN)</li><li>KISAK (Keluarga Indonesia Sadar Administrasi Kependudukan)</li><li>KILAS (Keluarga Indonesia Lindungan Anak dari Kekerasan SEksual)</li><li>PKBN (Pembinaan Kesadaran Bela Negara): PKK SIP, PKK HADIR (dibuat dengan nama yang lain), Keluarga Sadar Hukum (Kadarkum)</li><li>KIAT (Keluarga Indonesia Anti Trafficking)</li></ol><h3>POKJA 2</h3><ol><li>Gelar Pelangi</li><li>Program Kerja Pembentukan dan Pengembangan Koperasi PKK</li><li>Program Kerja Pengembangan Usaha Peningkatan Pendapatan Keluarga (UP2K PKK) melalui Toko PKK</li><li>Program Kerja Penguatan Ekonomi Keluarga melalui Pemanfaatan Potensi Sumber Daya Yang Dimiliki (KAMPUNG MANDIRI)</li><li>Program Kerja Peningkatan Kualitas Pendidikan dan Keterampilan Keluarga (RUMAH DILAN)</li><li>Program Kerja Gerakan Gemar Membaca</li></ol><h3>POKJA 3</h3><ol><li><h4>Optimalisasi Penguatan Ketahanan Pangan Keluarga Provinsi JawaTimur bagi Tim Penggerak PKK Kabupaten/Kota se Jawa Timur:</h4><ul><li>AKU HATINYA PKK pada lahan pekarangan sempit</li><li>Stop Boros Pangan</li><li>Pangan B2SA dengan bahan lokal</li></ul></li><li><h4>Pengembangan Rumah Sehat Layak Huni dengan pemanfaatan Teknologi Tepat Guna bagi Tim Penggerak PKK Kabupaten/Kota se Jawa Timur:</h4><ul><li>Rumah Sehat Layak Huni</li><li>Pencahayaan Rumah dengan memanfaatkan Sinar Matahari</li><li>Biogas dari sampah dan kotoran ternak sebagai Bahan Bakar Alternatif</li></ul></li></ol><h3>POKJA 4</h3><h4>KESEHATAN</h4><ol><li>Menggerakkan Keluarga dalam perilaku hidup bersih dan sehat</li><li>Pembinaan peran serta masyarakat dalam upaya penurunan angka kematian ibu, bayi dan balita</li><li>Pembinaan Keluarga yang sadar gizi</li><li>Mendukung program pencegahan dan deteksi dini kanker pada perempuan</li><li>Pembinaan Keluarga dalam pelaksanaan imunisasi dan pencegahan penyakit menular maupun tidak menular</li><li>Serta Asuhan Mandiri dalam keluarga</li></ol><h4>LINGKUNGAN</h4><ol><li>Pembinaan Keluarga dalam memelihara dan menjaga lingkungan bersih dan sehat</li><li>Melestarikan Lingkungan Hidup</li></ol><h4>PERENCANAAN SEHAT</h4><ol><li>Pembinaan Keluarga dalam meningkatkan Keluarga Berencana menuju Keluarga Berkualitas</li><li>Melakukan perencanaan keuangan yang baik untuk kehidupan keluarga sehat</li></ol>',
            "content_data" => json_encode([]),
        ]);

        // Rencana Program TP-PKK Kabupaten Th. 2025
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "program-kabupaten",
            "title" => "Rencana Program TP-PKK Kabupaten Th. 2025",
            "order" => 7,
            "active" => 1,
            "content" => '<h3>BIDANG UMUM</h3><ul><li>Pelantikan Ketua TP. PKK Periode Tahun 2025 – 2029</li><li>Pengembangan APLIKASI E – PKK</li><li>Puncak Acara Peringatan HKG-PKK KE-52 di Bangkalan</li><li>Pembinaan 10 Program Pokok PKK</li><li>Rapat Koordinasi TP.PKK Kabupaten dan TP. PKK Kecamatan</li><li>Rapat Koordinasi TP.PKK Kabupaten dengan OPD terkait</li></ul><h3>POKJA 1</h3><h4>CEPAK</h4><ul><li>Cegah Pernikahan Anak/Dini</li><li>Bimbingan Pranikah</li></ul><h4>PAAREDI (Pola Anak-anak dan Remaja di Era Digital)</h4><ul><li>Keluarga Indonesia Sehat Tanpa Narkoba (KISAN)</li><li>Keluarga Indonesia Sadar Administrasi Kependudukan (KISAK)</li><li>Keluarga Indonesia Lindungi Anak dari Kekerasan Seksual (KILAS)</li><li>Pembinaan Kesadaran Bela Negara (PKBN)</li><li>Keluarga Indonesia Anti Trafficking (KIAT)</li></ul><h4>GOTONG ROYONG</h4><ul><li>Peningkatan kesadaran keluarga dalam membangun kerjasama antar keluarga</li><li>Menambahkan sikap kesetiakawanan sosial</li><li>Partisipasi dalam kegiatan bakti sosial di masyarakat</li><li>Pengajian mohon dihidupkan kembali</li></ul>',
            "content_data" => json_encode([]),
        ]);

        // Kesimpulan
        PageSection::create([
            "page_slug" => "pokja-sekretariat",
            "section_key" => "kesimpulan",
            "title" => "Kesimpulan",
            "order" => 8,
            "active" => 1,
            "content" => '<h2>Implementasi Program Kerja</h2><p>Seluruh program kerja yang direncanakan akan diimplementasikan dengan koordinasi yang baik antara TP-PKK Kabupaten Bangkalan, Pokja-Pokja, dan mitra kerja terkait untuk mewujudkan keluarga yang sehat, sejahtera, dan mandiri.</p><h3>Monitoring & Evaluasi</h3><p>Pelaksanaan program akan dipantau secara berkala melalui mekanisme monitoring dan evaluasi yang sistematis untuk memastikan pencapaian target yang ditetapkan.</p><h3>Pelaporan Kegiatan</h3><p>Setiap kegiatan yang dilaksanakan akan didokumentasikan dan dilaporkan secara transparan sebagai bentuk akuntabilitas pelaksanaan program.</p><h3>Pengembangan Kapasitas</h3><p>Peningkatan kapasitas kader PKK akan terus dilakukan untuk memastikan implementasi program yang efektif dan berkelanjutan.</p>',
            "content_data" => json_encode([]),
        ]);
    }
}
