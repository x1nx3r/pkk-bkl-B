<x-layout.app title="{{ $pageSection->title }} - Program Kerja" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-16 max-w-4xl">
        <!-- Back Navigation -->


        <x-ui.section-title :title="$pageSection->title" />

        <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
            
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
                ">
                    {!! $pageSection->content !!}
                </div>
            </div>
        </div>
    </div>
</x-layout.app>