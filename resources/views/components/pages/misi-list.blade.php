<div class="mb-6">
    @if($title)
    <h4 class="text-lg font-semibold {{ $titleColor }} mb-3">{{ $title }}</h4>
    @endif

    @if($numbered)
    <ol class="list-decimal list-inside space-y-2">
        @foreach($items as $item)
        <li class="{{ $itemColor }}">{!! $item !!}</li>
        @endforeach
    </ol>
    @else
    <ul class="list-disc list-inside space-y-2">
        @foreach($items as $item)
        <li class="{{ $itemColor }}">{!! $item !!}</li>
        @endforeach
    </ul>
    @endif
</div>
