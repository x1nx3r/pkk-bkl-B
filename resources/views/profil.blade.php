<x-layout.app
    title="Profil - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- About Section -->
    <div class="mb-16">
        <x-ui.section-title title="Profil TP-PKK Kabupaten Bangkalan" />

        <div class="bg-white rounded-xl shadow-sm p-8">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-2/3">
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga (TP-PKK) Kabupaten Bangkalan adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia. Sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, TP-PKK bergerak dalam pembangunan masyarakat melalui program-program yang tersusun secara sistematis.
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        TP-PKK Kabupaten Bangkalan terus berkomitmen untuk meningkatkan kesejahteraan keluarga melalui 10 program pokok PKK dengan memberdayakan potensi masyarakat, khususnya keluarga untuk meningkatkan kesejahteraan lahir dan batin. Melalui berbagai kegiatan yang terencana dan terarah, TP-PKK Kabupaten Bangkalan senantiasa memajukan keluarga-keluarga di Kabupaten Bangkalan menuju keluarga yang tangguh dan sejahtera.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Kami bekerja untuk mewujudkan keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.
                    </p>
                </div>
                <div class="md:w-1/3 bg-[#5A92C9]/10 rounded-lg p-6 flex flex-col justify-center items-center">
                    <div class="rounded-full bg-white p-4 shadow-sm h-48 w-48 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/logo-pkk.png') }}" alt="Logo PKK" class="max-w-full max-h-full object-contain">
                    </div>
                    <p class="text-center text-gray-700 italic">
                        "Kesejahteraan keluarga adalah tonggak kesejahteraan bangsa"
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Organization Structure Section -->
    <div class="mb-16">
        <x-ui.section-title title="Struktur Kepengurusan" />

        <div class="bg-white rounded-xl shadow-sm p-8">
            <x-pages.org-structure />
        </div>
    </div>

    <!-- Legal Foundation Section -->
    <div class="mb-16">
        <x-ui.section-title title="Landasan Hukum" />

        <div class="bg-white rounded-xl shadow-sm p-8">
            <div class="space-y-4">
                <div class="bg-[#5A92C9]/5 p-4 rounded-lg">
                    <h4 class="font-bold text-[#5A92C9] mb-1">Peraturan Menteri Dalam Negeri No. 1 Tahun 2013</h4>
                    <p class="text-gray-700">Tentang Pemberdayaan Masyarakat Melalui Gerakan Pemberdayaan dan Kesejahteraan Keluarga</p>
                </div>

                <div class="bg-[#5A92C9]/5 p-4 rounded-lg">
                    <h4 class="font-bold text-[#5A92C9] mb-1">Peraturan Presiden Republik Indonesia No. 99 Tahun 2017</h4>
                    <p class="text-gray-700">Tentang Gerakan Pemberdayaan dan Kesejahteraan Keluarga</p>
                </div>

                <div class="bg-[#5A92C9]/5 p-4 rounded-lg">
                    <h4 class="font-bold text-[#5A92C9] mb-1">Peraturan Menteri Dalam Negeri No. 36 Tahun 2020</h4>
                    <p class="text-gray-700">Tentang Perubahan atas Peraturan Menteri Dalam Negeri No. 1 Tahun 2013 tentang Pemberdayaan Masyarakat Melalui Gerakan PKK</p>
                </div>

            </div>
        </div>
    </div>
</x-layout.app>
