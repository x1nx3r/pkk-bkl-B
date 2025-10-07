@props(['beritas', 'autoplay' => true, 'interval' => 5000])

<div x-data="{
    activeSlide: 0,
    beritas: {{ $beritas->toJson() }},
    autoplay: {{ $autoplay ? 'true' : 'false' }},
    interval: {{ $interval }},
    init() {
        if (this.autoplay && this.beritas.length > 1) {
            this.autoplayInterval = setInterval(() => {
                this.nextSlide();
            }, this.interval);
        }
    },
    nextSlide() {
        this.activeSlide = this.activeSlide === this.beritas.length - 1 ? 0 : this.activeSlide + 1;
    },
    prevSlide() {
        this.activeSlide = this.activeSlide === 0 ? this.beritas.length - 1 : this.activeSlide - 1;
    },
    goToSlide(index) {
        this.activeSlide = index;
    },
    destroy() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
    },
    stripTags(html) {
        const tmp = document.createElement('DIV');
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || '';
    },
    getExcerpt(content, length = 150) {
        const cleanText = this.stripTags(content);
        return cleanText.length > length ? cleanText.substring(0, length) + '...' : cleanText;
    }
}"
@if($beritas->count() > 0)
class="relative overflow-hidden w-full h-[300px] sm:h-[400px] md:h-[450px] lg:h-[500px] glass-effect rounded-2xl sm:rounded-3xl border border-pink-100/30 mb-6 sm:mb-7 md:mb-8">
    <!-- Slides -->
    <template x-for="(berita, index) in beritas" :key="berita.id">
        <div x-show="activeSlide === index"
             x-transition:enter="transition ease-out duration-500"
             x-transition:enter-start="opacity-0 transform translate-x-full"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100 transform translate-x-0"
             x-transition:leave-end="opacity-0 transform -translate-x-full"
             class="absolute inset-0 rounded-2xl sm:rounded-3xl overflow-hidden">
            
            <!-- Featured Image -->
            <div class="absolute inset-0">
                <img :src="berita.featured_image ? berita.featured_image : '/images/b.jpg'" 
                     :alt="berita.judul" 
                     class="object-cover w-full h-full">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            </div>
            
            <!-- Content -->
            <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 md:p-7 lg:p-8 text-white">
                <div class="max-w-4xl">
                    <!-- Kategori -->
                    <div class="mb-2 sm:mb-2.5 md:mb-3">
                        <span class="text-[10px] sm:text-xs md:text-sm bg-gradient-to-r from-pink-400 to-purple-400 px-2 sm:px-2.5 md:px-3 py-0.5 sm:py-1 rounded-full text-white/90 font-medium">
                            BERITA TERKINI
                        </span>
                    </div>
                    
                    <!-- Title -->
                    <h2 x-text="berita.judul" class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-heading font-bold text-white mb-2 sm:mb-3 md:mb-4 leading-tight line-clamp-2"></h2>
                    
                    <!-- Excerpt -->
                    <p x-text="getExcerpt(berita.konten, 150)" 
                       class="text-xs sm:text-sm md:text-base text-white/90 mb-2 sm:mb-3 md:mb-4 leading-relaxed max-w-2xl line-clamp-2 sm:line-clamp-3 hidden sm:block"></p>
                    
                    <!-- Meta Information -->
                    <div class="flex items-center gap-2 sm:gap-3 md:gap-4 text-[10px] sm:text-xs text-white/80 mb-2 sm:mb-3 md:mb-4">
                        <div class="flex items-center gap-1 sm:gap-1.5 md:gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-3.5 sm:w-3.5 md:h-4 md:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span x-text="new Date(berita.created_at).toLocaleDateString('id-ID', {
                                year: 'numeric',
                                month: 'long', 
                                day: 'numeric'
                            })"></span>
                        </div>
                        <div class="hidden sm:flex items-center gap-1 sm:gap-1.5 md:gap-2" x-show="berita.user && berita.user.name">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-3.5 sm:w-3.5 md:h-4 md:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span x-text="berita.user.name"></span>
                        </div>
                    </div>
                    
                    <!-- Read More Button -->
                    <a :href="`/berita/${berita.slug}`" 
                       class="inline-flex items-center gap-1.5 sm:gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white px-3 py-1.5 sm:px-4 sm:py-2 md:px-5 md:py-2.5 lg:px-6 lg:py-3 rounded-lg sm:rounded-xl md:rounded-2xl hover:from-pink-600 hover:to-purple-700 transition-colors duration-200 text-xs sm:text-sm md:text-base font-medium">
                        <span class="hidden sm:inline">Baca Selengkapnya</span>
                        <span class="sm:hidden">Baca</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-3.5 sm:w-3.5 md:h-4 md:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Arrows -->
    <template x-if="beritas.length > 1">
        <div>
            <!-- Previous Button -->
            <button @click="prevSlide()" 
                    class="absolute left-2 sm:left-3 md:left-4 top-1/2 transform -translate-y-1/2 w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-sm hover:bg-white/30 transition-colors duration-200 flex items-center justify-center border border-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            
            <!-- Next Button -->
            <button @click="nextSlide()" 
                    class="absolute right-2 sm:right-3 md:right-4 top-1/2 transform -translate-y-1/2 w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-sm hover:bg-white/30 transition-colors duration-200 flex items-center justify-center border border-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </template>

    <!-- Dots Indicator -->
    <template x-if="beritas.length > 1">
        <div class="absolute bottom-3 sm:bottom-4 md:bottom-5 lg:bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 sm:space-x-2.5 md:space-x-3">
            <template x-for="(berita, index) in beritas" :key="berita.id">
                <button @click="goToSlide(index)"
                        :class="{ 
                            'bg-white scale-125': activeSlide === index, 
                            'bg-white/50 hover:bg-white/70': activeSlide !== index 
                        }"
                        class="h-2 w-2 sm:h-2.5 sm:w-2.5 md:h-3 md:w-3 rounded-full focus:outline-none transition-all duration-300 border border-white/30"></button>
            </template>
        </div>
    </template>
</div>
@else
<!-- Fallback when no berita available -->
<div class="w-full h-[300px] sm:h-[400px] md:h-[450px] lg:h-[500px] glass-effect rounded-2xl sm:rounded-3xl border border-pink-100/30 mb-6 sm:mb-7 md:mb-8 flex items-center justify-center">
    <div class="text-center text-gray-500 px-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 sm:h-14 sm:w-14 md:h-16 md:w-16 mx-auto mb-3 sm:mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
        </svg>
        <p class="text-sm sm:text-base md:text-lg text-gray-400">Belum ada berita tersedia</p>
    </div>
</div>
@endif