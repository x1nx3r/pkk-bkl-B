<div class="relative overflow-hidden bg-[#5A92C9] mb-12 rounded-lg shadow-md" style="height: 300px;">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $backgroundImage }}'); opacity: 0.3;"></div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $title }}</h1>
        <p class="text-xl text-white/90 max-w-3xl">{{ $subtitle }}</p>
    </div>
</div>
