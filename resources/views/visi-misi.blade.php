<x-layout.app
    title="Visi & Misi - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <!-- Profile Header - Reusing the component from the Profil page -->
    <x-pages.profile-header
        title="Visi & Misi"
        subtitle="Arah dan tujuan PKK Kabupaten Bangkalan dalam membangun kesejahteraan keluarga"
        backgroundImage="https://placehold.co/1600x900/5A92C9/ffffff?text=Visi+Misi+PKK"
    />

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4 max-w-6xl">
        <!-- Vision Section -->
        <div class="mb-16">
            <x-ui.section-title title="Visi" />

            <div class="bg-white rounded-xl shadow-sm p-8">
                <div class="text-center mb-10">
                    <div class="inline-block bg-[#5A92C9]/10 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#5A92C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#5A92C9] mb-3">Visi PKK Kabupaten Bangkalan</h3>

                    <div class="max-w-4xl mx-auto">
                        <p class="text-xl text-gray-700 font-medium italic">
                            "Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan."
                        </p>
                    </div>
                </div>

                <div class="border-t border-gray-100 pt-10">
                    <h4 class="text-xl font-semibold text-[#5A92C9] mb-6 text-center">Komponen Visi</h4>

                    <x-pages.vision-detail
                        title="Beriman dan Bertaqwa"
                        icon-path="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                        alignment="left">
                        <p>
                            Mewujudkan keluarga yang taat menjalankan ibadah sesuai dengan agama dan kepercayaan masing-masing, serta mengamalkan nilai-nilai agama dalam kehidupan sehari-hari. Nilai-nilai keimanan dan ketaqwaan menjadi fondasi utama dalam membangun keluarga yang harmonis.
                        </p>
                    </x-pages.vision-detail>

                    <x-pages.vision-detail
                        title="Berakhlak Mulia dan Berbudi Luhur"
                        icon-path="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"
                        alignment="right">
                        <p>
                            Membentuk keluarga yang memiliki integritas moral tinggi, jujur, santun, dan menghormati nilai-nilai budaya dan adat istiadat. Budi pekerti luhur tercermin dalam sikap dan perilaku seluruh anggota keluarga dalam interaksi sosial kemasyarakatan.
                        </p>
                    </x-pages.vision-detail>

                    <x-pages.vision-detail
                        title="Sehat Sejahtera"
                        icon-path="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                        alignment="left">
                        <p>
                            Mewujudkan keluarga yang memiliki kondisi kesehatan fisik, mental, dan sosial yang optimal, serta memiliki akses terhadap pelayanan kesehatan yang berkualitas. Kesejahteraan keluarga mencakup terpenuhinya kebutuhan dasar, pendidikan, dan ekonomi.
                        </p>
                    </x-pages.vision-detail>

                    <x-pages.vision-detail
                        title="Maju dan Mandiri"
                        icon-path="M13 10V3L4 14h7v7l9-11h-7z"
                        alignment="right">
                        <p>
                            Membentuk keluarga yang berpendidikan, produktif, dan memiliki daya saing dalam kehidupan bermasyarakat. Kemandirian mencakup kemampuan untuk memenuhi kebutuhan sendiri, mengambil keputusan, dan mengatasi masalah secara mandiri tanpa tergantung pada bantuan orang lain.
                        </p>
                    </x-pages.vision-detail>

                    <x-pages.vision-detail
                        title="Kesetaraan dan Keadilan Gender"
                        icon-path="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        alignment="left">
                        <p>
                            Mewujudkan hubungan yang setara dan adil antara laki-laki dan perempuan dalam keluarga, di mana semua anggota keluarga memiliki hak, kewajiban, peluang, dan penghargaan yang sama. Kesetaraan gender memungkinkan partisipasi penuh seluruh anggota keluarga dalam pembangunan.
                        </p>
                    </x-pages.vision-detail>

                    <x-pages.vision-detail
                        title="Kesadaran Hukum dan Lingkungan"
                        icon-path="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                        alignment="right">
                        <p>
                            Membentuk keluarga yang taat hukum, menyadari hak dan kewajibannya sebagai warga negara, serta memiliki kepedulian terhadap kelestarian lingkungan hidup. Kesadaran hukum dan lingkungan akan menciptakan masyarakat yang tertib, aman, dan lestari.
                        </p>
                    </x-pages.vision-detail>
                </div>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="mb-16">
            <x-ui.section-title title="Misi" />

            <div class="bg-white rounded-xl shadow-md p-8">
                <div class="space-y-6">
                    <x-pages.mission-item number="1" title="Meningkatkan Pembentukan Karakter Keluarga">
                        <p>Meningkatkan pembentukan karakter keluarga melalui penghayatan, pengamalan Pancasila, kegotong royongan serta kesetaraan dan keadilan gender.</p>
                    </x-pages.mission-item>

                    <x-pages.mission-item number="2" title="Meningkatkan Pendidikan dan Keterampilan">
                        <p>Meningkatkan pendidikan dan keterampilan anggota keluarga melalui program pendidikan formal, non-formal, dan informal yang berkesinambungan.</p>
                    </x-pages.mission-item>

                    <x-pages.mission-item number="3" title="Mengembangkan Ekonomi Keluarga">
                        <p>Meningkatkan pendapatan keluarga melalui pengembangan kewirausahaan, koperasi, dan usaha ekonomi produktif lainnya.</p>
                    </x-pages.mission-item>

                    <x-pages.mission-item number="4" title="Meningkatkan Ketahanan Keluarga">
                        <p>Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang, perumahan sehat dan layak huni, serta pemenuhan kebutuhan dasar lainnya.</p>
                    </x-pages.mission-item>

                    <x-pages.mission-item number="5" title="Meningkatkan Derajat Kesehatan Keluarga">
                        <p>Meningkatkan derajat kesehatan keluarga, kelestarian lingkungan hidup, dan perencanaan sehat melalui pola hidup sehat dan pencegahan penyakit.</p>
                    </x-pages.mission-item>

                    <x-pages.mission-item number="6" title="Menguatkan Kelembagaan PKK">
                        <p>Meningkatkan pengelolaan gerakan PKK dengan memperkuat kelembagaan dan meningkatkan kemitraan dengan berbagai pihak, baik pemerintah maupun non-pemerintah.</p>
                    </x-pages.mission-item>
                </div>
            </div>
        </div>

        <!-- Goals Section -->
        <div class="mb-16">
            <x-ui.section-title title="Tujuan" />

            <div class="bg-white rounded-xl shadow-sm p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="bg-[#5A92C9] text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">1</div>
                            <h4 class="text-lg font-semibold text-[#5A92C9]">Jangka Pendek</h4>
                        </div>
                        <ul class="space-y-2 pl-11">
                            <li class="list-disc text-gray-700">Meningkatkan kapasitas kader PKK</li>
                            <li class="list-disc text-gray-700">Meningkatkan keterampilan keluarga dalam pengolahan pangan lokal</li>
                            <li class="list-disc text-gray-700">Meningkatkan pemahaman masyarakat tentang kesehatan keluarga</li>
                            <li class="list-disc text-gray-700">Mengembangkan program usaha ekonomi produktif</li>
                        </ul>
                    </div>

                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="bg-[#5A92C9] text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">2</div>
                            <h4 class="text-lg font-semibold text-[#5A92C9]">Jangka Menengah</h4>
                        </div>
                        <ul class="space-y-2 pl-11">
                            <li class="list-disc text-gray-700">Terwujudnya peningkatan kualitas pendidikan keluarga</li>
                            <li class="list-disc text-gray-700">Berkembangnya koperasi dan UMKM binaan PKK</li>
                            <li class="list-disc text-gray-700">Terwujudnya pola hidup bersih dan sehat di keluarga</li>
                            <li class="list-disc text-gray-700">Meningkatnya partisipasi perempuan dalam pembangunan</li>
                        </ul>
                    </div>

                    <div class="md:col-span-2 bg-[#5A92C9]/5 p-5 rounded-lg">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="bg-[#5A92C9] text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">3</div>
                            <h4 class="text-lg font-semibold text-[#5A92C9]">Jangka Panjang</h4>
                        </div>
                        <ul class="space-y-2 pl-11">
                            <li class="list-disc text-gray-700">Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa</li>
                            <li class="list-disc text-gray-700">Terwujudnya keluarga yang sehat, sejahtera, maju dan mandiri</li>
                            <li class="list-disc text-gray-700">Terwujudnya kesetaraan dan keadilan gender dalam keluarga</li>
                            <li class="list-disc text-gray-700">Terwujudnya kesadaran hukum dan lingkungan hidup dalam keluarga</li>
                            <li class="list-disc text-gray-700">Terwujudnya keluarga sebagai pilar ketahanan bangsa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strategic Issues -->
        <div class="mb-16">
            <x-ui.section-title title="Isu Strategis" />

            <div class="bg-white rounded-xl shadow-sm p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-lg font-semibold text-[#5A92C9] mb-3">Pemberdayaan Masyarakat</h4>
                        <p class="text-gray-700">Meningkatkan keberdayaan masyarakat dalam berbagai aspek kehidupan, baik sosial, ekonomi, maupun budaya. Masyarakat menjadi subjek pembangunan yang aktif dan mampu mengidentifikasi masalah serta mencari solusi secara mandiri.</p>
                    </div>

                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-lg font-semibold text-[#5A92C9] mb-3">Penguatan Ekonomi Keluarga</h4>
                        <p class="text-gray-700">Meningkatkan kapasitas ekonomi keluarga melalui pengembangan kewirausahaan, pembentukan dan penguatan koperasi, serta pengembangan industri rumah tangga. Ekonomi keluarga yang kuat akan menjadi fondasi kesejahteraan masyarakat.</p>
                    </div>

                    <div class="bg-[#5A92C9]/5 p-5 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-lg font-semibold text-[#5A92C9] mb-3">Kesehatan Keluarga</h4>
                        <p class="text-gray-700">Meningkatkan kesadaran dan kemampuan keluarga dalam menerapkan pola hidup bersih dan sehat, pemenuhan gizi keluarga, serta akses terhadap pelayanan kesehatan. Keluarga sehat adalah modal dasar pembangunan SDM berkualitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout.app>
