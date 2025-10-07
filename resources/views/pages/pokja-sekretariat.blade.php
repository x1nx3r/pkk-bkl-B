<x-layout.app title="Program Kerja - TP-PKK Kabupaten Bangkalan" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-12 max-w-7xl">
        <x-ui.section-title title="Program Kerja TP-PKK Kabupaten Bangkalan" icon="programs" />

        @foreach($pageSections as $index => $section)
            <section class="mb-16">
                <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
                    <!-- Decorative Elements -->
                    @if($index % 3 == 0)
                        <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
                    @elseif($index % 3 == 1)
                        <div class="absolute -bottom-4 -left-4 w-20 h-20 rounded-full bg-gradient-to-br from-purple-200/30 to-blue-200/30 blur-xl"></div>
                    @else
                        <div class="absolute -top-4 -left-4 w-16 h-16 rounded-full bg-gradient-to-br from-blue-200/30 to-pink-200/30 blur-lg"></div>
                    @endif
                    
                    <!-- Section Header -->
                    <div class="text-center mb-8">
                        <span class="inline-block px-4 py-2 rounded-full bg-gradient-to-r from-pink-100 to-purple-100 text-pink-600 font-semibold text-sm mb-4">Program {{ $index + 1 }}</span>
                        <h3 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-4">{{ $section->title }}</h3>
                        <div class="w-20 h-1 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 mx-auto rounded-full"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="prose prose-lg lg:prose-xl max-w-none">
                        <div class="
                            [&>h2]:text-2xl
                            [&>h2]:lg:text-3xl
                            [&>h2]:font-bold
                            [&>h2]:gradient-text
                            [&>h2]:font-heading
                            [&>h2]:mb-6
                            [&>h2]:text-center
                            
                            [&>h3]:text-xl
                            [&>h3]:lg:text-2xl
                            [&>h3]:font-bold
                            [&>h3]:text-pink-700
                            [&>h3]:mb-4
                            [&>h3]:mt-8
                            
                            [&>h4]:text-lg
                            [&>h4]:lg:text-xl
                            [&>h4]:font-semibold
                            [&>h4]:text-purple-600
                            [&>h4]:mb-3
                            
                            [&>p]:text-gray-700
                            [&>p]:leading-relaxed
                            [&>p]:mb-4
                            
                            [&>ol]:space-y-4
                            [&>ol]:list-none
                            [&>ol]:pl-0
                            [&>ol]:counter-reset-[list-item]
                            [&>ol>li]:bg-gradient-to-r
                            [&>ol>li]:from-pink-50
                            [&>ol>li]:to-purple-50
                            [&>ol>li]:p-6
                            [&>ol>li]:rounded-2xl
                            [&>ol>li]:pl-16
                            [&>ol>li]:relative
                            [&>ol>li]:mb-3
                            [&>ol>li]:shadow-sm
                            [&>ol>li]:border
                            [&>ol>li]:border-pink-100/50
                            
                            [&>ol>li:before]:content-[counter(list-item)]
                            [&>ol>li:before]:counter-increment-[list-item]
                            [&>ol>li:before]:absolute
                            [&>ol>li:before]:left-4
                            [&>ol>li:before]:top-4
                            [&>ol>li:before]:flex
                            [&>ol>li:before]:items-center
                            [&>ol>li:before]:justify-center
                            [&>ol>li:before]:h-8
                            [&>ol>li:before]:w-8
                            [&>ol>li:before]:rounded-xl
                            [&>ol>li:before]:bg-gradient-to-br
                            [&>ol>li:before]:from-pink-400
                            [&>ol>li:before]:to-purple-500
                            [&>ol>li:before]:text-white
                            [&>ol>li:before]:font-bold
                            [&>ol>li:before]:text-sm
                            [&>ol>li:before]:shadow-md
                            
                            [&>ul]:space-y-3
                            [&>ul]:mt-4
                            [&>ul>li]:relative
                            [&>ul>li]:pl-8
                            [&>ul>li]:text-gray-700
                            [&>ul>li]:leading-relaxed
                            [&>ul>li:before]:content-['✦']
                            [&>ul>li:before]:absolute
                            [&>ul>li:before]:left-0
                            [&>ul>li:before]:text-pink-400
                            [&>ul>li:before]:font-bold
                            
                            [&>blockquote]:border-l-4
                            [&>blockquote]:border-pink-300
                            [&>blockquote]:bg-gradient-to-r
                            [&>blockquote]:from-pink-50
                            [&>blockquote]:to-purple-50
                            [&>blockquote]:p-6
                            [&>blockquote]:rounded-r-2xl
                            [&>blockquote]:italic
                            [&>blockquote]:text-gray-700
                            [&>blockquote]:font-medium
                            [&>blockquote]:my-6
                        ">
                            {!! $section->content !!}
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
</x-layout.app>
