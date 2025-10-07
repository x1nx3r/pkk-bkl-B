{{--
    Enhanced Organizational Structure with Card-Based Profile Layout
    This template renders an organizational structure with modern card-based member profiles
--}}

@php
    // Define the main sections with icons and colors
    $sections = [
        'struktur_utama' => [
            'title' => 'Struktur Utama',
            'icon' => 'crown',
            'gradient' => 'from-pink-50 to-purple-50',
            'color' => 'pink'
        ],
        'bidang_1' => [
            'title' => 'Bidang I – Pembinaan Karakter Keluarga',
            'icon' => 'heart',
            'gradient' => 'from-purple-50 to-blue-50',
            'color' => 'purple'
        ],
        'bidang_2' => [
            'title' => 'Bidang II – Pendidikan dan Peningkatan Ekonomi Keluarga',
            'icon' => 'academic',
            'gradient' => 'from-blue-50 to-pink-50',
            'color' => 'blue'
        ],
        'bidang_3' => [
            'title' => 'Bidang III – Ketua Bidang Penguatan Ketahanan Pangan',
            'icon' => 'food',
            'gradient' => 'from-green-50 to-purple-50',
            'color' => 'green'
        ],
        'bidang_4' => [
            'title' => 'Bidang IV – Kesehatan Keluarga dan Lingkungan',
            'icon' => 'health',
            'gradient' => 'from-pink-50 to-blue-50',
            'color' => 'pink'
        ],
    ];

    // Define POKJA subsections
    $pokjaSections = [
        'pokja_1' => 'POKJA I',
        'pokja_2' => 'POKJA II',
        'pokja_3' => 'POKJA III',
        'pokja_4' => 'POKJA IV',
    ];

    // Get icon SVG
    function getSectionIcon($iconType, $colorClass) {
        $icons = [
            'crown' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ' . $colorClass . '" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>',
            'heart' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ' . $colorClass . '" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>',
            'academic' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ' . $colorClass . '" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>',
            'food' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ' . $colorClass . '" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0A1.5 1.5 0 013 17.546V15c0-4.418 4.03-8 9-8s9 3.582 9 8v2.546z" /></svg>',
            'health' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ' . $colorClass . '" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>'
        ];
        return $icons[$iconType] ?? $icons['crown'];
    }
@endphp

<div class="space-y-6 sm:space-y-8">
    @php
        $validSections = [];
        foreach($sections as $sectionKey => $sectionData) {
            $mainMembers = \App\Models\OrganizationStructure::active()
                ->where('section', $sectionKey)
                ->whereNull('subsection')
                ->ordered()
                ->get();
            $subsectionMembers = \App\Models\OrganizationStructure::active()
                ->where('section', $sectionKey)
                ->whereNotNull('subsection')
                ->ordered()
                ->get()
                ->groupBy('subsection');
            
            if($mainMembers->isNotEmpty() || $subsectionMembers->isNotEmpty()) {
                $validSections[] = compact('sectionKey', 'sectionData', 'mainMembers', 'subsectionMembers');
            }
        }
    @endphp

    {{-- Section Cards --}}
    @foreach($validSections as $section)
        @php
            $sectionKey = $section['sectionKey'];
            $sectionData = $section['sectionData'];
            $mainMembers = $section['mainMembers'];
            $subsectionMembers = $section['subsectionMembers'];
        @endphp

        <div class="glass-effect rounded-3xl p-6 lg:p-8 card-hover shadow-lg">
            <!-- Section Header -->
            <div class="flex items-center mb-6 sm:mb-7 md:mb-8">
                <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-lg sm:rounded-xl bg-white/70 flex items-center justify-center mr-2 sm:mr-3 md:mr-4 shadow-md flex-shrink-0">
                    {!! getSectionIcon($sectionData['icon'], 'text-' . $sectionData['color'] . '-600') !!}
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg sm:text-xl md:text-2xl font-bold gradient-text leading-tight mb-1 sm:mb-2">{{ $sectionData['title'] }}</h3>
                    <div class="flex items-center text-xs sm:text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-4 sm:w-4 mr-1 text-{{ $sectionData['color'] }}-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        {{ $mainMembers->count() + $subsectionMembers->flatten()->count() }} anggota
                    </div>
                </div>
            </div>

            {{-- Main Section Member Cards --}}
            @if($mainMembers->isNotEmpty())
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 sm:gap-4 md:gap-5 lg:gap-6 mb-6 sm:mb-7 md:mb-8">
                    @foreach($mainMembers as $member)
                        <div class="bg-white rounded-xl sm:rounded-2xl p-3 sm:p-4 md:p-5 lg:p-6 shadow-md hover:shadow-xl transition-all duration-300 group hover:-translate-y-1">
                            <!-- Profile Photo -->
                            <div class="flex justify-center mb-3 sm:mb-4">
                                <div class="rounded-xl sm:rounded-2xl overflow-hidden">
                                    <x-profile-photo :member="$member" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-xl sm:rounded-2xl" />
                                </div>
                            </div>
                            
                            <!-- Member Info -->
                            <div class="text-center">
                                <h4 class="font-bold text-gray-800 text-xs sm:text-sm md:text-base mb-1.5 sm:mb-2 group-hover:text-{{ $sectionData['color'] }}-700 transition-colors leading-tight line-clamp-2">
                                    {{ $member->name }}
                                </h4>
                                <p class="text-xs sm:text-sm text-{{ $sectionData['color'] }}-700 font-semibold bg-gradient-to-r {{ $sectionData['gradient'] }} px-2 sm:px-3 md:px-4 py-1 sm:py-1.5 md:py-2 rounded-full line-clamp-2">
                                    {{ $member->position }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            {{-- POKJA Subsections --}}
            @if($subsectionMembers->isNotEmpty())
                <div class="space-y-6">
                    @foreach($pokjaSections as $pokjaKey => $pokjaTitle)
                        @if($subsectionMembers->has($pokjaKey))
                            <div class="bg-gradient-to-r {{ $sectionData['gradient'] }} rounded-xl sm:rounded-2xl p-4 sm:p-5 md:p-6 border border-gray-100/50">
                                <h4 class="text-base sm:text-lg font-bold text-{{ $sectionData['color'] }}-700 mb-4 sm:mb-5 md:mb-6 flex items-center">
                                    <div class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 rounded-lg sm:rounded-xl bg-white/70 flex items-center justify-center mr-2 sm:mr-2.5 md:mr-3 shadow-sm flex-shrink-0">
                                        <span class="text-base sm:text-lg font-bold text-{{ $sectionData['color'] }}-600">{{ substr($pokjaTitle, -1) }}</span>
                                    </div>
                                    {{ $pokjaTitle }}
                                </h4>
                                
                                <!-- POKJA Member Cards -->
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 sm:gap-3.5 md:gap-4">
                                    @foreach($subsectionMembers[$pokjaKey] as $member)
                                        <div class="bg-white/95 backdrop-blur-sm rounded-lg sm:rounded-xl p-3 sm:p-4 md:p-5 shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-white hover:-translate-y-1">
                                            <!-- Profile Photo -->
                                            <div class="flex justify-center mb-2 sm:mb-3">
                                                <div class="rounded-lg sm:rounded-xl overflow-hidden">
                                                    <x-profile-photo :member="$member" class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-lg sm:rounded-xl" />
                                                </div>
                                            </div>
                                            
                                            <!-- Member Info -->
                                            <div class="text-center">
                                                <h5 class="font-semibold text-gray-800 text-xs sm:text-sm mb-1.5 sm:mb-2 group-hover:text-{{ $sectionData['color'] }}-700 transition-colors leading-tight line-clamp-2">
                                                    {{ $member->name }}
                                                </h5>
                                                <p class="text-[10px] sm:text-xs text-{{ $sectionData['color'] }}-600 font-medium bg-white/60 px-2 sm:px-3 py-0.5 sm:py-1 rounded-full line-clamp-2">
                                                    {{ $member->position }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach

    {{-- Empty State --}}
    @if(\App\Models\OrganizationStructure::active()->count() === 0)
        <div class="glass-effect rounded-2xl sm:rounded-3xl p-8 sm:p-10 md:p-12 text-center border border-pink-100/30">
            <div class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <h3 class="text-lg sm:text-xl md:text-2xl font-heading text-gray-600 mb-2">Struktur Organisasi Belum Tersedia</h3>
            <p class="text-sm sm:text-base text-gray-500">Data akan ditampilkan setelah dikelola melalui panel admin.</p>
        </div>
    @endif
</div>