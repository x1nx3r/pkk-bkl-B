{{--
    This Blade template dynamically renders an organizational structure page.
    It fetches data from the `OrganizationStructure` model and groups it into sections and subsections (POKJA).
--}}

@php
    // Defines the main sections of the organization structure.
    $sections = [
        'struktur_utama' => 'Struktur Utama',
        'bidang_1' => 'Bidang I – Pembinaan Karakter Keluarga',
        'bidang_2' => 'Bidang II – Pendidikan dan Peningkatan Ekonomi Keluarga',
        'bidang_3' => 'Bidang III – Ketua Bidang Penguatan Ketahanan Pangan',
        'bidang_4' => 'Bidang IV – Kesehatan Keluarga dan Lingkungan',
    ];

    // Defines the subsections, mapping keys to their display titles.
    $pokjaSections = [
        'pokja_1' => 'POKJA I',
        'pokja_2' => 'POKJA II',
        'pokja_3' => 'POKJA III',
        'pokja_4' => 'POKJA IV',
    ];
@endphp

<div>
    <div class="space-y-8">
        {{-- Loop through each main section to display its members --}}
        @foreach($sections as $sectionKey => $sectionTitle)
            @php
                // Fetch members for the main section (those without a subsection).
                $mainMembers = \App\Models\OrganizationStructure::active()
                    ->where('section', $sectionKey)
                    ->whereNull('subsection')
                    ->ordered()
                    ->get();

                // Fetch and group members belonging to subsections (POKJA).
                $subsectionMembers = \App\Models\OrganizationStructure::active()
                    ->where('section', $sectionKey)
                    ->whereNotNull('subsection')
                    ->ordered()
                    ->get()
                    ->groupBy('subsection');
            @endphp

            {{-- Only display the section if it has main members or subsection members --}}
            @if($mainMembers->isNotEmpty() || $subsectionMembers->isNotEmpty())
                <div>
                    <h4 class="text-xl font-bold text-[#5A92C9] mb-3">{{ $sectionTitle }}</h4>

                    {{-- Display the table for main section members --}}
                    @if($mainMembers->isNotEmpty())
                        <div class="overflow-x-auto mb-4">
                            <table class="min-w-full bg-white rounded-lg shadow-sm">
                                <thead>
                                    <tr class="bg-[#5A92C9]/10">
                                        <th class="py-3 px-4 text-left font-semibold text-gray-700">Jabatan</th>
                                        <th class="py-3 px-4 text-left font-semibold text-gray-700">Nama</th>
                                        <th class="py-3 px-4 text-left font-semibold text-gray-700">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mainMembers as $index => $member)
                                        <tr class="{{ $index % 2 === 0 ? 'border-b border-gray-200' : 'border-b border-gray-200 bg-gray-50' }}">
                                            <td class="py-3 px-4 text-gray-700">{{ $member->position }}</td>
                                            <td class="py-3 px-4 text-gray-700">{{ $member->name }}</td>
                                            <td class="py-3 px-4">
                                                <x-profile-photo :member="$member" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    {{-- Display tables for each subsection (POKJA) if they exist --}}
                    @if($subsectionMembers->isNotEmpty())
                        @foreach($pokjaSections as $pokjaKey => $pokjaTitle)
                            @if($subsectionMembers->has($pokjaKey))
                                <div class="ml-4 mb-4">
                                    <h5 class="text-lg font-bold text-gray-700 mb-2">{{ $pokjaTitle }}</h5>
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full bg-white rounded-lg shadow-sm">
                                            <thead>
                                                <tr class="bg-[#5A92C9]/10">
                                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Jabatan</th>
                                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Nama</th>
                                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($subsectionMembers[$pokjaKey] as $index => $member)
                                                    <tr class="{{ $index % 2 === 0 ? 'border-b border-gray-200' : 'border-b border-gray-200 bg-gray-50' }}">
                                                        <td class="py-3 px-4 text-gray-700">{{ $member->position }}</td>
                                                        <td class="py-3 px-4 text-gray-700">{{ $member->name }}</td>
                                                        <td class="py-3 px-4">
                                                            <x-profile-photo :member="$member" />
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endif
        @endforeach

        {{-- Display a message if no organizational data is available at all --}}
        @if(\App\Models\OrganizationStructure::active()->count() === 0)
            <div class="text-center py-8">
                <div class="bg-gray-100 rounded-lg p-6">
                    <p class="text-gray-600">Struktur organisasi belum tersedia.</p>
                    <p class="text-sm text-gray-500 mt-2">Data akan ditampilkan setelah dikelola melalui panel admin.</p>
                </div>
            </div>
        @endif
    </div>
</div>