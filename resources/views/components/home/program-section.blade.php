<div class="mb-8 sm:mb-10 md:mb-12">
    <x-ui.section-title :title="$title" />

    <div class="bg-white rounded-lg sm:rounded-xl shadow-sm p-4 sm:p-6 md:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 md:gap-8">
            <div class="flex flex-col justify-center">
                <p class="text-sm sm:text-base text-gray-700 mb-4 sm:mb-5 md:mb-6 leading-relaxed">
                    Program Pokok PKK merupakan 10 program utama yang menjadi panduan dalam menjalankan berbagai kegiatan PKK di seluruh Indonesia. Program ini bertujuan untuk meningkatkan kesejahteraan keluarga dan masyarakat melalui pendekatan yang komprehensif.
                </p>
                <div class="bg-[#5A92C9]/5 rounded-md sm:rounded-lg p-3 sm:p-4">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <p class="text-center text-xs sm:text-sm md:text-base text-gray-700 italic leading-relaxed">
                        "Sepuluh Program Pokok PKK adalah pedoman untuk mencapai kesejahteraan keluarga dan masyarakat yang mandiri, sehat, dan sejahtera."
                    </p>
                </div>
            </div>
            <div>
                <div class="bg-[#5A92C9]/5 rounded-md sm:rounded-lg p-4 sm:p-5 md:p-6">
                    <ol class="space-y-2 sm:space-y-2.5 md:space-y-3 text-gray-700">
                        @foreach($programs as $index => $program)
                            <li class="bg-white p-2.5 sm:p-3 rounded-md sm:rounded-lg shadow-sm hover:shadow-md transition-shadow flex items-start">
                                <span class="w-5 h-5 sm:w-6 sm:h-6 text-xs sm:text-sm rounded-full bg-[#5A92C9] text-white flex items-center justify-center mr-2 sm:mr-2.5 md:mr-3 flex-shrink-0">{{ $index + 1 }}</span>
                                <span class="text-xs sm:text-sm md:text-base">{{ $program }}</span>
                            </li>
                        @endforeach
                    </ol>
                    <div class="mt-4 sm:mt-5 md:mt-6 flex justify-center">
                        <a href="{{ $learnMoreLink }}" class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-[#5A92C9] text-white text-xs sm:text-sm md:text-base rounded-full hover:bg-[#5A92C9]/80 transition">
                            <span>{{ $learnMoreText }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1.5 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
