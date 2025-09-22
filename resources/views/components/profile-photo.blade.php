@php
    $photoUrl = null;
    $photo = $member->photo ?? null;

    if ($photo) {
        if (filter_var($photo, FILTER_VALIDATE_URL)) {
            $photoUrl = $photo;
        } else {
            $path = ltrim($photo, '/');
            if (file_exists(public_path($path))) {
                $photoUrl = asset($path);
            } elseif (file_exists(public_path('storage/' . $path))) {
                $photoUrl = asset('storage/' . $path);
            } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
                $photoUrl = \Illuminate\Support\Facades\Storage::url($path);
            }
        }
    }

    if (! $photoUrl) {
        $defaultPath = public_path('images/profiles/default.jpg');
        if (file_exists($defaultPath)) {
            $photoUrl = asset('images/profiles/default.jpg');
        } else {
            $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" fill="#f3f4f6"/><circle cx="12" cy="8" r="3" fill="#9ca3af"/><path d="M4 20c0-3.314 2.686-6 6-6h4c3.314 0 6 2.686 6 6v0H4z" fill="#d1d5db"/></svg>';
            $photoUrl = 'data:image/svg+xml;utf8,' . rawurlencode($svg);
        }
    }
@endphp

<div class="flex items-start justify-center">
    <img src="{{ $photoUrl }}" alt="{{ $member->name ?? 'Profile' }}" class="w-16 h-16 rounded-full object-top">
</div>
