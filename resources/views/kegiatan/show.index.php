<x-layout.app
    title="{{ $kegiatan->judul }} - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <div class="mb-6">
            <a href="{{ route('kegiatan.index') }}" class="text-[#5A92C9] hover:underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Kembali ke Daftar Kegiatan
            </a>
        </div>

        <!-- Kegiatan Detail -->
        <div class="mb-16">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <!-- Featured Image -->
                @if($kegiatan->featured_image)
                    <div class="h-80 overflow-hidden relative">
                        <img
                            src="{{ Storage::url($kegiatan->featured_image) }}"
                            alt="{{ $kegiatan->judul }}"
                            class="w-full h-full object-cover object-center"
                        >
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-4 py-2 rounded-full text-sm font-medium {{
                                $kegiatan->status === 'upcoming' ? 'bg-yellow-100 text-yellow-800' :
                                ($kegiatan->status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800')
                            }}">
                                {{
                                    $kegiatan->status === 'upcoming' ? 'Akan Datang' :
                                    ($kegiatan->status === 'ongoing' ? 'Sedang Berlangsung' : 'Selesai')
                                }}
                            </span>
                        </div>
                    </div>
                @else
                    <div class="h-80 bg-[#5A92C9]/10 flex items-center justify-center relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-4 py-2 rounded-full text-sm font-medium {{
                                $kegiatan->status === 'upcoming' ? 'bg-yellow-100 text-yellow-800' :
                                ($kegiatan->status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800')
                            }}">
                                {{
                                    $kegiatan->status === 'upcoming' ? 'Akan Datang' :
                                    ($kegiatan->status === 'ongoing' ? 'Sedang Berlangsung' : 'Selesai')
                                }}
                            </span>
                        </div>
                    </div>
                @endif

                <div class="p-8">
                    <!-- Title -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $kegiatan->judul }}</h1>

                    <!-- Event Details Card -->
                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg mb-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <h4 class="font-medium text-gray-500 mb-2">Tanggal & Waktu</h4>
                            <p class="text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $kegiatan->tanggal_mulai->translatedFormat('d F Y, H:i') }}
                                @if($kegiatan->tanggal_selesai)
                                    <span class="mx-2">-</span>
                                    @if($kegiatan->tanggal_mulai->toDateString() === $kegiatan->tanggal_selesai->toDateString())
                                        {{ $kegiatan->tanggal_selesai->format('H:i') }}
                                    @else
                                        {{ $kegiatan->tanggal_selesai->translatedFormat('d F Y, H:i') }}
                                    @endif
                                @endif
                            </p>
                        </div>

                        <div>
                            <h4 class="font-medium text-gray-500 mb-2">Lokasi</h4>
                            <p class="text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $kegiatan->lokasi }}
                            </p>
                        </div>

                        <div>
                            <h4 class="font-medium text-gray-500 mb-2">Dibuat Oleh</h4>
                            <p class="text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                {{ $kegiatan->user->name }}
                            </p>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none">
                        {!! $kegiatan->deskripsi !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Activities -->
        @if($relatedActivities->count() > 0)
            <div class="mb-16">
                <x-ui.section-title title="Kegiatan Terkait" />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedActivities as $activity)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-transform hover:shadow-md hover:scale-[1.02]">
                            <!-- Featured Image -->
                            <a href="{{ route('kegiatan.show', $activity) }}" class="block h-40 overflow-hidden relative">
                                @if($activity->featured_image)
                                    <img
                                        src="{{ Storage::url($activity->featured_image) }}"
                                        alt="{{ $activity->judul }}"
                                        class="w-full h-full object-cover object-center"
                                    >
                                @else
                                    <div class="w-full h-full bg-[#5A92C9]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#5A92C9]/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- Status Badge -->
                                <div class="absolute top-2 right-2">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium {{
                                        $activity->status === 'upcoming' ? 'bg-yellow-100 text-yellow-800' :
                                        ($activity->status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800')
                                    }}">
                                        {{
                                            $activity->status === 'upcoming' ? 'Akan Datang' :
                                            ($activity->status === 'ongoing' ? 'Sedang Berlangsung' : 'Selesai')
                                        }}
                                    </span>
                                </div>
                            </a>

                            <div class="p-4">
                                <!-- Date & Location -->
                                <div class="flex items-center text-xs text-gray-500 mb-1">
                                    <span>{{ $activity->tanggal_mulai->translatedFormat('d F Y') }}</span>
                                    <span class="mx-1">•</span>
                                    <span>{{ $activity->lokasi }}</span>
                                </div>

                                <!-- Title -->
                                <a href="{{ route('kegiatan.show', $activity) }}" class="block">
                                    <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#5A92C9] transition duration-200">
                                        {{ $activity->judul }}
                                    </h3>
                                </a>

                                <!-- Read More Link -->
                                <div class="flex justify-end">
                                    <a href="{{ route('kegiatan.show', $activity) }}" class="text-[#5A92C9] text-sm font-medium hover:underline">
                                        Lihat Detail
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
