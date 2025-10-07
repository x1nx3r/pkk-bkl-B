<x-layout.app
    title="Berita - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-6 py-16 max-w-7xl">
        <x-ui.section-title title="Berita Terkini TP-PKK Kabupaten Bangkalan" icon="news" />

        <!-- Search Section -->
        <div class="mb-12">
            <div class="glass-effect rounded-3xl p-8 border border-pink-100/30">
                <form action="{{ route('berita.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari berita berdasarkan judul atau isi..."
                            class="w-full px-6 py-4 border-2 border-pink-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all"
                        >
                    </div>
                    <button type="submit" class="px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-2xl hover:from-pink-600 hover:to-purple-700 transition-colors duration-200 font-medium">
                        <span class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            Cari Berita
                        </span>
                    </button>
                </form>
            </div>
        </div>

        @if($beritas->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($beritas as $berita)
                    <article class="glass-effect rounded-3xl overflow-hidden card-hover border border-pink-100/30">
                        <!-- Featured Image -->
                        <a href="{{ route('berita.show', $berita) }}" class="block h-56 overflow-hidden relative">
                            @if($berita->featured_image)
                                <img
                                    src="{{ Storage::url($berita->featured_image) }}"
                                    alt="{{ $berita->judul }}"
                                    class="w-full h-full object-cover object-center"
                                >
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </a>

                        <div class="p-6">
                            <!-- Meta Info -->
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <div class="flex items-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $berita->created_at->translatedFormat('d M Y') }}
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    {{ $berita->user->name }}
                                </div>
                            </div>

                            <!-- Title -->
                            <a href="{{ route('berita.show', $berita) }}" class="block group">
                                <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-pink-600 transition-colors duration-300">
                                    {{ $berita->judul }}
                                </h3>
                            </a>

                            <!-- Excerpt -->
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                                {{ Str::limit(strip_tags($berita->konten), 120) }}
                            </p>

                            <!-- Read More Button -->
                            <a href="{{ route('berita.show', $berita) }}" class="inline-flex items-center text-pink-600 hover:text-purple-600 font-medium text-sm transition-colors duration-300 group">
                                Baca selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($beritas->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $beritas->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-16">
                <div class="glass-effect rounded-3xl p-12 max-w-md mx-auto border border-pink-100/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-pink-300 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.137 0-4.146.832-5.636 2.172M6 18H4a2 2 0 01-2-2v-4a2 2 0 012-2h16a2 2 0 012 2v4a2 2 0 01-2 2h-2M6 12V6a2 2 0 012-2h8a2 2 0 012 2v6" />
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Tidak ada berita ditemukan</h3>
                    <p class="text-gray-500">Coba gunakan kata kunci pencarian yang berbeda.</p>
                </div>
            </div>
        @endif
    </div>
</x-layout.app>
