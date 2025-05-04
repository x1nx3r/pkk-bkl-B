@props([
    'berita' => null,
    'method' => 'POST',
    'action' => route('berita.store')
])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <div class="grid grid-cols-1 gap-6">
        <!-- Judul -->
        <div>
            <x-ui.form.label for="judul" value="Judul Berita" required />
            <x-ui.form.input
                id="judul"
                name="judul"
                type="text"
                :value="old('judul', $berita ? $berita->judul : '')"
                class="w-full"
                required
                autofocus />
            <x-ui.form.error field="judul" />
        </div>

        <!-- Status -->
        <div>
            <x-ui.form.label for="status" value="Status" required />
            <select name="status" id="status" class="w-full rounded-md border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                <option value="draft" {{ old('status', $berita ? $berita->status : '') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $berita ? $berita->status : '') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            <x-ui.form.error field="status" />
        </div>

        <!-- Featured Image -->
        <div>
            <x-ui.form.label for="featured_image" value="Gambar Utama" />

            @if($berita && $berita->featured_image)
                <div class="mb-2">
                    <img src="{{ Storage::url($berita->featured_image) }}" alt="Current image" class="h-40 object-cover rounded">
                </div>
            @endif

            <input
                type="file"
                name="featured_image"
                id="featured_image"
                accept="image/*"
                class="w-full border border-gray-300 p-2 rounded">
            <x-ui.form.error field="featured_image" />
        </div>

        <!-- Content -->
        <div>
            <x-ui.form.label for="konten" value="Konten Berita" required />
            <textarea
                id="konten"
                name="konten"
                rows="10"
                class="w-full rounded-md border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required>{{ old('konten', $berita ? $berita->konten : '') }}</textarea>
            <x-ui.form.error field="konten" />
        </div>

        <div class="flex justify-end">
            <x-ui.button type="submit" class="bg-primary text-white">
                {{ $berita ? 'Update Berita' : 'Simpan Berita' }}
            </x-ui.button>
        </div>
    </div>
</form>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#konten'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endpush
