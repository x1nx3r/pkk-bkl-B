<div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-[#5A92C9] hover:shadow-md transition-shadow">
    <div class="flex items-start">
        <div class="flex-shrink-0 bg-[#5A92C9] text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg mr-4">
            {{ $number }}
        </div>
        <div>
            <h3 class="text-xl font-semibold text-[#5A92C9] mb-3">{{ $title }}</h3>
            <div class="text-gray-700">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
