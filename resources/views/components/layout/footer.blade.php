<footer class="bg-gradient-to-br from-pink-600 via-purple-600 to-blue-600 text-white py-8 sm:py-12 md:py-14 lg:py-16 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-64 h-64 rounded-full bg-white/20 -translate-x-32 -translate-y-32"></div>
        <div class="absolute top-1/2 right-0 w-48 h-48 rounded-full bg-white/10 translate-x-24"></div>
        <div class="absolute bottom-0 left-1/3 w-56 h-56 rounded-full bg-white/15 translate-y-32"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 sm:gap-10 md:gap-12 mb-8 sm:mb-10 md:mb-12">
            <!-- Organization Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-4 sm:mb-5 md:mb-6">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-xl sm:rounded-2xl bg-white/20 backdrop-blur-sm p-2 sm:p-2.5 md:p-3 mr-3 sm:mr-3.5 md:mr-4 flex-shrink-0">
                        <img src="{{ asset('images/logo-pkk.png') }}" alt="Logo PKK" class="w-full h-full object-contain">
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="text-base sm:text-lg md:text-xl text-white mb-0.5 sm:mb-1 font-heading">{{ $orgName ?? 'PKK Kabupaten Bangkalan' }}</h3>
                        <p class="text-xs sm:text-sm text-white/80">Pemberdayaan & Kesejahteraan Keluarga</p>
                    </div>
                </div>
                
                <p class="text-sm sm:text-base text-white/90 mb-4 sm:mb-5 md:mb-6 max-w-2xl leading-relaxed">
                    Tim Penggerak PKK Kabupaten Bangkalan berkomitmen untuk memberdayakan keluarga menuju kehidupan yang sehat, sejahtera, dan mandiri melalui program-program inovatif dan berkelanjutan.
                </p>
                
                <div class="space-y-3 sm:space-y-3.5 md:space-y-4">
                    <div class="flex items-start space-x-2 sm:space-x-2.5 md:space-x-3">
                        <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-md sm:rounded-lg bg-white/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <p class="text-white/95 text-sm sm:text-base leading-relaxed">{{ $address ?? 'Jl. Letnan Abdullah No. 1, Bangkalan, Jawa Timur 69116' }}</p>
                    </div>
                    
                    <div class="flex items-start space-x-2 sm:space-x-2.5 md:space-x-3">
                        <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-md sm:rounded-lg bg-white/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="text-white/95 text-sm sm:text-base break-all">{{ $email ?? 'info@pkk-bangkalan.go.id' }}</p>
                    </div>
                    
                    <div class="flex items-start space-x-2 sm:space-x-2.5 md:space-x-3">
                        <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-md sm:rounded-lg bg-white/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <p class="text-white/95 text-sm sm:text-base">{{ $phone ?? '(031) 3061865' }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links & Social -->
            <div>
                <h4 class="font-bold text-lg sm:text-xl mb-4 sm:mb-5 md:mb-6 font-heading">Ikuti Kami</h4>
                <div class="flex space-x-3 sm:space-x-4 mb-6 sm:mb-7 md:mb-8">
                    <a href="{{ $facebookLink ?? '#' }}" class="w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 rounded-xl sm:rounded-2xl bg-white/20 backdrop-blur-sm hover:bg-white/30 flex items-center justify-center transition-colors duration-200 flex-shrink-0">
                        <svg class="h-5 w-5 sm:h-5.5 sm:w-5.5 md:h-6 md:w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="{{ $instagramLink ?? 'https://www.instagram.com/tppkkbangkalan/' }}" class="w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 rounded-xl sm:rounded-2xl bg-white/20 backdrop-blur-sm hover:bg-white/30 flex items-center justify-center transition-colors duration-200 flex-shrink-0">
                        <svg class="h-5 w-5 sm:h-5.5 sm:w-5.5 md:h-6 md:w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                    </a>
                    <a href="{{ $youtubeLink ?? '#' }}" class="w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 rounded-xl sm:rounded-2xl bg-white/20 backdrop-blur-sm hover:bg-white/30 flex items-center justify-center transition-colors duration-200 flex-shrink-0">
                        <svg class="h-5 w-5 sm:h-5.5 sm:w-5.5 md:h-6 md:w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                </div>
                
                <div class="space-y-2 sm:space-y-3">
                    <h5 class="font-semibold text-base sm:text-lg font-heading">Tautan Cepat</h5>
                    <div class="space-y-1.5 sm:space-y-2">
                        <a href="{{ route('profil') }}" class="block text-white/80 hover:text-white transition-colors text-xs sm:text-sm py-0.5">Profil PKK</a>
                        <a href="{{ route('visi-misi') }}" class="block text-white/80 hover:text-white transition-colors text-xs sm:text-sm py-0.5">Visi & Misi</a>
                        <a href="{{ route('berita.index') }}" class="block text-white/80 hover:text-white transition-colors text-xs sm:text-sm py-0.5">Berita Terkini</a>
                        <a href="{{ route('kegiatan.index') }}" class="block text-white/80 hover:text-white transition-colors text-xs sm:text-sm py-0.5">Kegiatan</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Border -->
        <div class="border-t border-white/20 pt-6 sm:pt-7 md:pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <p class="text-xs sm:text-sm md:text-base text-white/80 mb-3 md:mb-0">
                    &copy; {{ date('Y') }} {{ $orgName ?? 'PKK Kabupaten Bangkalan' }}. Hak cipta dilindungi undang-undang.
                </p>
                <p class="text-xs sm:text-sm text-white/60">
                    Dibuat dengan ❤️ untuk keluarga Indonesia
                </p>
            </div>
        </div>
    </div>
</footer>
