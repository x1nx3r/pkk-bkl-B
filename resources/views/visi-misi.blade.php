<x-layout.app
    title="Visi & Misi - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">


    <main class="container mx-auto px-4 py-4 max-w-6xl">
    <x-ui.section-title title="Visi & Misi TP-PKK Kabupaten Bangkalan" />    
    @foreach($pageSections as $section)
        <div class="mb-16">
            <div class="mb-16">
                <x-ui.section-title title="{{ $section->title }}" />

                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="prose max-w-none">
                        <!-- Enhanced styling with increased spacing for numbered lists -->
                        <div class="
                            [&>h2]:text-2xl
                            [&>h2]:font-bold
                            [&>h2]:text-[#5A92C9]
                            [&>h2]:mb-3
                            [&>h2]:text-center

                            [&>ol]:space-y-6
                            [&>ol]:list-none
                            [&>ol]:pl-0
                            [&>ol>li]:bg-[#5A92C9]/5
                            [&>ol>li]:p-6
                            [&>ol>li]:rounded-lg
                            [&>ol>li]:pl-16
                            [&>ol>li]:relative

                            [&>ol>li:before]:content-[counter(list-item)]
                            [&>ol>li:before]:counter-increment-[list-item]
                            [&>ol>li:before]:absolute
                            [&>ol>li:before]:left-6
                            [&>ol>li:before]:flex
                            [&>ol>li:before]:items-center
                            [&>ol>li:before]:justify-center
                            [&>ol>li:before]:h-8
                            [&>ol>li:before]:w-8
                            [&>ol>li:before]:rounded-full
                            [&>ol>li:before]:bg-[#5A92C9]
                            [&>ol>li:before]:text-white
                            [&>ol>li:before]:font-bold
                            [&>ol>li:before]:top-6

                            [&>div]:space-y-6

                            [&_h3]:text-lg
                            [&_h3]:font-semibold
                            [&_h3]:text-[#5A92C9]
                            [&_h3]:mb-2

                            [&_h4]:text-lg
                            [&_h4]:font-semibold
                            [&_h4]:text-[#5A92C9]
                            [&_h4]:mb-3

                            [&_h5]:text-lg
                            [&_h5]:font-semibold
                            [&_h5]:text-[#5A92C9]
                            [&_h5]:mb-2

                            [&_p]:text-gray-700
                            [&_p>em]:italic
                            [&_p>em]:text-center
                            [&_p>em]:block
                            [&_p>em]:text-xl

                            [&_ul]:list-disc
                            [&_ul]:pl-5
                            [&_ul]:space-y-2

                            [&_li]:text-gray-700

                            [&_blockquote]:not-italic
                            [&_blockquote]:font-normal
                            [&_blockquote]:text-gray-700
                            [&_blockquote]:border-none
                            [&_blockquote]:p-0
                            [&_blockquote]:m-0
                        ">
                            {!! $section->content !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</x-layout.app>
