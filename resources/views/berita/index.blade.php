<x-layout.app
    title="Berita - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <!-- News Section -->
        <div class="mb-16">
            <x-ui.section-title title="Berita Terkini TP-PKK Kabupaten Bangkalan" />

            <!-- Search Section -->
            <div class="mb-10">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <form action="{{ route('berita.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Cari berita berdasarkan judul atau isi..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5A92C9] focus:border-transparent"
                            >
                        </div>
                        <button type="submit" class="px-6 py-3 bg-[#5A92C9] text-white rounded-lg hover:bg-[#4A82B9] transition duration-200">
                            <span class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                                Cari
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            @if($beritas->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($beritas as $berita)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('berita.show', $berita) }}" class="block h-48 overflow-hidden">
                                @if($berita->featured_image)
                                    <img
                                        src="{{ Storage::url($berita->featured_image) }}"
                                        alt="{{ $berita->judul }}"
                                        class="w-full h-full object-cover object-center"
                                    >
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
                                    <span class="mx-2">•</span>
                                    <span>Oleh: {{ $berita->user->name }}</span>
                                </div>

                                <!-- Title -->
                                <a href="{{ route('berita.show', $berita) }}" class="block">
                                    <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#5A92C9] transition duration-200">
                                        {{ $berita->judul }}
                                    </h3>
                                </a>

                                <!-- Excerpt -->
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($berita->konten), 120) }}
                                </p>

                                <!-- Footer -->
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('berita.show', $berita) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                        Baca selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-10">
                    {{ $beritas->links() }}
                </div>
            @else
                <div class="bg-white rounded-xl shadow-sm p-8 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <h3 class="text-xl text-gray-500 font-medium">Belum ada berita tersedia</h3>
                    <p class="text-gray-400 mt-2">Silakan kembali lagi nanti untuk informasi terbaru</p>
                </div>
            @endif
        </div>
    </main>
</x-layout.app>
