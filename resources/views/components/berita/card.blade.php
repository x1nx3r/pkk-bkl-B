@props(['berita', 'compact' => false])

<div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02]">
    <a href="{{ route('berita.show', $berita) }}">
        @if($berita->featured_image)
            <img
                src="{{ Storage::url($berita->featured_image) }}"
                alt="{{ $berita->judul }}"
                class="w-full h-48 object-cover object-center"
            >
        @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-400">Tidak ada gambar</span>
            </div>
        @endif
    </a>

    <div class="p-4">
        <div class="flex items-center text-sm text-gray-600 mb-2">
            <span class="text-sm">{{ $berita->created_at->diffForHumans() }}</span>
            <span class="mx-1">•</span>
            <span class="text-sm">Oleh: {{ $berita->user->name }}</span>
        </div>

        <a href="{{ route('berita.show', $berita) }}" class="hover:text-primary">
            <h3 class="text-xl font-bold mb-3 line-clamp-2">{{ $berita->judul }}</h3>
        </a>

        @if(!$compact)
            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                {{ Str::limit(strip_tags($berita->konten), 150) }}
            </p>
        @endif

        <div class="flex justify-between items-center">
            <a href="{{ route('berita.show', $berita) }}" class="text-primary text-sm hover:underline">
                Baca selengkapnya
            </a>
        </div>
    </div>
</div>
