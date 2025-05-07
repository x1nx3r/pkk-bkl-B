<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        // Get admin user or create one if none
        $admin = User::where("email", "admin@example.com")->first();
        if (!$admin) {
            $admin = User::create([
                "name" => "Admin",
                "email" => "admin@example.com",
                "password" => bcrypt("password"),
                "email_verified_at" => now(),
            ]);
            $this->command->info("Created admin user for berita creation");
        }

        // Sample berita content
        $beritaData = [
            [
                "judul" =>
                    "Pelatihan Keterampilan Menjahit untuk Ibu-Ibu PKK Kecamatan Bangkalan",
                "status" => "published",
                "created_at" => Carbon::now()->subDays(2),
                "konten" => '<p>PKK Kabupaten Bangkalan mengadakan pelatihan keterampilan menjahit bagi para anggota PKK di Kecamatan Bangkalan. Pelatihan ini adalah bagian dari program pemberdayaan ekonomi keluarga.</p>

                <p>Kegiatan yang diadakan selama tiga hari dari tanggal 5-7 Agustus 2023 ini diikuti oleh 30 peserta dari 10 desa di Kecamatan Bangkalan. Materi pelatihan meliputi dasar-dasar menjahit, pembuatan pola, hingga teknik finishing.</p>

                <p>"Kami berharap dengan pelatihan ini, para ibu bisa memiliki keterampilan tambahan yang bisa digunakan untuk menambah penghasilan keluarga," ujar Ibu Hj. Siti Aminah, Ketua TP-PKK Kabupaten Bangkalan dalam sambutannya.</p>

                <p>Di akhir pelatihan, peserta berhasil membuat berbagai produk seperti masker kain, tas belanja, dan celemek yang bernilai ekonomis.</p>',
            ],
            [
                "judul" => "Sosialisasi Pencegahan Stunting di Desa Burneh",
                "status" => "published",
                "created_at" => Carbon::now()->subDays(5),
                "konten" => '<p>Tim Penggerak PKK Kabupaten Bangkalan bekerja sama dengan Dinas Kesehatan mengadakan sosialisasi pencegahan stunting di Desa Burneh pada Minggu, 10 Juli 2023.</p>

                <p>Stunting masih menjadi masalah kesehatan yang serius di Kabupaten Bangkalan. Data menunjukkan bahwa angka stunting di kabupaten ini mencapai 26,3% pada tahun 2022, di atas rata-rata nasional.</p>

                <p>"Pencegahan stunting harus dimulai sejak masa kehamilan. Ibu hamil perlu mendapatkan nutrisi yang cukup dan pemeriksaan kehamilan yang teratur," jelas dr. Fatimah, narasumber dari Dinas Kesehatan.</p>

                <p>Kegiatan sosialisasi ini dihadiri oleh ibu-ibu rumah tangga, kader posyandu, dan perangkat desa. Selain penyampaian materi, juga dilakukan pemeriksaan kesehatan gratis dan pembagian makanan tambahan untuk balita.</p>',
            ],
            [
                "judul" =>
                    "PKK Bangkalan Raih Juara II Lomba Administrasi PKK Tingkat Provinsi",
                "status" => "published",
                "created_at" => Carbon::now()->subDays(7),
                "konten" => '<p>Tim Penggerak PKK Kabupaten Bangkalan berhasil meraih Juara II dalam Lomba Administrasi PKK Tingkat Provinsi Jawa Timur tahun 2023. Pengumuman pemenang dilakukan pada acara puncak peringatan Hari Keluarga Nasional di Surabaya, Kamis (15/06/2023).</p>

                <p>Prestasi ini merupakan buah dari kerja keras dan koordinasi yang baik antara TP-PKK Kabupaten dengan TP-PKK Kecamatan dan Desa dalam pengelolaan administrasi.</p>

                <p>"Kami sangat bersyukur dan bangga atas pencapaian ini. Ini adalah hasil kerja keras seluruh kader PKK dari tingkat kabupaten hingga desa," ungkap Ketua TP-PKK Kabupaten Bangkalan.</p>

                <p>Lomba Administrasi PKK ini menilai kelengkapan dan kerapian administrasi 10 program pokok PKK, termasuk dokumentasi kegiatan, buku kas, dan pelaporan berkala.</p>

                <p>Dengan pencapaian ini, PKK Kabupaten Bangkalan mendapatkan hadiah berupa dana pembinaan sebesar Rp 15 juta yang akan digunakan untuk pengembangan program PKK di kabupaten.</p>',
            ],
            [
                "judul" =>
                    "Workshop Pengolahan Sampah Plastik Menjadi Kerajinan Bernilai Ekonomi",
                "status" => "published",
                "created_at" => Carbon::now()->subDays(10),
                "konten" => '<p>TP-PKK Kabupaten Bangkalan mengadakan workshop pengolahan sampah plastik menjadi kerajinan bernilai ekonomi pada Sabtu, 3 Juni 2023 bertempat di Aula Kantor PKK Kabupaten Bangkalan.</p>

                <p>Workshop ini diikuti oleh 50 kader PKK dari seluruh kecamatan di Bangkalan. Para peserta diajarkan cara mendaur ulang kantong plastik bekas menjadi berbagai produk kerajinan seperti tas, dompet, dan hiasan rumah.</p>

                <p>"Sampah plastik adalah masalah lingkungan yang serius. Melalui workshop ini, kami ingin mengajak masyarakat untuk mengurangi sampah plastik sekaligus menciptakan peluang ekonomi," kata Ibu Rina, koordinator Pokja III PKK Kabupaten Bangkalan yang membidangi lingkungan hidup.</p>

                <p>Narasumber workshop, Ibu Endang dari Bank Sampah Berseri, menjelaskan berbagai teknik pengolahan sampah plastik mulai dari pembersihan, pengolahan, hingga finishing produk. Beliau juga berbagi tips pemasaran produk daur ulang.</p>

                <p>Di akhir acara, peserta membawa pulang hasil karyanya dan berkomitmen untuk menularkan pengetahuan ini ke lingkungan masing-masing.</p>',
            ],
            [
                "judul" =>
                    "Peringatan Hari Kesehatan Nasional: PKK Bangkalan Adakan Pemeriksaan Kesehatan Gratis",
                "status" => "published",
                "created_at" => Carbon::now()->subDays(15),
                "konten" => '<p>Dalam rangka memperingati Hari Kesehatan Nasional yang jatuh pada tanggal 12 November, TP-PKK Kabupaten Bangkalan bekerja sama dengan Dinas Kesehatan mengadakan pemeriksaan kesehatan gratis untuk masyarakat.</p>

                                <p>Kegiatan yang diadakan di Alun-alun Bangkalan pada Minggu, 12 November 2023 ini menyediakan berbagai layanan pemeriksaan seperti tekanan darah, gula darah, kolesterol, asam urat, serta konsultasi kesehatan.</p>

                                <p>"Kesehatan adalah investasi berharga bagi keluarga. Melalui kegiatan ini, kami ingin meningkatkan kesadaran masyarakat akan pentingnya pemeriksaan kesehatan rutin," ujar Ketua TP-PKK Kabupaten Bangkalan.</p>

                                <p>Selain pemeriksaan kesehatan, juga diadakan senam bersama, penyuluhan gizi, dan demonstrasi pembuatan makanan sehat. Kegiatan ini dihadiri oleh sekitar 500 warga Bangkalan dari berbagai kalangan.</p>

                                <p>Dr. Ahmad dari Dinas Kesehatan menyampaikan apresiasi atas inisiatif PKK dalam mempromosikan gaya hidup sehat. "Kolaborasi seperti ini sangat efektif dalam meningkatkan derajat kesehatan masyarakat," katanya.</p>',
            ],
            [
                "judul" =>
                    "Pelatihan Budidaya Tanaman Obat Keluarga (TOGA) di Kecamatan Kamal",
                "status" => "draft",
                "created_at" => Carbon::now()->subDays(1),
                "konten" => '<p>TP-PKK Kabupaten Bangkalan mengadakan pelatihan budidaya Tanaman Obat Keluarga (TOGA) di Kecamatan Kamal pada Selasa, 22 Agustus 2023. Kegiatan ini merupakan implementasi dari Program Pokok PKK bidang kesehatan.</p>

                                <p>Pelatihan diikuti oleh 40 kader PKK dari 8 desa di Kecamatan Kamal. Materi pelatihan meliputi pengenalan jenis tanaman obat, teknik budidaya, serta cara pengolahan tanaman obat untuk penanganan penyakit ringan.</p>

                                <p>"TOGA memiliki banyak manfaat, selain untuk pengobatan tradisional, juga bisa menjadi pengisi lahan pekarangan yang produktif," jelas Ibu Sumiati, penyuluh pertanian yang menjadi narasumber.</p>

                                <p>Peserta mendapatkan bibit tanaman obat seperti jahe, kunyit, kencur, dan temulawak untuk ditanam di pekarangan rumah masing-masing. Selain itu, juga diberikan panduan tertulis tentang manfaat dan cara pengolahan tanaman obat.</p>

                                <p>Kepala Desa Kamal mengapresiasi kegiatan ini dan berharap warganya dapat memanfaatkan pekarangan rumah untuk budidaya TOGA.</p>',
            ],
        ];

        // Create berita
        foreach ($beritaData as $data) {
            // Create berita
            $berita = Berita::create([
                "judul" => $data["judul"],
                "slug" => Str::slug($data["judul"]),
                "konten" => $data["konten"],
                "status" => $data["status"],
                "user_id" => $admin->id,
                "created_at" => $data["created_at"],
                "updated_at" => $data["created_at"],
            ]);

            $this->command->info("Created berita: {$data["judul"]}");
        }

        $this->command->info("Berita seeded successfully!");
    }
}
