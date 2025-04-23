<div>
    <h3 class="text-2xl font-bold text-[#5A92C9] mb-6">Struktur Kepengurusan</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
        @foreach($leaders as $leader)
        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
            <div class="aspect-square overflow-hidden bg-[#5A92C9]/10">
                <img
                    src="{{ $leader['photo'] }}"
                    alt="{{ $leader['name'] }}"
                    class="w-full h-full object-cover"
                >
            </div>
            <div class="p-4">
                <h4 class="font-bold text-lg text-[#5A92C9]">{{ $leader['name'] }}</h4>
                <p class="text-sm font-semibold text-gray-600 mb-2">{{ $leader['position'] }}</p>
                <p class="text-gray-700 text-sm">{{ $leader['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
