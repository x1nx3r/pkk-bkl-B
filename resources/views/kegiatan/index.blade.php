<x-layout.app
    title="Kegiatan - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <!-- News Section -->
        <div class="mb-16">
            <x-ui.section-title title="Kegiatan TP-PKK" />

            <!-- Search and Filter Section -->
            <div class="mb-10">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <form action="{{ route('kegiatan.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Cari kegiatan berdasarkan judul, deskripsi, atau lokasi..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5A92C9] focus:border-transparent"
                            >
                        </div>
                        <div class="w-full md:w-48">
                            <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5A92C9]">
                                <option value="">Semua Status</option>
                                <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Akan Datang</option>
                                <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>Sedang Berlangsung</option>
                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                        <button type="submit" class="px-6 py-3 bg-[#5A92C9] text-white rounded-lg hover:bg-[#4A82B9] transition duration-200">
                            <span class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                                Filter
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            @if($kegiatans->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($kegiatans as $kegiatan)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('kegiatan.show', $kegiatan) }}" class="block h-48 overflow-hidden">
                                @if($kegiatan->featured_image)
                                    <img
                                        src="{{ Storage::url($kegiatan->featured_image) }}"
                                        alt="{{ $kegiatan->judul }}"
                                        class="w-full h-full object-cover object-center"
                                    >
                                @else
                                    <div class="w-full h-full bg-[#5A92C9]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- Status Badge -->
                                <div class="absolute top-2 right-2">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium {{
                                        $kegiatan->status === 'upcoming' ? 'bg-yellow-100 text-yellow-800' :
                                        ($kegiatan->status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800')
                                    }}">
                                        {{
                                            $kegiatan->status === 'upcoming' ? 'Akan Datang' :
                                            ($kegiatan->status === 'ongoing' ? 'Sedang Berlangsung' : 'Selesai')
                                        }}
                                    </span>
                                </div>
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
                                    <span class="mx-2">•</span>
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
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($kegiatan->deskripsi), 120) }}
                                </p>

                                <!-- Footer -->
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('kegiatan.show', $kegiatan) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-10">
                    {{ $kegiatans->links() }}
                </div>
            @else
                <div class="bg-white rounded-xl shadow-sm p-8 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl text-gray-500 font-medium">Belum ada kegiatan tersedia</h3>
                    <p class="text-gray-400 mt-2">Silakan kembali lagi nanti untuk informasi kegiatan terbaru</p>
                </div>
            @endif
        </div>
    </main>
</x-layout.app>
