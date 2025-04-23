<div class="mb-8">
    <div class="{{ $bgColor }} rounded-xl shadow-sm overflow-hidden">
        <div class="border-b {{ $borderColor }} pb-3 px-6 pt-5">
            <h3 class="text-xl font-bold {{ $titleColor }}">{{ $title }}</h3>
        </div>
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
</div>
