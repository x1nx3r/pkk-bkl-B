<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KegiatanSeeder extends Seeder
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
            $this->command->info("Created admin user for kegiatan creation");
        }

        // Sample kegiatan data
        $kegiatanData = [
            [
                "judul" => "Pelatihan Kader PKK Tentang Stunting",
                "lokasi" => "Aula Kantor PKK Kabupaten Bangkalan",
                "status" => "upcoming",
                "tanggal_mulai" => Carbon::now()
                    ->addDays(7)
                    ->setHour(9)
                    ->setMinute(0),
                "tanggal_selesai" => Carbon::now()
                    ->addDays(7)
                    ->setHour(15)
                    ->setMinute(0),
                "deskripsi" => '<p>PKK Kabupaten Bangkalan akan mengadakan pelatihan kader PKK tentang pencegahan dan penanganan stunting. Pelatihan ini bertujuan untuk meningkatkan pemahaman dan keterampilan kader dalam upaya pencegahan stunting.</p>

                <p>Materi yang akan disampaikan meliputi:</p>
                <ul>
                    <li>Pengenalan dan pemahaman tentang stunting</li>
                    <li>Faktor penyebab dan dampak stunting</li>
                    <li>Upaya pencegahan stunting melalui Program 1000 Hari Pertama Kehidupan</li>
                    <li>Pemantauan pertumbuhan dan perkembangan anak</li>
                    <li>Pendidikan gizi bagi ibu hamil dan balita</li>
                </ul>

                <p>Peserta diharapkan hadir tepat waktu dan membawa alat tulis. Konsumsi dan sertifikat akan disediakan oleh panitia.</p>',
            ],
            [
                "judul" => "Lomba Posyandu Tingkat Kabupaten",
                "lokasi" => "Balai Desa di 10 Kecamatan Kabupaten Bangkalan",
                "status" => "ongoing",
                "tanggal_mulai" => Carbon::now()->subDays(10),
                "tanggal_selesai" => Carbon::now()->addDays(20),
                "deskripsi" => '<p>Lomba Posyandu Tingkat Kabupaten Bangkalan sedang berlangsung. Kegiatan ini bertujuan untuk meningkatkan kualitas pelayanan Posyandu dan memotivasi kader Posyandu dalam menjalankan tugasnya.</p>

                <p>Beberapa kriteria penilaian meliputi:</p>
                <ul>
                    <li>Administrasi dan pencatatan Posyandu</li>
                    <li>Keterampilan kader dalam pengukuran antropometri</li>
                    <li>Kreativitas dalam melaksanakan program Posyandu</li>
                    <li>Kerjasama tim kader Posyandu</li>
                    <li>Partisipasi masyarakat dalam kegiatan Posyandu</li>
                    <li>Implementasi program unggulan Posyandu</li>
                </ul>

                <p>Tim juri akan mengunjungi setiap Posyandu peserta untuk melakukan penilaian. Pengumuman pemenang akan dilakukan pada tanggal 30 Oktober 2023 dalam acara peringatan Hari Kesehatan Nasional.</p>',
            ],
            [
                "judul" =>
                    "Sosialisasi Program UPPKS untuk Peningkatan Ekonomi Keluarga",
                "lokasi" => "Pendopo Kabupaten Bangkalan",
                "status" => "upcoming",
                "tanggal_mulai" => Carbon::now()
                    ->addDays(14)
                    ->setHour(9)
                    ->setMinute(0),
                "tanggal_selesai" => Carbon::now()
                    ->addDays(14)
                    ->setHour(12)
                    ->setMinute(0),
                "deskripsi" => '<p>TP-PKK Kabupaten Bangkalan bekerja sama dengan Dinas Koperasi dan UKM akan mengadakan sosialisasi program Usaha Peningkatan Pendapatan Keluarga Sejahtera (UPPKS). Program ini bertujuan untuk meningkatkan pendapatan keluarga melalui usaha ekonomi produktif.</p>

                <p>Sosialisasi ini akan membahas:</p>
                <ul>
                    <li>Pengenalan Program UPPKS dan manfaatnya</li>
                    <li>Pembentukan kelompok UPPKS</li>
                    <li>Pengelolaan keuangan usaha kecil</li>
                    <li>Pemasaran produk secara online dan offline</li>
                    <li>Informasi akses permodalan</li>
                    <li>Pendampingan usaha oleh Dinas terkait</li>
                </ul>

                <p>Kegiatan ini terbuka untuk umum, khususnya ibu-ibu yang berminat untuk mengembangkan usaha kecil. Pendaftaran dapat dilakukan melalui ketua PKK di tingkat kecamatan masing-masing.</p>',
            ],
            [
                "judul" => "Workshop Pengolahan Sampah Organik Menjadi Kompos",
                "lokasi" => "Taman Kota Bangkalan",
                "status" => "upcoming",
                "tanggal_mulai" => Carbon::now()
                    ->addDays(21)
                    ->setHour(8)
                    ->setMinute(0),
                "tanggal_selesai" => Carbon::now()
                    ->addDays(21)
                    ->setHour(12)
                    ->setMinute(0),
                "deskripsi" => '<p>Dalam rangka mendukung program Bangkalan Bersih dan Hijau, TP-PKK Kabupaten Bangkalan akan mengadakan workshop pengolahan sampah organik menjadi kompos. Kegiatan ini bertujuan untuk mengurangi volume sampah organik yang dibuang ke TPA dan mengolahnya menjadi pupuk kompos yang bermanfaat.</p>

                <p>Materi workshop meliputi:</p>
                <ul>
                    <li>Pengenalan jenis-jenis sampah organik</li>
                    <li>Metode pembuatan kompos secara sederhana</li>
                    <li>Pemanfaatan kompos untuk tanaman</li>
                    <li>Praktik langsung pembuatan kompos</li>
                    <li>Pembuatan pupuk cair dari sampah dapur</li>
                </ul>

                <p>Peserta akan mendapatkan starter kit pembuatan kompos yang bisa dibawa pulang. Diharapkan setelah mengikuti workshop ini, peserta dapat mempraktikkan pembuatan kompos di rumah masing-masing dan menularkan pengetahuan ini kepada tetangga dan keluarga.</p>',
            ],
            [
                "judul" => "Peringatan Hari Kartini: Lomba Masak Serba Ikan",
                "lokasi" => "Lapangan Bangkalan",
                "status" => "completed",
                "tanggal_mulai" => Carbon::now()
                    ->subMonths(6)
                    ->setHour(8)
                    ->setMinute(0),
                "tanggal_selesai" => Carbon::now()
                    ->subMonths(6)
                    ->setHour(15)
                    ->setMinute(0),
                "deskripsi" => '<p>TP-PKK Kabupaten Bangkalan telah sukses menyelenggarakan lomba masak serba ikan dalam rangka peringatan Hari Kartini. Kegiatan ini bertujuan untuk meningkatkan konsumsi ikan dan kreativitas dalam pengolahan ikan.</p>

                <p>Sebanyak 50 tim dari 18 kecamatan se-Kabupaten Bangkalan berpartisipasi dalam lomba ini. Setiap tim menampilkan kreasi masakan berbahan dasar ikan dengan tampilan yang menarik dan nilai gizi yang tinggi.</p>

                <p>Juri yang terdiri dari chef profesional dan ahli gizi memberikan penilaian berdasarkan kriteria rasa, penampilan, kreativitas, dan nilai gizi. Lomba berlangsung meriah dengan dukungan dari Dinas Perikanan dan Dinas Ketahanan Pangan.</p>

                <p>Pemenang lomba:</p>
                <ul>
                    <li>Juara I: Tim PKK Kecamatan Kamal dengan menu "Pindang Serani Khas Madura"</li>
                    <li>Juara II: Tim PKK Kecamatan Socah dengan menu "Pepes Ikan Tongkol Daun Kemangi"</li>
                    <li>Juara III: Tim PKK Kecamatan Bangkalan dengan menu "Ikan Bakar Bumbu Rujak"</li>
                </ul>

                <p>Resep-resep terbaik akan dikumpulkan dalam buku kumpulan resep yang akan didistribusikan ke seluruh kecamatan sebagai bahan edukasi gizi.</p>',
            ],
        ];

        // Create kegiatan
        foreach ($kegiatanData as $data) {
            $kegiatan = Kegiatan::create([
                "judul" => $data["judul"],
                "slug" => Str::slug($data["judul"]),
                "lokasi" => $data["lokasi"],
                "status" => $data["status"],
                "tanggal_mulai" => $data["tanggal_mulai"],
                "tanggal_selesai" => $data["tanggal_selesai"],
                "deskripsi" => $data["deskripsi"],
                "user_id" => $admin->id,
                "created_at" => $data["tanggal_mulai"]
                    ->copy()
                    ->subDays(rand(5, 15)),
                "updated_at" => $data["tanggal_mulai"]
                    ->copy()
                    ->subDays(rand(1, 4)),
            ]);

            $this->command->info("Created kegiatan: {$data["judul"]}");
        }

        $this->command->info("Kegiatan seeded successfully!");
    }
}
