<div class="bg-white rounded-xl shadow-sm p-8 mb-12">
    <h1 class="text-3xl font-bold text-[#5A92C9] mb-4">{{ $title }}</h1>
    <h2 class="text-xl text-gray-600 mb-6 font-light">{{ $subtitle }}</h2>
    <p class="text-gray-700 mb-8 leading-relaxed max-w-3xl">{{ $description }}</p>

    <!-- Featured Content -->
    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        {{ $slot }}
    </div>
</div>
