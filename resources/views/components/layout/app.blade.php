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
        /* Slightly larger base font for better readability on widescreens */
        html, body {
            font-size: 18px;
            line-height: 1.6;
        }

        .section-animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .section-animate:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(90, 146, 201, 0.1), 0 8px 10px -6px rgba(90, 146, 201, 0.05);
        }

        /* Ensure container stretches comfortably on widescreens */
        .container {
            max-width: 86rem; /* wider container for large displays */
        }

        /* Small utility to slightly increase button/text scaling if needed */
        .ui-scale-lg {
            font-size: 1.05rem;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-50 h-full overflow-x-hidden">
        <x-header :app-name="$appName ?? 'PKK Kabupaten Bangkalan'" />

        <main class="container mx-auto px-6 py-16 max-w-7xl text-lg">
            {{ $slot }}
        </main>

        <x-layout.footer />

    @stack('scripts')
</body>
</html>
