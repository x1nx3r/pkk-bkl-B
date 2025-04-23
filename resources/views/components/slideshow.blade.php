<div x-data="{
    activeSlide: 0,
    slides: {{ json_encode($slides) }},
    autoplay: {{ $autoplay ? 'true' : 'false' }},
    interval: {{ $interval }},
    init() {
        if (this.autoplay) {
            this.autoplayInterval = setInterval(() => {
                this.nextSlide();
            }, this.interval);
        }
    },
    nextSlide() {
        this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1;
    },
    prevSlide() {
        this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1;
    },
    goToSlide(index) {
        this.activeSlide = index;
    }
}"
class="relative overflow-hidden w-full h-[500px]">
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform translate-x-full"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform translate-x-0"
             x-transition:leave-end="opacity-0 transform -translate-x-full"
             class="absolute inset-0">
            <img :src="slide.image" :alt="slide.title" class="object-cover w-full h-full">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6 text-white">
                <h2 x-text="slide.title" class="text-2xl font-bold mb-2"></h2>
                <p x-text="slide.caption" class="text-sm"></p>
            </div>
        </div>
    </template>

    <!-- Controls -->
    <div class="absolute inset-x-0 bottom-4 flex justify-center space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="goToSlide(index)"
                    :class="{ 'bg-white': activeSlide === index, 'bg-white/50': activeSlide !== index }"
                    class="h-3 w-3 rounded-full focus:outline-none transition"></button>
        </template>
    </div>

    <!-- Navigation arrows -->
    <button @click="prevSlide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button @click="nextSlide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>
