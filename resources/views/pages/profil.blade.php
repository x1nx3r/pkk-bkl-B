<x-layout.app title="Profil - TP-PKK Kabupaten Bangkalan" app-name="TP-PKK Kabupaten Bangkalan">
    <div class="container mx-auto px-6 py-12 max-w-7xl">


        @if(isset($section))

        @endif

        <!-- Section Quick Navigation -->
        @if(!isset($section))
            <div class="mb-12">
                <div class="glass-effect rounded-3xl p-8 border border-pink-100/30">
                    <h3 class="text-subtitle font-heading gradient-text mb-6 text-center">Jelajahi Profil Kami</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <x-ui.content-card 
                            title="Tentang Kami" 
                            description="Mengenal organisasi TP-PKK Kabupaten Bangkalan dan sejarah perkembangannya"
                            href="#tentang-kami"
                            icon="about"
                            gradient="from-pink-50 to-purple-50" />
                        
                        <x-ui.content-card 
                            title="Struktur Organisasi" 
                            description="Susunan kepengurusan dan tata kelola organisasi TP-PKK"
                            href="#struktur-organisasi"
                            icon="structure"
                            gradient="from-purple-50 to-blue-50" />
                        
                        <x-ui.content-card 
                            title="Landasan Hukum" 
                            description="Dasar hukum dan regulasi yang melandasi kegiatan TP-PKK"
                            href="#landasan-hukum"
                            icon="legal"
                            gradient="from-blue-50 to-pink-50" />
                    </div>
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <!-- About Section -->
        @if(!isset($section) || $section === 'tentang-kami')
        <section class="mb-16" id="tentang-kami">
            <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 rounded-full bg-gradient-to-br from-blue-200/30 to-pink-200/30 blur-lg"></div>
                
                <div class="text-center mb-8">
                    <h3 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-4">Tentang Kami</h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 mx-auto rounded-full"></div>
                </div>
                
                <div class="prose prose-lg lg:prose-xl max-w-none text-center">
                    <p class="text-xl lg:text-2xl text-gray-700 mb-6 leading-relaxed">
                        Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga (TP-PKK) Kabupaten Bangkalan adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, TP-PKK bergerak dalam pembangunan masyarakat melalui program-program yang tersusun secara sistematis.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        TP-PKK Kabupaten Bangkalan terus berkomitmen untuk meningkatkan kesejahteraan keluarga melalui 10 program pokok PKK dengan memberdayakan potensi masyarakat, khususnya keluarga untuk meningkatkan kesejahteraan lahir dan batin.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Kami bekerja untuk mewujudkan keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.
                    </p>
                </div>
            </div>
        </section>
        @endif

        <!-- Organization Structure Section -->
        @if(!isset($section) || $section === 'struktur-organisasi')
        <section class="mb-16" id="struktur-organisasi">
            <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
                <div class="absolute -top-4 -left-4 w-20 h-20 rounded-full bg-gradient-to-br from-purple-200/30 to-blue-200/30 blur-xl"></div>
                
                <div class="text-center mb-8">
                    <h3 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-4">Struktur Kepengurusan</h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 mx-auto rounded-full"></div>
                </div>
                
                <div class="prose prose-lg lg:prose-xl max-w-none">
                    <x-pages.org-structure />
                </div>
            </div>
        </section>
        @endif

        <!-- Legal Foundation Section -->
        @if(!isset($section) || $section === 'landasan-hukum')
        <section class="mb-16" id="landasan-hukum">
            <div class="glass-effect rounded-3xl p-8 lg:p-12 card-hover border border-pink-100/30 overflow-hidden relative">
                <div class="absolute -bottom-6 -right-6 w-28 h-28 rounded-full bg-gradient-to-br from-pink-200/30 to-purple-200/30 blur-xl"></div>
                
                <div class="text-center mb-8">
                    <h3 class="text-3xl lg:text-4xl font-bold gradient-text font-heading mb-4">Landasan Hukum</h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 mx-auto rounded-full"></div>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                    <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-8 rounded-2xl border border-pink-100/50 card-hover">
                        <h4 class="font-bold text-pink-600 mb-4 text-xl">Peraturan Menteri Dalam Negeri No. 1 Tahun 2013</h4>
                        <p class="text-gray-700 leading-relaxed text-lg">Tentang Pemberdayaan Masyarakat Melalui Gerakan Pemberdayaan dan Kesejahteraan Keluarga</p>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-8 rounded-2xl border border-purple-100/50 card-hover">
                        <h4 class="font-bold text-purple-600 mb-4 text-xl">Peraturan Presiden Republik Indonesia No. 99 Tahun 2017</h4>
                        <p class="text-gray-700 leading-relaxed text-lg">Tentang Gerakan Pemberdayaan dan Kesejahteraan Keluarga</p>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-pink-50 p-8 rounded-2xl border border-blue-100/50 card-hover">
                        <h4 class="font-bold text-blue-600 mb-4 text-xl">Peraturan Menteri Dalam Negeri No. 36 Tahun 2020</h4>
                        <p class="text-gray-700 leading-relaxed text-lg">Tentang Perubahan atas Peraturan Menteri Dalam Negeri No. 1 Tahun 2013 tentang Pemberdayaan Masyarakat Melalui Gerakan PKK</p>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
</x-layout.app>
