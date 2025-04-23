<div class="mb-12">
    <x-ui.section-title :title="$title" />

    <div class="bg-white rounded-xl shadow-sm p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Program Pokok PKK merupakan 10 program utama yang menjadi panduan dalam menjalankan berbagai kegiatan PKK di seluruh Indonesia. Program ini bertujuan untuk meningkatkan kesejahteraan keluarga dan masyarakat melalui pendekatan yang komprehensif.
                </p>
                <div class="bg-[#5A92C9]/5 rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <p class="text-center text-gray-700 italic">
                        "Sepuluh Program Pokok PKK adalah pedoman untuk mencapai kesejahteraan keluarga dan masyarakat yang mandiri, sehat, dan sejahtera."
                    </p>
                </div>
            </div>
            <div>
                <div class="bg-[#5A92C9]/5 rounded-lg p-6">
                    <ol class="space-y-3 text-gray-700">
                        @foreach($programs as $index => $program)
                            <li class="bg-white p-3 rounded-lg shadow-sm hover:shadow-md transition-shadow flex items-start">
                                <span class="w-6 h-6 rounded-full bg-[#5A92C9] text-white flex items-center justify-center mr-3 flex-shrink-0">{{ $index + 1 }}</span>
                                <span>{{ $program }}</span>
                            </li>
                        @endforeach
                    </ol>
                    <div class="mt-6 flex justify-center">
                        <a href="{{ $learnMoreLink }}" class="inline-flex items-center px-4 py-2 bg-[#5A92C9] text-white rounded-full hover:bg-[#5A92C9]/80 transition">
                            <span>{{ $learnMoreText }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
