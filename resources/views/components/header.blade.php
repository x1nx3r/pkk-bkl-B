<header class="bg-white sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4 max-w-6xl">
        <div x-data="{ mobileMenuOpen: false }">
            <div class="flex justify-between items-center py-4">
                <!-- Logo and Organization Name -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <div class="h-12 w-12 rounded-full bg-[#5A92C9]/10 p-2 flex items-center justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto">
                    </div>
                    <div>
                        <span class="text-xl font-bold text-[#5A92C9] block leading-tight">{{ $appName }}</span>
                        <span class="text-xs text-gray-500 hidden sm:block">Pemberdayaan dan Kesejahteraan Keluarga</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center">
                    <div class="flex space-x-1">
                        <a href="{{ route('profil') }}" class="px-4 py-2 rounded-full text-gray-700 hover:text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all font-medium">Profil</a>
                        <a href="{{ route('visi-misi') }}" class="px-4 py-2 rounded-full text-gray-700 hover:text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all font-medium">Visi-Misi</a>
                        <a href="{{ route('pokja-sekretariat') }}" class="px-4 py-2 rounded-full text-gray-700 hover:text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all font-medium">Program Kerja</a>
                        <a href="{{ route('berita.index') }}" class="px-4 py-2 rounded-full text-gray-700 hover:text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all font-medium">Berita</a>
                        <a href="{{ route('kegiatan.index') }}" class="px-4 py-2 rounded-full text-gray-700 hover:text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all font-medium">Kegiatan</a>
                    </div>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="h-10 w-10 rounded-full flex items-center justify-center text-[#5A92C9] hover:bg-[#5A92C9]/5 transition-all focus:outline-none"
                        :class="{'bg-[#5A92C9]/10': mobileMenuOpen}"
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
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="md:hidden py-3 bg-[#5A92C9]/5 rounded-lg mb-4"
                style="display: none;"
            >
                <div class="px-2 space-y-1">
                    <a href="{{ route('profil') }}" class="block px-3 py-2.5 text-gray-700 hover:text-[#5A92C9] hover:bg-white rounded-lg transition-all">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profil
                        </div>
                    </a>
                    <a href="{{ route('visi-misi') }}" class="block px-3 py-2.5 text-gray-700 hover:text-[#5A92C9] hover:bg-white rounded-lg transition-all">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            Visi-Misi
                        </div>
                    </a>
                    <a href="{{ route('pokja-sekretariat') }}" class="block px-3 py-2.5 text-gray-700 hover:text-[#5A92C9] hover:bg-white rounded-lg transition-all">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Pokja-Sekretariat
                        </div>
                    </a>
                    <a href="{{ route('berita.index') }}" class="block px-3 py-2.5 text-gray-700 hover:text-[#5A92C9] hover:bg-white rounded-lg transition-all">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Informasi
                        </div>
                    </a>
                    <a href="{{ route('kegiatan.index') }}" class="block px-3 py-2.5 text-gray-700 hover:text-[#5A92C9] hover:bg-white rounded-lg transition-all">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Dokumentasi
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
