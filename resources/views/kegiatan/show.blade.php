<x-layout.app title="{{ $kegiatan->judul }} - Kegiatan" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12 md:py-16 max-w-4xl">
        <!-- Back Navigation -->
        <div class="mb-6 sm:mb-8">
            <a href="{{ route('kegiatan.index') }}" class="inline-flex items-center gap-2 sm:gap-3 px-4 py-2 sm:px-6 sm:py-3 rounded-xl sm:rounded-2xl bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 hover:from-pink-200 hover:to-purple-200 hover:text-purple-800 transition-all duration-300 font-medium shadow-sm hover:shadow-md text-sm sm:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Kegiatan
            </a>
        </div>

        <!-- Featured Image -->
        @if($kegiatan->featured_image)
            <div class="mb-6 sm:mb-8 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl">
                <img src="{{ Storage::url($kegiatan->featured_image) }}" alt="{{ $kegiatan->judul }}" class="w-full h-64 sm:h-80 md:h-96 object-cover">
            </div>
        @endif

        <x-ui.section-title :title="$kegiatan->judul" />

        <div class="glass-effect rounded-2xl sm:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-6 -right-6 w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
            
            <!-- Meta Information Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
                <!-- Tanggal Mulai -->
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-pink-100/50">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-semibold text-gray-700 text-xs sm:text-sm mb-1">Tanggal Mulai</h4>
                            <p class="text-gray-900 font-medium text-sm sm:text-base">{{ $kegiatan->tanggal_mulai->translatedFormat('d F Y') }}</p>
                            <p class="text-gray-600 text-xs sm:text-sm">{{ $kegiatan->tanggal_mulai->translatedFormat('H:i') }} WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Tanggal Selesai -->
                @if($kegiatan->tanggal_selesai)
                    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-purple-100/50">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-100 to-blue-100 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-semibold text-gray-700 text-xs sm:text-sm mb-1">Tanggal Selesai</h4>
                                <p class="text-gray-900 font-medium text-sm sm:text-base">{{ $kegiatan->tanggal_selesai->translatedFormat('d F Y') }}</p>
                                <p class="text-gray-600 text-xs sm:text-sm">{{ $kegiatan->tanggal_selesai->translatedFormat('H:i') }} WIB</p>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Lokasi -->
                @if($kegiatan->lokasi)
                    <div class="bg-gradient-to-r from-blue-50 to-pink-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-blue-100/50">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-100 to-pink-100 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-semibold text-gray-700 text-xs sm:text-sm mb-1">Lokasi</h4>
                                <p class="text-gray-900 font-medium text-sm sm:text-base leading-relaxed">{{ $kegiatan->lokasi }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Deskripsi -->
            <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none">
                <div class="
                    [&>h1]:text-xl [&>h1]:sm:text-2xl [&>h1]:md:text-3xl
                    [&>h1]:font-bold
                    [&>h1]:gradient-text
                    [&>h1]:font-heading
                    [&>h1]:mb-4 [&>h1]:sm:mb-6
                    [&>h2]:text-lg [&>h2]:sm:text-xl [&>h2]:md:text-2xl
                    [&>h2]:font-bold
                    [&>h2]:text-pink-700
                    [&>h2]:mb-3 [&>h2]:sm:mb-4
                    [&>h2]:mt-6 [&>h2]:sm:mt-8
                    [&>h3]:text-base [&>h3]:sm:text-lg [&>h3]:md:text-xl
                    [&>h3]:font-semibold
                    [&>h3]:text-purple-600
                    [&>h3]:mb-2 [&>h3]:sm:mb-3
                    [&>p]:text-gray-700
                    [&>p]:text-sm [&>p]:sm:text-base
                    [&>p]:leading-relaxed
                    [&>p]:mb-3 [&>p]:sm:mb-4
                    [&>ul]:space-y-1.5 [&>ul]:sm:space-y-2
                    [&>ul>li]:text-gray-700
                    [&>ul>li]:text-sm [&>ul>li]:sm:text-base
                    [&>ol]:space-y-1.5 [&>ol]:sm:space-y-2
                    [&>ol>li]:text-gray-700
                    [&>ol>li]:text-sm [&>ol>li]:sm:text-base
                    [&>img]:rounded-xl [&>img]:sm:rounded-2xl
                    [&>img]:shadow-lg
                    [&>img]:my-4 [&>img]:sm:my-6
                ">
                    {!! $kegiatan->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
