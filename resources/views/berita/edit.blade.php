<x-layout.app
    title="Edit Berita - TP-PKK Kabupaten Bangkalan"
    app-name="TP-PKK Kabupaten Bangkalan">

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('berita.show', $berita) }}" class="text-primary hover:underline">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Berita
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Edit Berita</h1>

            <x-berita.form
                :berita="$berita"
                :method="'PUT'"
                :action="route('berita.update', $berita)" />
        </div>
    </div>
</x-layout.app>
