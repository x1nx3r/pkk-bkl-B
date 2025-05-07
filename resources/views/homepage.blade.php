<x-layout.app
    title="TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <x-slideshow :slides="[
        [
            'image' => asset('images/b.jpg'),
            'title' => 'TP-PKK Kabupaten Bangkalan',
            'caption' => 'Berkomitmen untuk membangun keluarga sejahtera di Bangkalan'
        ],
        [
            'image' => asset('images/a.jpg'),
            'title' => 'Program Unggulan',
            'caption' => 'Mengenal berbagai program pemberdayaan keluarga'
        ],
        [
            'image' => asset('images/c.jpg'),
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

        </x-home.hero-section>

        <!-- Latest News Section -->
        <section class="my-12">
            <div class="flex justify-between items-center mb-6">
                <x-ui.section-title title="Berita Terkini" />
                <a href="{{ route('berita.index') }}" class="text-[#5A92C9] hover:text-[#4A82B9] font-medium flex items-center">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            @if(isset($latestNews) && $latestNews->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($latestNews as $berita)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('berita.show', $berita) }}" class="block h-48 overflow-hidden">
                                @if($berita->featured_image)
                                    <img src="{{ Storage::url($berita->featured_image) }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover object-center">
                                @else
                                    <div class="w-full h-full bg-[#5A92C9]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                @endif
                            </a>

                            <div class="p-6">
                                <!-- Meta Info -->
                                <div class="flex items-center text-xs text-gray-500 mb-2">
                                    <span>{{ $berita->created_at->translatedFormat('d F Y') }}</span>
                                </div>

                                <!-- Title -->
                                <a href="{{ route('berita.show', $berita) }}" class="block">
                                    <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#5A92C9] transition duration-200">
                                        {{ $berita->judul }}
                                    </h3>
                                </a>

                                <!-- Excerpt -->
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($berita->konten), 100) }}
                                </p>

                                <!-- Footer -->
                                <a href="{{ route('berita.show', $berita) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                    <p class="text-gray-500">Belum ada berita terbaru.</p>
                </div>
            @endif
        </section>

        <!-- Upcoming Activities Section -->
        <section class="my-12">
            <div class="flex justify-between items-center mb-6">
                <x-ui.section-title title="Kegiatan Mendatang" />
                <a href="{{ route('kegiatan.index') }}" class="text-[#5A92C9] hover:text-[#4A82B9] font-medium flex items-center">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            @if(isset($upcomingActivities) && $upcomingActivities->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($upcomingActivities as $kegiatan)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('kegiatan.show', $kegiatan) }}" class="block h-48 overflow-hidden relative">
                                @if($kegiatan->featured_image)
                                    <img src="{{ Storage::url($kegiatan->featured_image) }}" alt="{{ $kegiatan->judul }}" class="w-full h-full object-cover object-center">
                                @else
                                    <div class="w-full h-full bg-[#5A92C9]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- Status Badge -->
                                <div class="absolute top-2 right-2">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Akan Datang
                                    </span>
                                </div>d
                            </a>

                            <div class="p-6">
                                <!-- Date & Location -->
                                <div class="flex items-center text-xs text-gray-500 mb-2">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $kegiatan->tanggal_mulai->translatedFormat('d F Y, H:i') }}
                                    </span>
                                </div>

                                <div class="flex items-center text-xs text-gray-500 mb-3">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ $kegiatan->lokasi }}
                                    </span>
                                </div>

                                <!-- Title -->
                                <a href="{{ route('kegiatan.show', $kegiatan) }}" class="block">
                                    <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#5A92C9] transition duration-200">
                                        {{ $kegiatan->judul }}
                                    </h3>
                                </a>

                                <!-- Excerpt -->
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    {{ Str::limit(strip_tags($kegiatan->deskripsi), 80) }}
                                </p>

                                <!-- Footer -->
                                <a href="{{ route('kegiatan.show', $kegiatan) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                    <p class="text-gray-500">Belum ada kegiatan mendatang.</p>
                </div>
            @endif
        </section>

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
