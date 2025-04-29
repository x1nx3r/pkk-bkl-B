<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'MPP-PKK Kabupaten Bangkalan' }}</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional styles -->
    <style>
        .section-animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .section-animate:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(90, 146, 201, 0.1), 0 8px 10px -6px rgba(90, 146, 201, 0.05);
        }

        /* Custom scaling wrapper */
        .scale-wrapper {
            transform: scale(0.8);
            transform-origin: top center;
            width: 125%;
            margin-left: -12.5%; /* This centers the scaled content */
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-50 h-full overflow-x-hidden">
    <div class="scale-wrapper">
        <x-header :app-name="$appName ?? 'PKK Kabupaten Bangkalan'" />

        <main class="container mx-auto px-4 py-12 max-w-6xl">
            {{ $slot }}
        </main>

        <x-layout.footer />
    </div>

    @stack('scripts')
</body>
</html>
