<div>
    <div class="grid grid-cols-1 gap-8">
        @foreach($values as $value)
        <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start">
                <div class="mr-4 bg-[#5A92C9]/10 p-3 rounded-full flex-shrink-0">
                    <svg class="h-8 w-8 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $value['icon'] }}" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-[#5A92C9] mb-2">{{ $value['title'] }}</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $value['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
