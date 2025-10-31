/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.0.2-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: pkk_bkl_b
-- ------------------------------------------------------
-- Server version	12.0.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `beritas`
--

DROP TABLE IF EXISTS `beritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `beritas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `beritas_slug_unique` (`slug`),
  KEY `beritas_user_id_foreign` (`user_id`),
  CONSTRAINT `beritas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beritas`
--

LOCK TABLES `beritas` WRITE;
/*!40000 ALTER TABLE `beritas` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `beritas` (`id`, `judul`, `slug`, `konten`, `featured_image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES (1,'Pelatihan Keterampilan Menjahit untuk Ibu-Ibu PKK Kecamatan Bangkalan','pelatihan-keterampilan-menjahit-untuk-ibu-ibu-pkk-kecamatan-bangkalan','<p>PKK Kabupaten Bangkalan mengadakan pelatihan keterampilan menjahit bagi para anggota PKK di Kecamatan Bangkalan. Pelatihan ini adalah bagian dari program pemberdayaan ekonomi keluarga.</p>\n\n                <p>Kegiatan yang diadakan selama tiga hari dari tanggal 5-7 Agustus 2023 ini diikuti oleh 30 peserta dari 10 desa di Kecamatan Bangkalan. Materi pelatihan meliputi dasar-dasar menjahit, pembuatan pola, hingga teknik finishing.</p>\n\n                <p>\"Kami berharap dengan pelatihan ini, para ibu bisa memiliki keterampilan tambahan yang bisa digunakan untuk menambah penghasilan keluarga,\" ujar Ibu Hj. Siti Aminah, Ketua TP-PKK Kabupaten Bangkalan dalam sambutannya.</p>\n\n                <p>Di akhir pelatihan, peserta berhasil membuat berbagai produk seperti masker kain, tas belanja, dan celemek yang bernilai ekonomis.</p>',NULL,'published',1,'2025-10-27 15:30:27','2025-10-27 15:30:27'),
(2,'Sosialisasi Pencegahan Stunting di Desa Burneh','sosialisasi-pencegahan-stunting-di-desa-burneh','<p>Tim Penggerak PKK Kabupaten Bangkalan bekerja sama dengan Dinas Kesehatan mengadakan sosialisasi pencegahan stunting di Desa Burneh pada Minggu, 10 Juli 2023.</p>\n\n                <p>Stunting masih menjadi masalah kesehatan yang serius di Kabupaten Bangkalan. Data menunjukkan bahwa angka stunting di kabupaten ini mencapai 26,3% pada tahun 2022, di atas rata-rata nasional.</p>\n\n                <p>\"Pencegahan stunting harus dimulai sejak masa kehamilan. Ibu hamil perlu mendapatkan nutrisi yang cukup dan pemeriksaan kehamilan yang teratur,\" jelas dr. Fatimah, narasumber dari Dinas Kesehatan.</p>\n\n                <p>Kegiatan sosialisasi ini dihadiri oleh ibu-ibu rumah tangga, kader posyandu, dan perangkat desa. Selain penyampaian materi, juga dilakukan pemeriksaan kesehatan gratis dan pembagian makanan tambahan untuk balita.</p>',NULL,'published',1,'2025-10-24 15:30:27','2025-10-24 15:30:27'),
(3,'PKK Bangkalan Raih Juara II Lomba Administrasi PKK Tingkat Provinsi','pkk-bangkalan-raih-juara-ii-lomba-administrasi-pkk-tingkat-provinsi','<p>Tim Penggerak PKK Kabupaten Bangkalan berhasil meraih Juara II dalam Lomba Administrasi PKK Tingkat Provinsi Jawa Timur tahun 2023. Pengumuman pemenang dilakukan pada acara puncak peringatan Hari Keluarga Nasional di Surabaya, Kamis (15/06/2023).</p>\n\n                <p>Prestasi ini merupakan buah dari kerja keras dan koordinasi yang baik antara TP-PKK Kabupaten dengan TP-PKK Kecamatan dan Desa dalam pengelolaan administrasi.</p>\n\n                <p>\"Kami sangat bersyukur dan bangga atas pencapaian ini. Ini adalah hasil kerja keras seluruh kader PKK dari tingkat kabupaten hingga desa,\" ungkap Ketua TP-PKK Kabupaten Bangkalan.</p>\n\n                <p>Lomba Administrasi PKK ini menilai kelengkapan dan kerapian administrasi 10 program pokok PKK, termasuk dokumentasi kegiatan, buku kas, dan pelaporan berkala.</p>\n\n                <p>Dengan pencapaian ini, PKK Kabupaten Bangkalan mendapatkan hadiah berupa dana pembinaan sebesar Rp 15 juta yang akan digunakan untuk pengembangan program PKK di kabupaten.</p>',NULL,'published',1,'2025-10-22 15:30:27','2025-10-22 15:30:27'),
(4,'Workshop Pengolahan Sampah Plastik Menjadi Kerajinan Bernilai Ekonomi','workshop-pengolahan-sampah-plastik-menjadi-kerajinan-bernilai-ekonomi','<p>TP-PKK Kabupaten Bangkalan mengadakan workshop pengolahan sampah plastik menjadi kerajinan bernilai ekonomi pada Sabtu, 3 Juni 2023 bertempat di Aula Kantor PKK Kabupaten Bangkalan.</p>\n\n                <p>Workshop ini diikuti oleh 50 kader PKK dari seluruh kecamatan di Bangkalan. Para peserta diajarkan cara mendaur ulang kantong plastik bekas menjadi berbagai produk kerajinan seperti tas, dompet, dan hiasan rumah.</p>\n\n                <p>\"Sampah plastik adalah masalah lingkungan yang serius. Melalui workshop ini, kami ingin mengajak masyarakat untuk mengurangi sampah plastik sekaligus menciptakan peluang ekonomi,\" kata Ibu Rina, koordinator Pokja III PKK Kabupaten Bangkalan yang membidangi lingkungan hidup.</p>\n\n                <p>Narasumber workshop, Ibu Endang dari Bank Sampah Berseri, menjelaskan berbagai teknik pengolahan sampah plastik mulai dari pembersihan, pengolahan, hingga finishing produk. Beliau juga berbagi tips pemasaran produk daur ulang.</p>\n\n                <p>Di akhir acara, peserta membawa pulang hasil karyanya dan berkomitmen untuk menularkan pengetahuan ini ke lingkungan masing-masing.</p>',NULL,'published',1,'2025-10-19 15:30:27','2025-10-19 15:30:27'),
(5,'Peringatan Hari Kesehatan Nasional: PKK Bangkalan Adakan Pemeriksaan Kesehatan Gratis','peringatan-hari-kesehatan-nasional-pkk-bangkalan-adakan-pemeriksaan-kesehatan-gratis','<p>Dalam rangka memperingati Hari Kesehatan Nasional yang jatuh pada tanggal 12 November, TP-PKK Kabupaten Bangkalan bekerja sama dengan Dinas Kesehatan mengadakan pemeriksaan kesehatan gratis untuk masyarakat.</p>\n\n                                <p>Kegiatan yang diadakan di Alun-alun Bangkalan pada Minggu, 12 November 2023 ini menyediakan berbagai layanan pemeriksaan seperti tekanan darah, gula darah, kolesterol, asam urat, serta konsultasi kesehatan.</p>\n\n                                <p>\"Kesehatan adalah investasi berharga bagi keluarga. Melalui kegiatan ini, kami ingin meningkatkan kesadaran masyarakat akan pentingnya pemeriksaan kesehatan rutin,\" ujar Ketua TP-PKK Kabupaten Bangkalan.</p>\n\n                                <p>Selain pemeriksaan kesehatan, juga diadakan senam bersama, penyuluhan gizi, dan demonstrasi pembuatan makanan sehat. Kegiatan ini dihadiri oleh sekitar 500 warga Bangkalan dari berbagai kalangan.</p>\n\n                                <p>Dr. Ahmad dari Dinas Kesehatan menyampaikan apresiasi atas inisiatif PKK dalam mempromosikan gaya hidup sehat. \"Kolaborasi seperti ini sangat efektif dalam meningkatkan derajat kesehatan masyarakat,\" katanya.</p>',NULL,'published',1,'2025-10-14 15:30:27','2025-10-14 15:30:27'),
(6,'Pelatihan Budidaya Tanaman Obat Keluarga (TOGA) di Kecamatan Kamal','pelatihan-budidaya-tanaman-obat-keluarga-toga-di-kecamatan-kamal','<p>TP-PKK Kabupaten Bangkalan mengadakan pelatihan budidaya Tanaman Obat Keluarga (TOGA) di Kecamatan Kamal pada Selasa, 22 Agustus 2023. Kegiatan ini merupakan implementasi dari Program Pokok PKK bidang kesehatan.</p>\n\n                                <p>Pelatihan diikuti oleh 40 kader PKK dari 8 desa di Kecamatan Kamal. Materi pelatihan meliputi pengenalan jenis tanaman obat, teknik budidaya, serta cara pengolahan tanaman obat untuk penanganan penyakit ringan.</p>\n\n                                <p>\"TOGA memiliki banyak manfaat, selain untuk pengobatan tradisional, juga bisa menjadi pengisi lahan pekarangan yang produktif,\" jelas Ibu Sumiati, penyuluh pertanian yang menjadi narasumber.</p>\n\n                                <p>Peserta mendapatkan bibit tanaman obat seperti jahe, kunyit, kencur, dan temulawak untuk ditanam di pekarangan rumah masing-masing. Selain itu, juga diberikan panduan tertulis tentang manfaat dan cara pengolahan tanaman obat.</p>\n\n                                <p>Kepala Desa Kamal mengapresiasi kegiatan ini dan berharap warganya dapat memanfaatkan pekarangan rumah untuk budidaya TOGA.</p>',NULL,'draft',1,'2025-10-28 15:30:27','2025-10-28 15:30:27'),
(7,'gghgjhgjl','gghgjhgjl','<p>kjhkjgjhv</p>','berita/01K8WFFBP1XJBMTRXGK1NSHM0W.jpg','published',2,'2025-10-30 23:32:27','2025-10-30 23:32:27'),
(8,'Ini upload edit','ini-upload-edit','<p>lskjflaksafweelj</p>','berita/01K8WFWEFZJ203NPZFTHV5DG1N.jpg','published',2,'2025-10-30 23:39:36','2025-10-30 23:40:11');
/*!40000 ALTER TABLE `beritas` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES ('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0','i:1;',1761893913),
('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0:timer','i:1761893913;',1761893913),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3','i:1;',1761892381),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer','i:1761892381;',1761892381);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `kategori_beritas`
--

DROP TABLE IF EXISTS `kategori_beritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori_beritas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_beritas_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_beritas`
--

LOCK TABLES `kategori_beritas` WRITE;
/*!40000 ALTER TABLE `kategori_beritas` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `kategori_beritas` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `kegiatans`
--

DROP TABLE IF EXISTS `kegiatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `kegiatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('upcoming','ongoing','completed') NOT NULL DEFAULT 'upcoming',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kegiatans_slug_unique` (`slug`),
  KEY `kegiatans_user_id_foreign` (`user_id`),
  CONSTRAINT `kegiatans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatans`
--

LOCK TABLES `kegiatans` WRITE;
/*!40000 ALTER TABLE `kegiatans` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `kegiatans` (`id`, `judul`, `slug`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `lokasi`, `featured_image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES (1,'Pelatihan Kader PKK Tentang Stunting','pelatihan-kader-pkk-tentang-stunting','<p>PKK Kabupaten Bangkalan akan mengadakan pelatihan kader PKK tentang pencegahan dan penanganan stunting. Pelatihan ini bertujuan untuk meningkatkan pemahaman dan keterampilan kader dalam upaya pencegahan stunting.</p>\n\n                <p>Materi yang akan disampaikan meliputi:</p>\n                <ul>\n                    <li>Pengenalan dan pemahaman tentang stunting</li>\n                    <li>Faktor penyebab dan dampak stunting</li>\n                    <li>Upaya pencegahan stunting melalui Program 1000 Hari Pertama Kehidupan</li>\n                    <li>Pemantauan pertumbuhan dan perkembangan anak</li>\n                    <li>Pendidikan gizi bagi ibu hamil dan balita</li>\n                </ul>\n\n                <p>Peserta diharapkan hadir tepat waktu dan membawa alat tulis. Konsumsi dan sertifikat akan disediakan oleh panitia.</p>','2025-11-05 09:00:27','2025-11-05 15:00:27','Aula Kantor PKK Kabupaten Bangkalan',NULL,'upcoming',1,'2025-10-30 02:00:27','2025-11-02 02:00:27'),
(2,'Lomba Posyandu Tingkat Kabupaten','lomba-posyandu-tingkat-kabupaten','<p>Lomba Posyandu Tingkat Kabupaten Bangkalan sedang berlangsung. Kegiatan ini bertujuan untuk meningkatkan kualitas pelayanan Posyandu dan memotivasi kader Posyandu dalam menjalankan tugasnya.</p>\n\n                <p>Beberapa kriteria penilaian meliputi:</p>\n                <ul>\n                    <li>Administrasi dan pencatatan Posyandu</li>\n                    <li>Keterampilan kader dalam pengukuran antropometri</li>\n                    <li>Kreativitas dalam melaksanakan program Posyandu</li>\n                    <li>Kerjasama tim kader Posyandu</li>\n                    <li>Partisipasi masyarakat dalam kegiatan Posyandu</li>\n                    <li>Implementasi program unggulan Posyandu</li>\n                </ul>\n\n                <p>Tim juri akan mengunjungi setiap Posyandu peserta untuk melakukan penilaian. Pengumuman pemenang akan dilakukan pada tanggal 30 Oktober 2023 dalam acara peringatan Hari Kesehatan Nasional.</p>','2025-10-19 22:30:27','2025-11-18 22:30:27','Balai Desa di 10 Kecamatan Kabupaten Bangkalan',NULL,'ongoing',1,'2025-10-05 15:30:27','2025-10-17 15:30:27'),
(3,'Sosialisasi Program UPPKS untuk Peningkatan Ekonomi Keluarga','sosialisasi-program-uppks-untuk-peningkatan-ekonomi-keluarga','<p>TP-PKK Kabupaten Bangkalan bekerja sama dengan Dinas Koperasi dan UKM akan mengadakan sosialisasi program Usaha Peningkatan Pendapatan Keluarga Sejahtera (UPPKS). Program ini bertujuan untuk meningkatkan pendapatan keluarga melalui usaha ekonomi produktif.</p>\n\n                <p>Sosialisasi ini akan membahas:</p>\n                <ul>\n                    <li>Pengenalan Program UPPKS dan manfaatnya</li>\n                    <li>Pembentukan kelompok UPPKS</li>\n                    <li>Pengelolaan keuangan usaha kecil</li>\n                    <li>Pemasaran produk secara online dan offline</li>\n                    <li>Informasi akses permodalan</li>\n                    <li>Pendampingan usaha oleh Dinas terkait</li>\n                </ul>\n\n                <p>Kegiatan ini terbuka untuk umum, khususnya ibu-ibu yang berminat untuk mengembangkan usaha kecil. Pendaftaran dapat dilakukan melalui ketua PKK di tingkat kecamatan masing-masing.</p>','2025-11-12 09:00:27','2025-11-12 12:00:27','Pendopo Kabupaten Bangkalan',NULL,'upcoming',1,'2025-11-01 02:00:27','2025-11-11 02:00:27'),
(4,'Workshop Pengolahan Sampah Organik Menjadi Kompos','workshop-pengolahan-sampah-organik-menjadi-kompos','<p>Dalam rangka mendukung program Bangkalan Bersih dan Hijau, TP-PKK Kabupaten Bangkalan akan mengadakan workshop pengolahan sampah organik menjadi kompos. Kegiatan ini bertujuan untuk mengurangi volume sampah organik yang dibuang ke TPA dan mengolahnya menjadi pupuk kompos yang bermanfaat.</p>\n\n                <p>Materi workshop meliputi:</p>\n                <ul>\n                    <li>Pengenalan jenis-jenis sampah organik</li>\n                    <li>Metode pembuatan kompos secara sederhana</li>\n                    <li>Pemanfaatan kompos untuk tanaman</li>\n                    <li>Praktik langsung pembuatan kompos</li>\n                    <li>Pembuatan pupuk cair dari sampah dapur</li>\n                </ul>\n\n                <p>Peserta akan mendapatkan starter kit pembuatan kompos yang bisa dibawa pulang. Diharapkan setelah mengikuti workshop ini, peserta dapat mempraktikkan pembuatan kompos di rumah masing-masing dan menularkan pengetahuan ini kepada tetangga dan keluarga.</p>','2025-11-19 08:00:27','2025-11-19 12:00:27','Taman Kota Bangkalan',NULL,'upcoming',1,'2025-11-14 01:00:27','2025-11-16 01:00:27'),
(5,'Peringatan Hari Kartini: Lomba Masak Serba Ikan','peringatan-hari-kartini-lomba-masak-serba-ikan','<p>TP-PKK Kabupaten Bangkalan telah sukses menyelenggarakan lomba masak serba ikan dalam rangka peringatan Hari Kartini. Kegiatan ini bertujuan untuk meningkatkan konsumsi ikan dan kreativitas dalam pengolahan ikan.</p>\n\n                <p>Sebanyak 50 tim dari 18 kecamatan se-Kabupaten Bangkalan berpartisipasi dalam lomba ini. Setiap tim menampilkan kreasi masakan berbahan dasar ikan dengan tampilan yang menarik dan nilai gizi yang tinggi.</p>\n\n                <p>Juri yang terdiri dari chef profesional dan ahli gizi memberikan penilaian berdasarkan kriteria rasa, penampilan, kreativitas, dan nilai gizi. Lomba berlangsung meriah dengan dukungan dari Dinas Perikanan dan Dinas Ketahanan Pangan.</p>\n\n                <p>Pemenang lomba:</p>\n                <ul>\n                    <li>Juara I: Tim PKK Kecamatan Kamal dengan menu \"Pindang Serani Khas Madura\"</li>\n                    <li>Juara II: Tim PKK Kecamatan Socah dengan menu \"Pepes Ikan Tongkol Daun Kemangi\"</li>\n                    <li>Juara III: Tim PKK Kecamatan Bangkalan dengan menu \"Ikan Bakar Bumbu Rujak\"</li>\n                </ul>\n\n                <p>Resep-resep terbaik akan dikumpulkan dalam buku kumpulan resep yang akan didistribusikan ke seluruh kecamatan sebagai bahan edukasi gizi.</p>','2025-04-29 08:00:27','2025-04-29 15:00:27','Lapangan Bangkalan',NULL,'completed',1,'2025-04-14 01:00:27','2025-04-28 01:00:27'),
(6,'jkkjhkjh','jkkjhkjh','<p>admin@admin.comkljklj</p>','2025-10-31 00:00:00','2025-10-31 00:00:00','kljlkh;lkh','kegiatan/01K8WFJ5SMRC5VGYSE9BT4AE9A.jpg','upcoming',2,'2025-10-30 23:33:59','2025-10-30 23:38:14'),
(7,'Ini kegiatan edit','ini-kegiatan-edit','<p><strong>Ini kegiataOriginal: \"Pengamen sekarang ngeselin banget dah, tadi pagi bikin macet anjir di palmerah\"<br>Reply: \"Dasar anjing babi ngentot bikin macet aja tiap pagi, nyetir nggak pakai otak apa gimana sih?\"<br>Output: n</strong></p>','2025-11-04 11:11:00','2025-11-08 11:11:00','Ini kegiatan','kegiatan/01K8WFZAX99XRN8HFN3NY178H5.jpg','upcoming',2,'2025-10-30 23:41:11','2025-10-30 23:42:34'),
(8,'zdfsdfsdf','zdfsdfsdf','<p><strong>asdfsadfaklsjdflskdjfls;akdfjasdfsadfsdfadfCzxczxczxczxc</strong></p>','2025-11-01 11:01:00','2025-11-07 11:01:00','sdf','kegiatan/01K8WGYAW3TJPCRNFD2ED53KPR.jpg','upcoming',2,'2025-10-30 23:58:06','2025-10-30 23:58:33');
/*!40000 ALTER TABLE `kegiatans` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_05_04_144338_berita',1),
(5,'2025_05_04_144358_tag',1),
(6,'2025_05_04_151507_simplify_berita_structure',1),
(7,'2025_05_04_153908_create_kegiatans_table',1),
(8,'2025_05_07_192842_create_page_sections_table',1),
(9,'2025_09_22_191208_create_organization_structures_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `organization_structures`
--

DROP TABLE IF EXISTS `organization_structures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `organization_structures` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `section` varchar(255) NOT NULL,
  `subsection` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_structures`
--

LOCK TABLES `organization_structures` WRITE;
/*!40000 ALTER TABLE `organization_structures` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `organization_structures` (`id`, `name`, `position`, `photo`, `section`, `subsection`, `order`, `is_active`, `created_at`, `updated_at`) VALUES (1,'Dr. H. R. M. ARIEF M. EDIE, M.Si coba','Ketua Pembina TP. PKK','struktur/01K8WG86RG8V988KFMCHJREZYP.jpg','struktur_utama',NULL,1,1,'2025-10-29 15:30:27','2025-10-30 23:46:01'),
(2,'Asisten Pemerintahan & Kesra','Pembina TP. PKK','profiles/default.jpg','struktur_utama',NULL,2,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(3,'Ny. LUTFIANA LUKMAN HAKIM','Ketua TP. PKK Kabupaten','struktur/K.PKK.png','struktur_utama',NULL,3,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(4,'Ny. MUAYYANAH FAUSAN DJA\'FAR','Staf Ahli','struktur/Staff1.png','struktur_utama',NULL,4,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(5,'Ny. AZIZAH ISMET EFFENDI','Staf Ahli','struktur/Staff2.png','struktur_utama',NULL,5,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(6,'Ir. Hj. ISHAFIJATI SETIJA BUDHI, MM','Staf Ahli','struktur/Staff3.png','struktur_utama',NULL,6,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(7,'NUR ANNISA, SH., M.Si','Sekretaris','struktur/S1.png','struktur_utama',NULL,7,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(8,'Ny. Dra. POERWANTI SETIJANINGSIH','Sekretaris','struktur/S2.png','struktur_utama',NULL,8,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(9,'Ny. R. FENTI HASANAH','Sekretaris','struktur/S3.png','struktur_utama',NULL,9,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(10,'Ir. Hj. ELLY FARIDA FAUZI RUSLI','Bendahara','struktur/B1.png','struktur_utama',NULL,10,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(11,'Ny. BUDIYATI, SE','Bendahara','struktur/B2.png','struktur_utama',NULL,11,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(12,'KRISTINA WIDYA HANDINI EDI, SE','Bendahara','struktur/B3.png','struktur_utama',NULL,12,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(13,'Ny. SITI AISYAH GANI','Ketua','struktur/K.BPKK.png','bidang_1',NULL,1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(14,'Ny. Dra. Hj.RENIMAH BUDI UTOMO','Ketua','struktur/KP1.png','bidang_1','pokja_1',1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(15,'Ny. SITI ZAINAH, MPd.I','Wakil','struktur/WK1.png','bidang_1','pokja_1',2,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(16,'YENNI KUSUMA WIDIASTUTIK, SH','Sekretaris','struktur/SP1.png','bidang_1','pokja_1',3,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(17,'Bp. SAID, SHi','Anggota','struktur/AP1.png','bidang_1','pokja_1',4,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(18,'Ny. TUTIK HIDAYATI','Anggota','struktur/AP11.png','bidang_1','pokja_1',5,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(19,'Ny. Hj. RAHMAWATI ABD. RAHEM','Anggota','struktur/AP111.png','bidang_1','pokja_1',6,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(20,'Dra. Hj. NURHAYATI AFFANDY','Ketua','struktur/K.BPPEK.png','bidang_2',NULL,1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(21,'CHRISTIN YAKUB, SE, MM','Ketua','struktur/KP2.png','bidang_2','pokja_2',1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(22,'Ny. ENNY SUHARYANTI, S.Pd','Wakil','struktur/WK2.png','bidang_2','pokja_2',2,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(23,'Ny. SITI HOTIJAH, SM','Sekretaris','struktur/SP2.png','bidang_2','pokja_2',3,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(24,'Ny. Hj.MARIJATUL KIPTIYAH TAUFIQ, S.Pd','Anggota','struktur/AP2.png','bidang_2','pokja_2',4,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(25,'Ny. RINA ROIDATUL, SE','Anggota','struktur/AP22.png','bidang_2','pokja_2',5,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(26,'Bp. AGUNG PURWO NUGROHO, SS., S.Pd., M.Pd','Anggota','struktur/AP222.png','bidang_2','pokja_2',6,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(27,'Ny. HOIRIYAH','Anggota','struktur/AP2222.png','bidang_2','pokja_2',7,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(28,'Ny. Dra.SRI SUHARTINI ANDANG, MM','Ketua','struktur/K.BPKP.png','bidang_3',NULL,1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(29,'Ny. Hj. DINA DJAUHARI, SH','Ketua','struktur/KP3.png','bidang_3','pokja_3',1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(30,'Ny. Hj.SUPIYATUN','Wakil','struktur/WP3.png','bidang_3','pokja_3',2,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(31,'Ny. NURPENI  HIDAYATI  ARIEF, SH','Sekretaris','struktur/SP3.png','bidang_3','pokja_3',3,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(32,'Ny. NINIK ANGGRAINI, S. SE. MM','Anggota','struktur/AP3.png','bidang_3','pokja_3',4,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(33,'Ny. DEWI EGA OKTAVIANI','Anggota','struktur/AP33.png','bidang_3','pokja_3',5,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(34,'Ny. YULIANTINA','Anggota','struktur/AP333.png','bidang_3','pokja_3',6,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(35,'EMMY ROFIATOEN','Anggota','struktur/AP3333.png','bidang_3','pokja_3',7,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(36,'Ny. CICIK SUFATMAWATI, SE','Anggota','struktur/AP33333.png','bidang_3','pokja_3',8,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(37,'Ny. WIWIK SUDARWANTI, S. Sos','Anggota','struktur/AP333333.png','bidang_3','pokja_3',9,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(38,'Hj. BINTI SOLIKHAH, STp, MM','Ketua','struktur/K.BKKL.png','bidang_4',NULL,1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(39,'Ny. SITI FATIRAH SISWO, S.Pd','Ketua','struktur/KP4.png','bidang_4','pokja_4',1,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(40,'DESITA RAHMAD','Wakil','struktur/WK4.png','bidang_4','pokja_4',2,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(41,'Ny. ELIS AGUS RIYANTI, S.Kep','Sekretaris','struktur/SP4.png','bidang_4','pokja_4',3,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(42,'Ny. dr. WIWID MAYASARI','Anggota','struktur/AP4.png','bidang_4','pokja_4',4,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(43,'Ny. dr. SISKA AMALIA','Anggota','struktur/AP44.png','bidang_4','pokja_4',5,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(44,'NOER EKA HIDAYATI','Anggota','struktur/AP444.png','bidang_4','pokja_4',6,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(45,'Ny. NURUL HIDAYATI, SE','Anggota','struktur/AP4444.png','bidang_4','pokja_4',7,1,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(46,'Ny. TULSI HAYATI, SE. MM','Anggota','profiles/default.jpg','bidang_4','pokja_4',8,1,'2025-10-29 15:30:27','2025-10-29 15:30:27');
/*!40000 ALTER TABLE `organization_structures` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `page_sections`
--

DROP TABLE IF EXISTS `page_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_slug` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`content_data`)),
  `order` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page_sections_page_slug_section_key_index` (`page_slug`,`section_key`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_sections`
--

LOCK TABLES `page_sections` WRITE;
/*!40000 ALTER TABLE `page_sections` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `page_sections` (`id`, `page_slug`, `section_key`, `title`, `content`, `content_data`, `order`, `active`, `created_at`, `updated_at`) VALUES (1,'visi-misi','visi','Visi Edit','<p>\"Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.\" jhlhjjkhklj</p><ul><li><strong>Berakhlak Mulia dan Berbudi Luhur</strong>: Membentuk keluarga yang memiliki integritas moral tinggi, jujur, santun, dan menghormati nilai-nilai budaya dan adat istiadat. Budi pekerti luhur tercermin dalam sikap dan perilaku seluruh anggota keluarga dalam interaksi sosial kemasyarakatan.</li><li><strong>Sehat Sejahtera</strong>: Mewujudkan keluarga yang memiliki kondisi kesehatan fisik, mental, dan sosial yang optimal, serta memiliki akses terhadap pelayanan kesehatan yang berkualitas. Kesejahteraan keluarga mencakup terpenuhinya kebutuhan dasar, pendidikan, dan ekonomi.</li><li><strong>Maju dan Mandiri</strong>: Membentuk keluarga yang berpendidikan, produktif, dan memiliki daya saing dalam kehidupan bermasyarakat. Kemandirian mencakup kemampuan untuk memenuhi kebutuhan sendiri, mengambil keputusan, dan mengatasi masalah secara mandiri tanpa tergantung pada bantuan orang lain.</li><li><strong>Kesetaraan dan Keadilan Gender</strong>: Mewujudkan hubungan yang setara dan adil antara laki-laki dan perempuan dalam keluarga, di mana semua anggota keluarga memiliki hak, kewajiban, peluang, dan penghargaan yang sama. Kesetaraan gender memungkinkan partisipasi penuh seluruh anggota keluarga dalam pembangunan.</li><li><strong>Kesadaran Hukum dan Lingkungan</strong>: Membentuk keluarga yang taat hukum, menyadari hak dan kewajibannya sebagai warga negara, serta memiliki kepedulian terhadap kelestarian lingkungan hidup. Kesadaran hukum dan lingkungan akan menciptakan masyarakat yang tertib, aman, dan lestari.</li></ul>','[]',10,1,'2025-10-29 15:30:27','2025-10-30 23:53:39'),
(2,'visi-misi','misi','Misi Edit','<ol><li><strong>Meningkatkan Pembentukan Karakter Keluarga</strong>: Meningkatkan pembentukan karakter keluarga melalui penghayatan, pengamalan Pancasila, kegotong royongan serta kesetaraan dan keadilan gender.</li><li><strong>Meningkatkan Pendidikan dan Keterampilan</strong>: Meningkatkan pendidikan dan keterampilan anggota keluarga melalui program pendidikan formal, non-formal, dan informal yang berkesinambungan.</li><li><strong>Mengembangkan Ekonomi Keluarga</strong>: Meningkatkan pendapatan keluarga melalui pengembangan kewirausahaan, koperasi, dan usaha ekonomi produktif lainnya.</li><li><strong>Meningkatkan Ketahanan Keluarga</strong>: Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang, perumahan sehat dan layak huni, serta pemenuhan kebutuhan dasar lainnya.</li><li><strong>Meningkatkan Derajat Kesehatan Keluarga</strong>: Meningkatkan derajat kesehatan keluarga, kelestarian lingkungan hidup, dan perencanaan sehat melalui pola hidup sehat dan pencegahan penyakit.</li><li><strong>Menguatkan Kelembagaan PKK</strong>: Meningkatkan pengelolaan gerakan PKK dengan memperkuat kelembagaan dan meningkatkan kemitraan dengan berbagai pihak, baik pemerintah maupun non-pemerintah.</li></ol>','[]',20,1,'2025-10-29 15:30:27','2025-10-30 23:54:58'),
(3,'visi-misi','tujuan','Tujuan','<h3><strong>Jangka Pendek</strong></h3><ul><li>Meningkatkan kapasitas kader PKK</li><li>Meningkatkan keterampilan keluarga dalam pengolahan pangan lokal</li><li>Meningkatkan pemahaman masyarakat tentang kesehatan keluarga</li><li>Mengembangkan program usaha ekonomi produktif</li></ul><h3><strong>Jangka Menengah</strong></h3><ul><li>Terwujudnya peningkatan kualitas pendidikan keluarga</li><li>Berkembangnya koperasi dan UMKM binaan PKK</li><li>Terwujudnya pola hidup bersih dan sehat di keluarga</li><li>Meningkatnya partisipasi perempuan dalam pembangunan</li></ul><h3><strong>Jangka Panjang</strong></h3><ul><li>Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa</li><li>Terwujudnya keluarga yang sehat, sejahtera, maju dan mandiri</li><li>Terwujudnya kesetaraan dan keadilan gender dalam keluarga</li><li>Terwujudnya kesadaran hukum dan lingkungan hidup dalam keluarga</li><li>Terwujudnya keluarga sebagai pilar ketahanan bangsa</li></ul>','[]',30,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(4,'visi-misi','isu-strategis','Isu Strategis','<div><h4><strong>Pemberdayaan Masyarakat</strong></h4><p>Meningkatkan keberdayaan masyarakat dalam berbagai aspek kehidupan, baik sosial, ekonomi, maupun budaya. Masyarakat menjadi subjek pembangunan yang aktif dan mampu mengidentifikasi masalah serta mencari solusi secara mandiri.</p></div><div><h4><strong>Penguatan Ekonomi Keluarga</strong></h4><p>Meningkatkan kapasitas ekonomi keluarga melalui pengembangan kewirausahaan, pembentukan dan penguatan koperasi, serta pengembangan industri rumah tangga. Ekonomi keluarga yang kuat akan menjadi fondasi kesejahteraan masyarakat.</p></div><div><h4><strong>Kesehatan Keluarga</strong></h4><p>Meningkatkan kesadaran dan kemampuan keluarga dalam menerapkan pola hidup bersih dan sehat, pemenuhan gizi keluarga, serta akses terhadap pelayanan kesehatan. Keluarga sehat adalah modal dasar pembangunan SDM berkualitas.</p></div>','[]',40,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(5,'pokja-sekretariat','visi-misi-asta','Visi & Misi Asta Cita','<h2>Visi</h2><p>Bersama Indonesia maju Indonesia Emas 2045</p><h2>8 Misi Asta Cita</h2><ol><li>Memperkokoh Ideologi Pancasila, Demokrasi dan Hak Asasi Manusia (HAM)</li><li>Memantapkan Sistem pertahanan keamanan Negara dan mendorong kemandirian bangsa melalui swasembada pangan dan energi, air, ekonomi kreatif, ekonomi hijau dan ekonomi biru</li><li>Meningkatkan lapangan kerja yang berkualitas, mendorong kewirausahaan, mengembangkan industri industri kreatif, dan melanjutkan pengembangan infrastruktur</li><li>Memperkuat pembangunan Sumber Daya Manusia (SDM), Sains, Teknologi, Pendidikan, Kesehatan, Prestasi Olahraga, Kesetaraan Gender serta Penguatan Peran Perempuan, Pemuda dan Penyandang Disabilitas</li><li>Melanjutkan Hilirisasi dan Industrilisasi untuk meningkatkan nilai tambah di Dalam Negeri</li><li>Membangun dari desa dan dari bawah untuk pemerataan ekonomi dan pemberantasan kemiskinan</li><li>Memperkuat reformasi politik, hukum, dan birokrasi serta memperkuat pencegahan dan pemberantasan Korupsi dan Narkoba</li><li>Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam, dan budaya, serta peningkatan toleransi antar umat beragama untuk mencapai masyarakat yang adil dan makmur</li></ol>','[]',1,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(6,'pokja-sekretariat','8-program-terbaik','8 Program Hasil Terbaik Cepat','<ol><li>Memberi makan siang dan susu gratis di sekolah dan pesantren, serta bantuan gizi untuk anak balita dan ibu hamil</li><li>Menyelenggarakan pemeriksaan gratis, menuntaskan kasus TBC, dan membangun Rumah Sakit lengkap berkualitas di Kabupaten</li><li>Membangun sekolah-sekolah unggul terintegrasi di setiap kabupaten, dan memperbaiki sekolah-sekolah yang perlu renovasi</li><li>Mencetak dan Meningkatkan Produktivitas Lahan Pertanian Dengan Lumbung Pangan Desa, Daerah Dan Nasional</li><li>Melanjutkan dan menambahkan program kartu-kartu kesejahteraan sosial serta kartu usaha untuk menghilangkan kemiskinan absolut</li><li>Menaikkan gaji ASN (terutama guru, dosen, dan tenaga kesehatan), TNl/POLRI, dan pejabat negara</li><li>Melanjutkan Pembangunan infrastruktur desa, Bantuan Langsung Tunai (BLT), dan menyediakan rumah murah bersanitasi baik untuk yang membutuhkan</li><li>Mendirikan Badan Penerimaan Negara dan meningkatkan rasio penerimaan negara terhadap produk domestik bruto (PDB) ke 23%</li></ol>','[]',2,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(7,'pokja-sekretariat','rakornas','RAKORNAS PKK','<h2>Strategi PKK dalam Aksi Nyata melalui Persiapan Rakernas X PKK yang Berkualitas untuk Mendukung RPJMN 2024-2029</h2><h3>Berdasarkan Perpres No 99/2017 dan Permendagri No 36/2020:</h3><p>Terdapat 3 dokumen yang perlu dibahas, disepakati dan ditetapkan melalui Rakernas PKK:</p><ol><li>Rencana Induk Gerakan PKK</li><li>Strategi Gerakan PKK</li><li>Juknis Tata Kelola Kelembagaan Gerakan PKK</li></ol><h3>Prinsip Penyusunan mengacu:</h3><p>Pasal 32, ayat 2, Pernendagri 36/2020</p><p>RPJMN 2024-2029 – Visi dan Misi yg tercantum dlm Rencana Induk Gerakan PKK 2025 - 2030, juga mengacu Visi dan Misi dari RPJMN 2024-2029</p><h3>9 RUMUSAN HASIL PLENO RAKORNAS PKK TAHUN 2024</h3><ol><li>Tata Kelola Gerakan PKK (Kelembagaan dan Administrasi) disempurnakan melalui revisi PERMENDAGRI 36 Tahun 2020 dan memperhatikan Permendagri 13 Tahun 2024 tentang POSYANDU</li><li>TP PKK Provinsi memasukkan saran dan masukan untuk RAKERNAS X sesuai draft Rakernas X dalam pleno sekretaris maksimal 31 Desember 2024</li><li>Pertemuan secara daring/luring terkait strategi gerakan PKK secara TEMATIK dengan melibatkan pihak terkait secara regular</li><li>Publikasi dan media social diaktifkan, saling mengikuti dan mendukung untuk mengangkat Gerakan PKK dari setiap tingkatan</li><li>Pengorganisasian dengan penyederhanaan penginputan data hingga ke desa dengan menetapkan PAPAN DATA yang disempurnakan pada RAKERNAS X</li><li>Mencari nomenklatur untuk penginputan data secara digital</li><li>Pembinaan kader melalui MONEV perlu perubahan indicator dalam hal penilaian</li><li>Penguatan perencanaan dan penganggaran Gerakan PKK mulai Provinsi sampai dengan Kelompok PKK di setiap RT RW di tahun 2025</li><li>Data PKK dikembangkan & diseragamkan dalam bentuk format/aplikasi yang disampaikan ke pusat sehingga menjadi database hingga ke tingkat nasional</li></ol>','[]',3,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(8,'pokja-sekretariat','peran-pokja','Peran Pokja dalam mendukung Asta Cita','<ol><li><h4>Memperkokoh Ideologi Pancasila, Demokrasi, dan Hak Asasi Manusia</h4></li><li><h4>Memperkuat pembangunan SDM, Sains, Teknologi, Pendidikan</h4></li><li><h4>Memperkuat Reformasi Politik, Hukum, dan Birokrasi</h4></li><li><h4>Memperkuat penyelarasan kehidupan harmonis</h4></li></ol><blockquote>\"Gerakan PKK yang dilaksanakan melalui 10 (sepuluh) Program Pokok PKK, dilakukan pembinaan, pemantauan, dan evaluasi secara berjenjang dari level desa, daerah, provinsi, hingga nasional\"</blockquote><blockquote>\"Gerakan PKK dilaksanakan melalui 10 (sepuluh) program pokok pemberdayaan dan Kesejahteraan Keluarga telah selaras dengan arah pembangunan RPJPD Jawa Timur Tahun 2025-2045 utamanya dalam Transformasi Sosial, Transformasi Ekonomi, dan Transformasi Budaya dan Ekologi\"</blockquote>','[]',4,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(9,'pokja-sekretariat','transformasi','Fokus Transformasi','<h3>Transformasi Sosial</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Pendampingan keluarga dengan Pemberian Makanan Tambahan (PMT)</li><li>Gerakan Amalkan dan Kukuhkan Halaman Asri, Teratur, Indah, dan Nyaman</li><li>Mendorong pengembangan rumah sehat layak huni</li><li>Kampanye program diversifikasi pangan dan pemanfaatan pangan lokal sebagai upaya mengurangi angka stunting</li><li>Peningkatan pengelolaan pada Pos Pelayanan Terpadu (Posyandu) di tingkat Desa/Kelurahan</li><li>Peningkatan peranserta masyarakat untuk mengembangkan kegiatan kesehatan dasar keluarga dan KB</li></ol><h3>Transformasi Ekonomi</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Peningkatan perekonomian berbasis keluarga sebagai upaya untuk meningkatkan pendapatan keluarga seperti kewirausahaan rumahtangga</li><li>Mendorong dan mengembangkan gerakan perkoperasian</li><li>Mendayagunakan lahan/pekarangan dengan tanaman produktif dan bernilai ekonomi tinggi</li></ol><h3>Ketahanan Sosial Budaya dan Ekologi</h3><p>TP PKK dapat mendukung melalui:</p><ol><li>Peningkatan kualitas keluarga sejahtera dan harmonis, keluarga bersih narkoba, keluarga anti trafficking, dan keluarga yang melindungi anak dari kekerasan seksual</li><li>Mendorong pengembangan tata laksana rumahtangga</li><li>Pembudayaan norma keluarga kecil bahagia sejahtera (NKKBS)</li><li>Peningkatan peran serta masyarakat dalam mewujudkan keluarga yang tanggap dan tangguh bencana</li></ol>','[]',5,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(10,'pokja-sekretariat','program-provinsi','Rencana Program TP-PKK Provinsi Jatim Tahun 2025','<h3>Bidang Umum</h3><ul><li>Pelantikan Ketua TP. PKK Periode Tahun 2025 – 2029</li><li>Pengembangan APLIKASI E – PKK</li><li>Puncak Acara Peringatan HKG-PKK KE-52 Di Surabaya(Triwulan I)</li><li>Kader Prestasi TP PKK Kabupaten/Kota</li><li>Rakerda TP. PKK Prov. Jawa Timur Tahun 2025</li></ul><h3>POKJA 1</h3><p>Paredi pola asuh anak di Era Digital:</p><ol><li>KISAH (Keluarga Indonesia Sejahtera Harmonis): CEPAK, CATIN, LANSIAP, JUPITER</li><li>Keluarga Indonesia Sehat Tanpa Narkoba (KRISAN)</li><li>KISAK (Keluarga Indonesia Sadar Administrasi Kependudukan)</li><li>KILAS (Keluarga Indonesia Lindungan Anak dari Kekerasan SEksual)</li><li>PKBN (Pembinaan Kesadaran Bela Negara): PKK SIP, PKK HADIR (dibuat dengan nama yang lain), Keluarga Sadar Hukum (Kadarkum)</li><li>KIAT (Keluarga Indonesia Anti Trafficking)</li></ol><h3>POKJA 2</h3><ol><li>Gelar Pelangi</li><li>Program Kerja Pembentukan dan Pengembangan Koperasi PKK</li><li>Program Kerja Pengembangan Usaha Peningkatan Pendapatan Keluarga (UP2K PKK) melalui Toko PKK</li><li>Program Kerja Penguatan Ekonomi Keluarga melalui Pemanfaatan Potensi Sumber Daya Yang Dimiliki (KAMPUNG MANDIRI)</li><li>Program Kerja Peningkatan Kualitas Pendidikan dan Keterampilan Keluarga (RUMAH DILAN)</li><li>Program Kerja Gerakan Gemar Membaca</li></ol><h3>POKJA 3</h3><ol><li><h4>Optimalisasi Penguatan Ketahanan Pangan Keluarga Provinsi JawaTimur bagi Tim Penggerak PKK Kabupaten/Kota se Jawa Timur:</h4><ul><li>AKU HATINYA PKK pada lahan pekarangan sempit</li><li>Stop Boros Pangan</li><li>Pangan B2SA dengan bahan lokal</li></ul></li><li><h4>Pengembangan Rumah Sehat Layak Huni dengan pemanfaatan Teknologi Tepat Guna bagi Tim Penggerak PKK Kabupaten/Kota se Jawa Timur:</h4><ul><li>Rumah Sehat Layak Huni</li><li>Pencahayaan Rumah dengan memanfaatkan Sinar Matahari</li><li>Biogas dari sampah dan kotoran ternak sebagai Bahan Bakar Alternatif</li></ul></li></ol><h3>POKJA 4</h3><h4>KESEHATAN</h4><ol><li>Menggerakkan Keluarga dalam perilaku hidup bersih dan sehat</li><li>Pembinaan peran serta masyarakat dalam upaya penurunan angka kematian ibu, bayi dan balita</li><li>Pembinaan Keluarga yang sadar gizi</li><li>Mendukung program pencegahan dan deteksi dini kanker pada perempuan</li><li>Pembinaan Keluarga dalam pelaksanaan imunisasi dan pencegahan penyakit menular maupun tidak menular</li><li>Serta Asuhan Mandiri dalam keluarga</li></ol><h4>LINGKUNGAN</h4><ol><li>Pembinaan Keluarga dalam memelihara dan menjaga lingkungan bersih dan sehat</li><li>Melestarikan Lingkungan Hidup</li></ol><h4>PERENCANAAN SEHAT</h4><ol><li>Pembinaan Keluarga dalam meningkatkan Keluarga Berencana menuju Keluarga Berkualitas</li><li>Melakukan perencanaan keuangan yang baik untuk kehidupan keluarga sehat</li></ol>','[]',6,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(11,'pokja-sekretariat','program-kabupaten','Rencana Program TP-PKK Kabupaten Th. 2025','<h3>BIDANG UMUM</h3><ul><li>Pelantikan Ketua TP. PKK Periode Tahun 2025 – 2029</li><li>Pengembangan APLIKASI E – PKK</li><li>Puncak Acara Peringatan HKG-PKK KE-52 di Bangkalan</li><li>Pembinaan 10 Program Pokok PKK</li><li>Rapat Koordinasi TP.PKK Kabupaten dan TP. PKK Kecamatan</li><li>Rapat Koordinasi TP.PKK Kabupaten dengan OPD terkait</li></ul><h3>POKJA 1</h3><h4>CEPAK</h4><ul><li>Cegah Pernikahan Anak/Dini</li><li>Bimbingan Pranikah</li></ul><h4>PAAREDI (Pola Anak-anak dan Remaja di Era Digital)</h4><ul><li>Keluarga Indonesia Sehat Tanpa Narkoba (KISAN)</li><li>Keluarga Indonesia Sadar Administrasi Kependudukan (KISAK)</li><li>Keluarga Indonesia Lindungi Anak dari Kekerasan Seksual (KILAS)</li><li>Pembinaan Kesadaran Bela Negara (PKBN)</li><li>Keluarga Indonesia Anti Trafficking (KIAT)</li></ul><h4>GOTONG ROYONG</h4><ul><li>Peningkatan kesadaran keluarga dalam membangun kerjasama antar keluarga</li><li>Menambahkan sikap kesetiakawanan sosial</li><li>Partisipasi dalam kegiatan bakti sosial di masyarakat</li><li>Pengajian mohon dihidupkan kembali</li></ul>','[]',7,1,'2025-10-29 15:30:27','2025-10-30 23:51:58'),
(12,'pokja-sekretariat','kesimpulan','Kesimpulan','<h2>Implementasi Program Kerja</h2><p>Seluruh program kerja yang direncanakan akan diimplementasikan dengan koordinasi yang baik antara TP-PKK Kabupaten Bangkalan, Pokja-Pokja, dan mitra kerja terkait untuk mewujudkan keluarga yang sehat, sejahtera, dan mandiri.</p><h3>Monitoring & Evaluasi</h3><p>Pelaksanaan program akan dipantau secara berkala melalui mekanisme monitoring dan evaluasi yang sistematis untuk memastikan pencapaian target yang ditetapkan.</p><h3>Pelaporan Kegiatan</h3><p>Setiap kegiatan yang dilaksanakan akan didokumentasikan dan dilaporkan secara transparan sebagai bentuk akuntabilitas pelaksanaan program.</p><h3>Pengembangan Kapasitas</h3><p>Peningkatan kapasitas kader PKK akan terus dilakukan untuk memastikan implementasi program yang efektif dan berkelanjutan.</p>','[]',8,1,'2025-10-29 15:30:27','2025-10-30 23:51:58');
/*!40000 ALTER TABLE `page_sections` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('Ci6wjMtZ5DpH9ssMdHbTVh6z7GW6dPu75iVz8G2h',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:144.0) Gecko/20100101 Firefox/144.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUG12Y1RqbmlDYmtlUERRc1RxWTVMS2hOdzcyVHJnSm9rWHdEalRVcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9sb2dpbiI7fXM6MjI6ImFkbWluX2NhcHRjaGFfdmVyaWZpZWQiO2I6MTtzOjI1OiJhZG1pbl9jYXB0Y2hhX3ZlcmlmaWVkX2F0IjtPOjI1OiJJbGx1bWluYXRlXFN1cHBvcnRcQ2FyYm9uIjozOntzOjQ6ImRhdGUiO3M6MjY6IjIwMjUtMTAtMzEgMDc6MDQ6MjkuMTkzMTcxIjtzOjEzOiJ0aW1lem9uZV90eXBlIjtpOjM7czo4OiJ0aW1lem9uZSI7czozOiJVVEMiO31zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4iO319',1761894270);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Admin','admin@example.com','2025-10-29 15:30:27','$2y$12$kAY9WJxRulST8tWm.d.zZuGAu30WsFFNl4Jz8HYZu6qUEX8HaTlDW',NULL,'2025-10-29 15:30:27','2025-10-29 15:30:27'),
(2,'admin','admin@admin.com',NULL,'$2y$12$BgzbgP5OE1IIzI9Er/pKHu1TMOgSOQdjAM.1BXGvzCI.CPElUIAgm',NULL,'2025-10-30 23:31:38','2025-10-30 23:31:38'),
(3,'admin','admin@mail.com',NULL,'$2y$12$/eaWapFAuKIhAV6P7l/WWe12YD1rkx9.MunGheDsSUbFkLibyuAWq',NULL,'2025-10-31 00:04:53','2025-10-31 00:04:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Dumping routines for database 'pkk_bkl_b'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-10-31 14:06:56
