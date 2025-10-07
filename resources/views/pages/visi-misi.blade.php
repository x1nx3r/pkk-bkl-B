<x-layout.app
    title="Visi & Misi - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-6 py-12 max-w-7xl">
        <x-ui.section-title title="Visi & Misi TP-PKK Kabupaten Bangkalan" icon="vision" />
        
        @foreach($pageSections as $section)
            <section id="{{ $section->section_key }}" tabindex="-1" role="region" aria-label="{{ $section->title }}" class="mb-16">
                <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
                    <!-- Decorative Elements -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 rounded-full bg-gradient-to-br from-blue-200/30 to-pink-200/30 blur-lg"></div>
                    
                    <!-- Section Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-4">{{ $section->title }}</h3>
                        <div class="w-20 h-1 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 mx-auto rounded-full"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="prose prose-lg lg:prose-xl max-w-none">
                        <div class="
                            [&>h1]:text-3xl
                            [&>h1]:font-bold
                            [&>h1]:gradient-text
                            [&>h1]:font-heading
                            [&>h1]:mb-6
                            [&>h2]:text-2xl
                            [&>h2]:font-bold
                            [&>h2]:text-pink-700
                            [&>h2]:mb-4
                            [&>h2]:mt-8
                            [&>h3]:text-xl
                            [&>h3]:font-semibold
                            [&>h3]:text-purple-600
                            [&>h3]:mb-3
                            [&>h4]:text-lg
                            [&>h4]:font-semibold
                            [&>h4]:text-pink-600
                            [&>h4]:mb-2
                            [&>p]:text-gray-700
                            [&>p]:leading-relaxed
                            [&>p]:mb-4
                            [&>ul]:space-y-2
                            [&>ul>li]:text-gray-700
                            [&>ol]:space-y-2
                            [&>ol>li]:text-gray-700
                            [&>blockquote]:border-l-4
                            [&>blockquote]:border-pink-300
                            [&>blockquote]:bg-gradient-to-r
                            [&>blockquote]:from-pink-50
                            [&>blockquote]:to-purple-50
                            [&>blockquote]:p-6
                            [&>blockquote]:rounded-r-2xl
                            [&>blockquote]:italic
                            [&>blockquote]:text-gray-700
                            [&>blockquote]:my-6
                            [&>div>h4]:text-xl
                            [&>div>h4]:font-bold
                            [&>div>h4]:text-purple-600
                            [&>div>h4]:mb-3
                            [&>div>p]:text-gray-700
                            [&>div>p]:leading-relaxed
                        ">
                            {!! $section->content !!}
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
</x-layout.app>
