<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'TP-PKK Kabupaten Bangkalan' }}</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Professional Sans-Serif Typography System -->
    <style>
        :root {
            --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
            --font-heading: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
            --font-size-xs: 0.75rem;
            --font-size-sm: 0.875rem;
            --font-size-base: 1rem;
            --font-size-lg: 1.125rem;
            --font-size-xl: 1.25rem;
            --font-size-2xl: 1.5rem;
            --font-size-3xl: 1.875rem;
            --font-size-4xl: 2.25rem;
            --font-size-5xl: 3rem;
            --line-height-tight: 1.25;
            --line-height-snug: 1.375;
            --line-height-normal: 1.5;
            --line-height-relaxed: 1.625;
            --letter-spacing-tight: -0.025em;
            --letter-spacing-normal: 0;
            --letter-spacing-wide: 0.025em;
        }

        body {
            font-family: var(--font-primary);
            font-size: var(--font-size-base);
            line-height: var(--line-height-normal);
            letter-spacing: var(--letter-spacing-normal);
            font-weight: 400;
            color: #374151;
        }
        
        .font-heading {
            font-family: var(--font-heading);
            font-weight: 700;
            letter-spacing: var(--letter-spacing-tight);
            line-height: var(--line-height-tight);
        }
        
        /* Typography Classes */
        .text-display {
            font-family: var(--font-heading);
            font-size: var(--font-size-4xl);
            font-weight: 800;
            line-height: var(--line-height-tight);
            letter-spacing: var(--letter-spacing-tight);
        }
        
        .text-headline {
            font-family: var(--font-heading);
            font-size: var(--font-size-3xl);
            font-weight: 700;
            line-height: var(--line-height-tight);
            letter-spacing: var(--letter-spacing-tight);
        }
        
        .text-title {
            font-family: var(--font-heading);
            font-size: var(--font-size-2xl);
            font-weight: 600;
            line-height: var(--line-height-snug);
            letter-spacing: var(--letter-spacing-tight);
        }
        
        .text-subtitle {
            font-family: var(--font-primary);
            font-size: var(--font-size-lg);
            font-weight: 600;
            line-height: var(--line-height-snug);
            letter-spacing: var(--letter-spacing-normal);
        }
        
        .text-body {
            font-family: var(--font-primary);
            font-size: var(--font-size-base);
            font-weight: 400;
            line-height: var(--line-height-relaxed);
            letter-spacing: var(--letter-spacing-normal);
        }
        
        .text-body-large {
            font-family: var(--font-primary);
            font-size: var(--font-size-lg);
            font-weight: 400;
            line-height: var(--line-height-relaxed);
            letter-spacing: var(--letter-spacing-normal);
        }
        
        .text-caption {
            font-family: var(--font-primary);
            font-size: var(--font-size-sm);
            font-weight: 500;
            line-height: var(--line-height-normal);
            letter-spacing: var(--letter-spacing-wide);
        }
        
        .text-overline {
            font-family: var(--font-primary);
            font-size: var(--font-size-xs);
            font-weight: 700;
            line-height: var(--line-height-normal);
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #ec4899, #a855f7, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.2s ease;
        }
        
        .card-hover:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
        
        .bg-mesh {
            background: linear-gradient(135deg, #fdf2f8 0%, #fef7ff 25%, #f0f9ff 50%, #f8fafc 75%, #fdf2f8 100%);
            background-size: 400% 400%;
            animation: meshGradient 15s ease infinite;
        }
        
        @keyframes meshGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
                /* Enhanced glass effect with better padding responsiveness */
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        /* Improved container padding for better mobile experience */
        .container {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        @media (min-width: 640px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
        
        @media (min-width: 1024px) {
            .container {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }
        }
    </style>

    @stack('styles')
</head>
<body class="bg-mesh min-h-screen">
    <x-header :app-name="$appName ?? 'PKK Kabupaten Bangkalan'" />
    
    <main class="min-h-screen">
        {{ $slot }}
    </main>
    
    <x-layout.footer />
    
    @stack('scripts')
</body>
</html>
