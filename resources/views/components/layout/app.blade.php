<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    </style>

    @stack('styles')
</head>
<body class="bg-gray-50">
    <x-header :app-name="$appName ?? 'PKK Kabupaten Bangkalan'" />

    <main class="container mx-auto px-4 py-12 max-w-6xl">
        {{ $slot }}
    </main>

    <x-layout.footer />

    @stack('scripts')
</body>
</html>
