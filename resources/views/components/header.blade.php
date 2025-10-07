<header class="glass-effect sticky top-0 z-50 border-b border-pink-100/20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div x-data="{ mobileMenuOpen: false }">
            <div class="flex justify-between items-center py-4 md:py-6">
                <!-- Logo and Organization Name -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3 sm:space-x-5 group">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 md:h-16 md:w-16 rounded-xl sm:rounded-2xl bg-gradient-to-br from-pink-100 to-purple-100 p-2 sm:p-3 flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 animate-float">
                        <img src="{{ asset('images/logo-pkk.png') }}" alt="Logo PKK" class="h-8 sm:h-9 md:h-10 w-auto">
                    </div>
                    <div class="min-w-0">
                        <span class="text-base sm:text-lg md:text-xl lg:text-2xl gradient-text block font-heading leading-tight">{{ $appName }}</span>
                        <span class="text-xs sm:text-sm text-gray-600 hidden sm:block">Pemberdayaan & Kesejahteraan Keluarga</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden lg:flex items-center">
                    <div class="flex space-x-1">

                        <a href="{{ route('berita.index') }}" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body border-2 border-transparent hover:border-pink-100">Berita</a>
                        <a href="{{ route('kegiatan.index') }}" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body border-2 border-transparent hover:border-pink-100">Kegiatan</a>
                        {{-- Profil: dropdown of sections --}}
                        <div class="relative">
                            @if(isset($profilSections) && $profilSections->isNotEmpty())
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" @keydown.escape="open = false" type="button" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body flex items-center gap-2 border-2 border-transparent hover:border-pink-100">
                                        Profil
                                        <svg class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-3 w-72 backdrop-blur-xl bg-white/80 rounded-2xl shadow-2xl py-3 z-50 border border-white/30" @click.away="open = false" style="display: none;">
                                        <div class="px-6 py-4 bg-gradient-to-r from-pink-50/70 to-purple-50/70 border-b border-pink-100/30">
                                            <div class="text-subtitle gradient-text font-heading">Profil TP-PKK</div>
                                            <div class="text-overline text-gray-500 mt-1">Tentang organisasi kami</div>
                                        </div>
                                        <div class="py-2">

                                            @foreach($profilSections as $sec)
                                                <a href="{{ route('profil.section', $sec->section_key) }}" class="flex items-center gap-3 px-6 py-3 text-caption text-gray-700 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 hover:text-pink-700 transition-all duration-200 group">
                                                    <div class="w-2 h-2 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 group-hover:from-pink-400 group-hover:to-purple-400 transition-all"></div>
                                                    <span class="flex-1 font-medium">{{ $sec->title }}</span>
                                                    <svg class="h-4 w-4 text-pink-300 group-hover:text-pink-500 transform group-hover:translate-x-1 transition-all" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('profil') }}" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body border-2 border-transparent hover:border-pink-100">Profil</a>
                            @endif
                        </div>
                        
                        {{-- Visi-Misi: dropdown of sections --}}
                        <div class="relative">
                            @if(isset($visiSections) && $visiSections->isNotEmpty())
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" @keydown.escape="open = false" type="button" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body flex items-center gap-2 border-2 border-transparent hover:border-pink-100">
                                        Visi-Misi
                                        <svg class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-3 w-72 backdrop-blur-xl bg-white/80 rounded-2xl shadow-2xl py-3 z-50 border border-white/30" @click.away="open = false" style="display: none;">
                                        <div class="px-6 py-4 bg-gradient-to-r from-pink-50/70 to-purple-50/70 border-b border-pink-100/30">
                                            <div class="text-subtitle gradient-text font-heading">Visi & Misi</div>
                                            <div class="text-overline text-gray-500 mt-1">Arah dan tujuan organisasi</div>
                                        </div>
                                        <div class="py-2">

                                            @foreach($visiSections as $sec)
                                                <a href="{{ route('visi-misi.section', $sec->section_key) }}" class="flex items-center gap-3 px-6 py-3 text-caption text-gray-700 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 hover:text-pink-700 transition-all duration-200 group">
                                                    <div class="w-2 h-2 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 group-hover:from-pink-400 group-hover:to-purple-400 transition-all"></div>
                                                    <span class="flex-1 font-medium">{{ $sec->title }}</span>
                                                    <svg class="h-4 w-4 text-pink-300 group-hover:text-pink-500 transform group-hover:translate-x-1 transition-all" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('visi-misi') }}" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body border-2 border-transparent hover:border-pink-100">Visi-Misi</a>
                            @endif
                        </div>
                        
                        {{-- Program Kerja: dropdown of sections --}}
                        <div class="relative">
                            @if(isset($pokjaSections) && $pokjaSections->isNotEmpty())
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" @keydown.escape="open = false" type="button" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body flex items-center gap-2 border-2 border-transparent hover:border-pink-100">
                                        Program Kerja
                                        <svg class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-3 w-80 backdrop-blur-xl bg-white/80 rounded-2xl shadow-2xl py-3 z-50 border border-white/30" @click.away="open = false" style="display: none;">
                                        <div class="px-6 py-4 bg-gradient-to-r from-pink-50/70 to-purple-50/70 border-b border-pink-100/30">
                                            <div class="text-subtitle gradient-text font-heading">Program Kerja</div>
                                            <div class="text-overline text-gray-500 mt-1">Rencana dan aktivitas organisasi</div>
                                        </div>
                                        <div class="py-2 max-h-80 overflow-y-auto">

                                            @foreach($pokjaSections as $sec)
                                                <a href="{{ route('pokja-sekretariat.section', $sec->section_key) }}" class="flex items-center gap-3 px-6 py-3 text-caption text-gray-700 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 hover:text-pink-700 transition-all duration-200 group">
                                                    <div class="w-2 h-2 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 group-hover:from-pink-400 group-hover:to-purple-400 transition-all"></div>
                                                    <span class="flex-1 font-medium text-left">{{ Str::limit($sec->title, 28) }}</span>
                                                    <svg class="h-4 w-4 text-pink-300 group-hover:text-pink-500 transform group-hover:translate-x-1 transition-all flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('pokja-sekretariat') }}" class="px-6 py-3 rounded-2xl text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all text-body border-2 border-transparent hover:border-pink-100">Program Kerja</a>
                            @endif
                        </div>
                        
                    </div>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="h-12 w-12 rounded-2xl flex items-center justify-center text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 transition-all focus:outline-none shadow-lg"
                        :class="{'bg-gradient-to-r from-pink-100 to-purple-100': mobileMenuOpen}"
                    >
                        <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div
                x-show="mobileMenuOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="lg:hidden py-4 backdrop-blur-xl bg-white/80 rounded-2xl mb-4 mx-4 border border-white/30"
                style="display: none;"
            >
                <div class="px-4 space-y-2">
                                        <a href="{{ route('berita.index') }}" class="block px-6 py-4 text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 rounded-xl transition-all">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                            <span class="text-body">Berita</span>
                        </div>
                    </a>
                    
                    <a href="{{ route('kegiatan.index') }}" class="block px-6 py-4 text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 rounded-xl transition-all">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="text-body">Kegiatan</span>
                        </div>
                    </a>

                    <a href="{{ route('profil') }}" class="block px-6 py-4 text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 rounded-xl transition-all">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="text-body">Profil</span>
                        </div>
                    </a>
                    
                    <a href="{{ route('visi-misi') }}" class="block px-6 py-4 text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 rounded-xl transition-all">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <span class="text-body">Visi-Misi</span>
                        </div>
                    </a>
                    
                    <a href="{{ route('pokja-sekretariat') }}" class="block px-6 py-4 text-gray-700 hover:text-pink-600 hover:bg-gradient-to-r hover:from-pink-50 hover:to-purple-50 rounded-xl transition-all">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-body">Program Kerja</span>
                        </div>
                    </a>
                    

                </div>
            </div>
        </div>
    </div>
</header>
