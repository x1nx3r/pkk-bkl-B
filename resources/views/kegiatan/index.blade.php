<x-layout.app title="Kegiatan - TP-PKK Kabupaten Bangkalan" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-16 max-w-7xl">
        <x-ui.section-title title="Kegiatan TP-PKK Kabupaten Bangkalan" icon="events" />

        <!-- Search and Filter Section -->
        <div class="mb-12">
            <div class="glass-effect rounded-3xl p-8 border border-pink-100/30">
                <form action="{{ route('kegiatan.index') }}" method="GET" class="flex flex-col lg:flex-row gap-6">
                    <div class="flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Cari Kegiatan</label>
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari kegiatan berdasarkan judul, deskripsi, atau lokasi..."
                            class="w-full px-6 py-3 rounded-2xl border border-pink-200/50 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                        >
                    </div>
                    <div class="w-full lg:w-64">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status Kegiatan</label>
                        <select name="status" class="w-full px-6 py-3 rounded-2xl border border-pink-200/50 focus:outline-none focus:ring-2 focus:ring-pink-300 bg-white/80 backdrop-blur-sm">
                            <option value="">Semua Status</option>
                            <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Akan Datang</option>
                            <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>Sedang Berlangsung</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="w-full lg:w-auto px-8 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-2xl hover:from-pink-600 hover:to-purple-700 transition-colors duration-200 font-medium">
                            <span class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                                Cari Kegiatan
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if($kegiatans->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($kegiatans as $kegiatan)
                    <article class="glass-effect rounded-3xl overflow-hidden card-hover border border-pink-100/30 group">
                        <!-- Featured Image -->
                        <a href="{{ route('kegiatan.show', $kegiatan) }}" class="block h-56 overflow-hidden relative">
                            @if($kegiatan->featured_image)
                                <img
                                    src="{{ Storage::url($kegiatan->featured_image) }}"
                                    alt="{{ $kegiatan->judul }}"
                                    class="w-full h-full object-cover object-center"
                                >
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            
                            <!-- Status Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-sm {{
                                    $kegiatan->status === 'upcoming' ? 'bg-yellow-100/90 text-yellow-800' :
                                    ($kegiatan->status === 'ongoing' ? 'bg-green-100/90 text-green-800' : 'bg-gray-100/90 text-gray-800')
                                }}">
                                    {{
                                        $kegiatan->status === 'upcoming' ? 'Akan Datang' :
                                        ($kegiatan->status === 'ongoing' ? 'Sedang Berlangsung' : 'Selesai')
                                    }}
                                </span>
                            </div>
                        </a>

                        <div class="p-6">
                            <!-- Meta Info -->
                            <div class="flex flex-col gap-2 text-sm text-gray-500 mb-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $kegiatan->tanggal_mulai->translatedFormat('d M Y, H:i') }}
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $kegiatan->lokasi }}
                                </div>
                            </div>

                            <!-- Title -->
                            <a href="{{ route('kegiatan.show', $kegiatan) }}" class="block group">
                                <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-pink-600 transition-colors duration-300">
                                    {{ $kegiatan->judul }}
                                </h3>
                            </a>

                            <!-- Excerpt -->
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                                {{ Str::limit(strip_tags($kegiatan->deskripsi), 120) }}
                            </p>

                            <!-- Read More Button -->
                            <a href="{{ route('kegiatan.show', $kegiatan) }}" class="inline-flex items-center text-pink-600 hover:text-purple-600 font-medium text-sm transition-colors duration-300 group">
                                Lihat detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <div class="pagination-wrapper">
                    {{ $kegiatans->links() }}
                </div>
            </div>
        @else
            <div class="text-center py-16">
                <div class="glass-effect rounded-3xl p-12 max-w-md mx-auto border border-pink-100/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-pink-300 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum ada kegiatan</h3>
                    <p class="text-gray-500">Kegiatan terbaru akan ditampilkan di sini.</p>
                </div>
            </div>
        @endif
    </div>
</x-layout.app>
