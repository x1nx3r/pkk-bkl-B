<x-layout.app
    title="{{ $berita->judul }} - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12 md:py-16 max-w-4xl">
        <!-- Back Navigation -->
        <div class="mb-6 sm:mb-8">
            <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 sm:gap-3 px-4 py-2 sm:px-6 sm:py-3 rounded-xl sm:rounded-2xl bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 hover:from-pink-200 hover:to-purple-200 hover:text-purple-800 transition-all duration-300 font-medium shadow-sm hover:shadow-md text-sm sm:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Berita
            </a>
        </div>

        <!-- Featured Image -->
        @if($berita->featured_image)
            <div class="mb-6 sm:mb-8 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl relative">
                <img src="{{ Storage::url($berita->featured_image) }}" alt="{{ $berita->judul }}" class="w-full h-64 sm:h-80 md:h-96 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 md:bottom-6 md:left-6">
                    <span class="inline-block px-3 py-1 sm:px-4 sm:py-2 rounded-full bg-white/90 backdrop-blur-sm text-pink-600 font-semibold text-xs sm:text-sm">Berita Terkini</span>
                </div>
            </div>
        @endif

        <x-ui.section-title :title="$berita->judul" />

        <!-- Article Detail -->
        <article class="glass-effect rounded-2xl sm:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-6 -right-6 w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>

            <!-- Meta Information -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
                <!-- Tanggal Publikasi -->
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-pink-100/50">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-semibold text-gray-700 text-xs sm:text-sm mb-1">Tanggal Publikasi</h4>
                            <p class="text-gray-900 font-medium text-sm sm:text-base">{{ $berita->created_at->translatedFormat('d F Y') }}</p>
                            <p class="text-gray-600 text-xs sm:text-sm">{{ $berita->created_at->translatedFormat('H:i') }} WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Author -->
                <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-purple-100/50">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-100 to-blue-100 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-semibold text-gray-700 text-xs sm:text-sm mb-1">Ditulis Oleh</h4>
                            <p class="text-gray-900 font-medium text-sm sm:text-base">{{ $berita->user->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
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
                    [&>blockquote]:border-l-4
                    [&>blockquote]:border-pink-300
                    [&>blockquote]:bg-gradient-to-r
                    [&>blockquote]:from-pink-50
                    [&>blockquote]:to-purple-50
                    [&>blockquote]:p-4 [&>blockquote]:sm:p-6
                    [&>blockquote]:rounded-r-xl [&>blockquote]:sm:rounded-r-2xl
                    [&>blockquote]:italic
                    [&>blockquote]:text-gray-700
                    [&>blockquote]:text-sm [&>blockquote]:sm:text-base
                    [&>blockquote]:my-4 [&>blockquote]:sm:my-6
                    [&>img]:rounded-xl [&>img]:sm:rounded-2xl
                    [&>img]:shadow-lg
                    [&>img]:my-4 [&>img]:sm:my-6
                ">
                    {!! $berita->konten !!}
                </div>
            </div>
        </article>

        <!-- Related News -->
        @if($relatedNews->count() > 0)
            <section class="mt-12 sm:mt-14 md:mt-16">
                <x-ui.section-title title="Berita Terkait" />
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6">
                    @foreach($relatedNews as $related)
                        <article class="glass-effect rounded-xl sm:rounded-2xl overflow-hidden card-hover border border-pink-100/30">
                            <a href="{{ route('berita.show', $related) }}" class="block h-40 sm:h-44 md:h-48 overflow-hidden relative">
                                @if($related->featured_image)
                                    <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->judul }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </a>
                            
                            <div class="p-4 sm:p-5 md:p-6">
                                <h3 class="font-bold text-gray-800 text-sm sm:text-base mb-2 line-clamp-2 hover:text-pink-600 transition-colors">
                                    <a href="{{ route('berita.show', $related) }}">{{ $related->judul }}</a>
                                </h3>
                                <p class="text-gray-600 text-xs sm:text-sm line-clamp-2">{{ Str::limit(strip_tags($related->konten), 80) }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</x-layout.app>
