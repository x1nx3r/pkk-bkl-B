<div class="bg-white rounded-xl shadow-sm p-6 section-animate border-t-4 border-[#5A92C9]">
    <h2 class="text-xl font-semibold text-[#5A92C9] mb-3">{{ $title }}</h2>
    <p class="text-gray-700 leading-relaxed">{{ $slot }}</p>

    @if(isset($link))
    <div class="mt-4">
        <a href="{{ $link }}" class="text-[#5A92C9] hover:text-[#A0D0FF] font-medium inline-flex items-center">
            {{ $linkText ?? 'Selengkapnya' }}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    @endif
</div>
