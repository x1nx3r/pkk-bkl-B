<x-layout.app
    title="{{ $berita->judul }} - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <div class="mb-6">
            <a href="{{ route('berita.index') }}" class="text-[#5A92C9] hover:underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Kembali ke Daftar Berita
            </a>
        </div>



        <!-- Article Detail -->
        <div class="mb-16">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                @if($berita->featured_image)
                    <div class="h-80 overflow-hidden relative">
                        <img
                            src="{{ Storage::url($berita->featured_image) }}"
                            alt="{{ $berita->judul }}"
                            class="w-full h-full object-cover object-center"
                        >
                    </div>
                @else
                    <div class="h-80 bg-[#5A92C9]/10 flex items-center justify-center relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>


                    </div>
                @endif

                <div class="p-8">
                    <!-- Title -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $berita->judul }}</h1>

                    <!-- Info Card -->
                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg mb-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <h4 class="font-medium text-gray-500 mb-2">Tanggal</h4>
                            <p class="text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $berita->created_at->translatedFormat('d F Y, H:i') }}
                            </p>
                        </div>



                        <div>
                            <h4 class="font-medium text-gray-500 mb-2">Dibuat Oleh</h4>
                            <p class="text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                {{ $berita->user->name }}
                            </p>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none">
                        {!! $berita->konten !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Article Detail -->

        <!-- Related News -->
        @if($relatedNews->count() > 0)
            <div class="mb-16">
                <x-ui.section-title title="Berita Terkait" />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedNews as $related)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('berita.show', $related) }}" class="block h-40 overflow-hidden relative">
                                @if($related->featured_image)
                                    <img
                                        src="{{ Storage::url($related->featured_image) }}"
                                        alt="{{ $related->judul }}"
                                        class="w-full h-full object-cover object-center"
                                    >
                                @else
                                    <div class="w-full h-full bg-[#5A92C9]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- small badge for related item (optional) -->
                                <div class="absolute top-2 right-2">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium {{
                                        $related->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800'
                                    }}">
                                        {{ $related->status === 'published' ? 'Published' : 'Draft' }}
                                    </span>
                                </div>
                            </a>

                            <div class="p-4">
                                <!-- Meta Info -->
                                <div class="flex items-center text-sm text-gray-500 mb-1">
                                    <span>{{ $related->created_at->translatedFormat('d F Y') }}</span>
                                </div>

                                <!-- Title -->
                                <a href="{{ route('berita.show', $related) }}" class="block">
                                    <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#5A92C9] transition duration-200">
                                        {{ $related->judul }}
                                    </h3>
                                </a>

                                <!-- Read More Link -->
                                <div class="flex justify-end">
                                    <a href="{{ route('berita.show', $related) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                        Baca selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </main>
</x-layout.app>
