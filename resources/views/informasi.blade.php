<x-layout.app title="Informasi - TP-PKK Kabupaten Bangkalan" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-16 max-w-6xl">
        <x-ui.section-title title="Informasi" icon="info" />

        <section class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
            <div class="absolute -bottom-4 -left-4 w-16 h-16 rounded-full bg-gradient-to-br from-blue-200/30 to-pink-200/30 blur-lg"></div>
            
            <div class="prose prose-lg lg:prose-xl max-w-none text-center">
                <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed">
                    Halaman informasi akan segera hadir dengan berbagai update terkini mengenai kegiatan dan program TP-PKK Kabupaten Bangkalan.
                </p>
                
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-6 rounded-2xl border border-pink-100/50">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-pink-600 mb-2">Pengumuman</h3>
                        <p class="text-gray-600 text-sm">Informasi penting dan pengumuman resmi dari TP-PKK</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-6 rounded-2xl border border-purple-100/50">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-100 to-blue-100 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-purple-600 mb-2">Dokumen</h3>
                        <p class="text-gray-600 text-sm">Akses dokumen penting dan formulir yang dibutuhkan</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-blue-50 to-pink-50 p-6 rounded-2xl border border-blue-100/50">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-100 to-pink-100 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-600 mb-2">FAQ</h3>
                        <p class="text-gray-600 text-sm">Pertanyaan yang sering diajukan dan jawabannya</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout.app>