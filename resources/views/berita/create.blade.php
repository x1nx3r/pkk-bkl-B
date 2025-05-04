<x-layout.app
    title="Tambah Berita - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('berita.index') }}" class="text-primary hover:underline">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Berita
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Tambah Berita Baru</h1>

            <x-berita.form />
        </div>
    </div>
</x-layout.app>
