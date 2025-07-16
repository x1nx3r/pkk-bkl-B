<x-layout.app
    title="Pokja & Sekretariat - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Alpine.js for collapsible functionality -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Profile Header -->


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <div class="mb-16">
            <x-ui.section-title title="Progam Kerja TP-PKK" />
        @foreach($pageSections as $section)
                <!-- Combined Section Title and Toggle -->
                <div class="flex flex-col bg-[#5A92C9] text-white px-4 py-3 rounded-t-lg cursor-pointer"
                     @click="open = !open">
                    <h1 class="text-2xl font-bold text-center mb-2">{{ $section->title }}</h1>
                    <div class="flex items-center justify-center">
                        <span class="text-sm mr-2" x-text="open ? 'Sembunyikan' : 'Tampilkan'"></span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 transform transition-transform duration-300"
                             :class="{'rotate-180': open}"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="bg-white rounded-b-xl shadow-sm">
                    <!-- Content Area -->
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-8">
                        <div class="prose max-w-none">
                            <div class="[&>h2]:text-2xl [&>h2]:font-bold [&>h2]:text-[#5A92C9] [&>h2]:mb-3 [&>h2]:text-center
                                        [&>ol]:space-y-6 [&>ol]:list-none [&>ol]:pl-0
                                        [&>ol>li]:bg-[#5A92C9]/5 [&>ol>li]:p-6 [&>ol>li]:rounded-lg [&>ol>li]:pl-16 [&>ol>li]:relative
                                        [&>ol>li:before]:content-[counter(list-item)] [&>ol>li:before]:counter-increment-[list-item]
                                        [&>ol>li:before]:absolute [&>ol>li:before]:left-6 [&>ol>li:before]:flex
                                        [&>ol>li:before]:items-center [&>ol>li:before]:justify-center
                                        [&>ol>li:before]:h-8 [&>ol>li:before]:w-8 [&>ol>li:before]:rounded-full
                                        [&>ol>li:before]:bg-[#5A92C9] [&>ol>li:before]:text-white
                                        [&>ol>li:before]:font-bold [&>ol>li:before]:top-6
                                        [&>div]:space-y-6
                                        [&_h3]:text-lg [&_h3]:font-semibold [&_h3]:text-[#5A92C9] [&_h3]:mb-2
                                        [&_h4]:text-lg [&_h4]:font-semibold [&_h4]:text-[#5A92C9] [&_h4]:mb-3
                                        [&_h5]:text-lg [&_h5]:font-semibold [&_h5]:text-[#5A92C9] [&_h5]:mb-2
                                        [&_p]:text-gray-700
                                        [&_p>em]:italic [&_p>em]:text-center [&_p>em]:block [&_p>em]:text-xl
                                        [&_ul]:list-disc [&_ul]:pl-5 [&_ul]:space-y-2
                                        [&_li]:text-gray-700
                                        [&_blockquote]:not-italic [&_blockquote]:font-normal
                                        [&_blockquote]:text-gray-700 [&_blockquote]:border-none
                                        [&_blockquote]:p-0 [&_blockquote]:m-0">
                                {!! $section->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</x-layout.app>
