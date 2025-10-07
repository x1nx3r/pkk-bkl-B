<div class="glass-effect rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 mb-8 sm:mb-10 md:mb-12 card-hover">
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl gradient-text font-heading mb-3 sm:mb-4 leading-tight">{{ $title }}</h1>
    <h2 class="text-lg sm:text-xl md:text-2xl text-gray-600 mb-4 sm:mb-5 md:mb-6 font-heading">{{ $subtitle }}</h2>
    <p class="text-sm sm:text-base md:text-lg text-gray-700 mb-6 sm:mb-7 md:mb-8 max-w-3xl leading-relaxed">{{ $description }}</p>

    <!-- Featured Content -->
    <div class="mt-6 sm:mt-8 md:mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
        {{ $slot }}
    </div>
</div>
