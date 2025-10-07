<x-layout.app
    title="{{ $berita->judul }} - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-6 py-16 max-w-4xl">
        <!-- Back Navigation -->
        <div class="mb-8">
            <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 hover:from-pink-200 hover:to-purple-200 hover:text-purple-800 transition-all duration-300 font-medium shadow-sm hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Kembali ke Daftar Berita
            </a>
        </div>

        <!-- Article Detail -->
        <article class="glass-effect rounded-3xl overflow-hidden border border-pink-100/30 card-hover">
            @if($berita->featured_image)
                <div class="h-80 lg:h-96 overflow-hidden relative">
                    <img
                        src="{{ Storage::url($berita->featured_image) }}"
                        alt="{{ $berita->judul }}"
                        class="w-full h-full object-cover object-center"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="inline-block px-4 py-2 rounded-full bg-white/90 backdrop-blur-sm text-pink-600 font-semibold text-sm mb-4">Berita Terkini</span>
                    </div>
                </div>
            @else
                <div class="h-80 bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
            @endif

            <div class="p-8 lg:p-12">
                <!-- Title -->
                <h1 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-6 leading-tight">{{ $berita->judul }}</h1>

                <!-- Meta Information -->
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-6 rounded-2xl mb-8 border border-pink-100/50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700 text-sm">Tanggal Publikasi</h4>
                                <p class="text-gray-900 font-medium">{{ $berita->created_at->translatedFormat('d F Y, H:i') }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-100 to-blue-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700 text-sm">Ditulis Oleh</h4>
                                <p class="text-gray-900 font-medium">{{ $berita->user->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="prose prose-lg lg:prose-xl max-w-none">
                    <div class="
                        [&>h1]:text-3xl
                        [&>h1]:font-bold
                        [&>h1]:gradient-text
                        [&>h1]:font-heading
                        [&>h1]:mb-6
                        [&>h2]:text-2xl
                        [&>h2]:font-bold
                        [&>h2]:text-pink-700
                        [&>h2]:mb-4
                        [&>h2]:mt-8
                        [&>h3]:text-xl
                        [&>h3]:font-semibold
                        [&>h3]:text-purple-600
                        [&>h3]:mb-3
                        [&>p]:text-gray-700
                        [&>p]:leading-relaxed
                        [&>p]:mb-4
                        [&>ul]:space-y-2
                        [&>ul>li]:text-gray-700
                        [&>ol]:space-y-2
                        [&>ol>li]:text-gray-700
                        [&>blockquote]:border-l-4
                        [&>blockquote]:border-pink-300
                        [&>blockquote]:bg-gradient-to-r
                        [&>blockquote]:from-pink-50
                        [&>blockquote]:to-purple-50
                        [&>blockquote]:p-6
                        [&>blockquote]:rounded-r-2xl
                        [&>blockquote]:italic
                        [&>blockquote]:text-gray-700
                        [&>blockquote]:my-6
                    ">
                        {!! $berita->konten !!}
                    </div>
                </div>
            </div>
        </article>

        <!-- Related News -->
        @if($relatedNews->count() > 0)
            <section class="mt-16">
                <x-ui.section-title title="Berita Terkait" />
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($relatedNews as $related)
                        <article class="glass-effect rounded-2xl overflow-hidden card-hover border border-pink-100/30">
                            <a href="{{ route('berita.show', $related) }}" class="block h-48 overflow-hidden relative">
                                @if($related->featured_image)
                                    <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->judul }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </a>
                            
                            <div class="p-6">
                                <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-pink-600 transition-colors">
                                    <a href="{{ route('berita.show', $related) }}">{{ $related->judul }}</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">{{ Str::limit(strip_tags($related->konten), 80) }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</x-layout.app>
