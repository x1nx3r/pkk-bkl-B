<x-layout.app
    title="{{ $berita->judul }} - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Berita Header -->
    <x-pages.profile-header
        title="{{ $berita->judul }}"
        subtitle="{{ $berita->created_at->translatedFormat('d F Y') }} • Oleh: {{ $berita->user->name }}"
        backgroundImage="{{ $berita->featured_image ? Storage::url($berita->featured_image) : 'https://placehold.co/1600x900/5A92C9/ffffff?text=Berita+PKK+Bangkalan' }}"
    />

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

        <!-- Admin Actions -->
        @auth
            @if(Gate::allows('update-berita', $berita) || Gate::allows('delete-berita', $berita))
                <div class="flex gap-3 mb-6">
                    @if(Gate::allows('update-berita', $berita))
                        <a href="{{ route('berita.edit', $berita) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            Edit Berita
                        </a>
                    @endif

                    @if(Gate::allows('delete-berita', $berita))
                        <form action="{{ route('berita.destroy', $berita) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Hapus Berita
                            </button>
                        </form>
                    @endif
                </div>
            @endif
        @endauth

        <!-- Article Content -->
        <div class="mb-16">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="p-8">
                    <!-- Content -->
                    <div class="prose prose-lg max-w-none">
                        {!! $berita->konten !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Related News -->
        @if($relatedNews->count() > 0)
            <div class="mb-16">
                <x-ui.section-title title="Berita Terkait" />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedNews as $related)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('berita.show', $related) }}" class="block h-40 overflow-hidden">
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
                            </a>

                            <div class="p-4">
                                <!-- Meta Info -->
                                <div class="flex items-center text-xs text-gray-500 mb-1">
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
