<x-layout.app title="{{ $pageSection->title }} - Visi & Misi" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-16 max-w-4xl">
        <x-ui.section-title :title="$pageSection->title" />

        <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
            
            <div class="prose prose-lg lg:prose-xl max-w-none">
                {!! $pageSection->content !!}
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('visi-misi') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-gradient-to-r from-pink-500 to-purple-600 text-white hover:from-pink-600 hover:to-purple-700 transition-colors duration-200 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Visi & Misi
            </a>
        </div>
    </div>
</x-layout.app>
