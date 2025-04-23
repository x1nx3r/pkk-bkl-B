<x-layout.app
    title="TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <x-slideshow :slides="[
        [
            'image' => 'https://placehold.co/1200x400',
            'title' => 'Welcome to PKK Kabupaten Bangkalan',
            'caption' => 'Berkomitmen untuk membangun keluarga sejahtera di Bangkalan'
        ],
        [
            'image' => 'https://placehold.co/1200x400',
            'title' => 'Program Unggulan',
            'caption' => 'Mengenal berbagai program pemberdayaan keluarga'
        ],
        [
            'image' => 'https://placehold.co/1200x400',
            'title' => 'Kegiatan Terkini',
            'caption' => 'Melihat aktivitas terbaru PKK di masyarakat'
        ]
    ]" :autoplay="true" :interval="5000" />

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Hero Section -->
        <x-home.hero-section
            title="Selamat Datang di PKK"
            subtitle="Kabupaten Bangkalan"
            description="PKK Kabupaten Bangkalan adalah lembaga yang berkomitmen untuk meningkatkan kesejahteraan keluarga melalui berbagai program pemberdayaan. Kami fokus pada pengembangan keluarga yang sehat, terampil, dan mandiri.">

            <x-ui.feature-card title="Berita Terbaru" link="#">
                Ikuti perkembangan kegiatan dan informasi terkini dari PKK Kabupaten Bangkalan.
            </x-ui.feature-card>

            <x-ui.feature-card title="Program Mendatang" link="#">
                Temukan jadwal kegiatan dan program-program yang akan dilaksanakan dalam waktu dekat.
            </x-ui.feature-card>

            <x-ui.feature-card title="Mari Berpartisipasi" link="#">
                Pelajari bagaimana Anda dapat berkontribusi dan terlibat dalam program-program PKK.
            </x-ui.feature-card>
        </x-home.hero-section>

        <!-- Tentang PKK Section -->
        <x-home.about-section />

        <!-- Sejarah Singkat Section -->
        <x-home.history-section />

        <!-- 10 Program Pokok PKK Section -->
        <x-home.program-section
            learn-more-link="/program-pokok"
            learn-more-text="Pelajari Lebih Lanjut" />
    </main>
</x-layout.app>
