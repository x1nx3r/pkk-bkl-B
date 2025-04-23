<div class="mb-10">
    @if($alignment === 'left')
        <div class="flex flex-col md:flex-row items-start gap-6">
            <div class="md:w-1/4 flex justify-center mb-4 md:mb-0">
                <div class="{{ $iconBg }} p-6 rounded-full">
                    <svg class="h-16 w-16 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $iconPath }}" />
                    </svg>
                </div>
            </div>
            <div class="md:w-3/4">
                <h3 class="text-2xl font-bold text-[#5A92C9] mb-3">{{ $title }}</h3>
                <div class="prose prose-blue max-w-none text-gray-700">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @else
        <div class="flex flex-col md:flex-row-reverse items-start gap-6">
            <div class="md:w-1/4 flex justify-center mb-4 md:mb-0">
                <div class="{{ $iconBg }} p-6 rounded-full">
                    <svg class="h-16 w-16 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $iconPath }}" />
                    </svg>
                </div>
            </div>
            <div class="md:w-3/4">
                <h3 class="text-2xl font-bold text-[#5A92C9] mb-3">{{ $title }}</h3>
                <div class="prose prose-blue max-w-none text-gray-700">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @endif
</div>
