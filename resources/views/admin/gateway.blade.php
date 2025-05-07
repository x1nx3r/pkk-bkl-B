<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Access • {{ config('app.name') }}</title>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #5145cd;
            --primary-hover: #443baa;
            --surface: #ffffff;
            --background: #f9fafb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-600: #4b5563;
            --gray-800: #1f2937;
            --danger: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: var(--gray-800);
            background-color: var(--background);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .container {
            background: var(--surface);
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            width: 100%;
            max-width: 28rem;
            text-align: center;
        }

        .logo {
            margin-bottom: 1.5rem;
        }

        .logo svg {
            height: 2.5rem;
            width: auto;
            color: var(--primary);
        }

        h1 {
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: var(--gray-800);
        }

        p {
            color: var(--gray-600);
            margin-bottom: 1.5rem;
        }

        .cf-turnstile {
            margin: 1.5rem 0;
            display: flex;
            justify-content: center;
        }

        button {
            background-color: var(--primary);
            color: white;
            font-weight: 500;
            font-size: 0.875rem;
            padding: 0.625rem 1.25rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 150ms ease;
            height: 2.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        button:hover {
            background-color: var(--primary-hover);
        }

        .error {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            text-align: left;
        }

        form {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <!-- Filament-like shield logo (you can replace with your own logo) -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3.78 2.22a.75.75 0 0 1 0 1.06L2.56 4.5h6.69a.75.75 0 0 1 0 1.5H2.56l1.22 1.22a.75.75 0 1 1-1.06 1.06l-2.5-2.5a.75.75 0 0 1 0-1.06l2.5-2.5a.75.75 0 0 1 1.06 0ZM10.5 6a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5h-10.5A.75.75 0 0 1 10.5 6ZM20.25 11.25a.75.75 0 0 0 0-1.5h-14a.75.75 0 0 0 0 1.5h14ZM14.78 20.72a.75.75 0 0 0 1.06-1.06L14.56 18h6.69a.75.75 0 0 0 0-1.5h-6.69l1.28-1.28a.75.75 0 1 0-1.06-1.06l-2.5 2.5a.75.75 0 0 0 0 1.06l2.5 2.5Z"/>
            </svg>
        </div>

        <h1>Admin Access Verification</h1>
        <p>Complete the security check below to access the administrative area.</p>

        <form method="POST" action="{{ route('admin.gateway.verify') }}">
            @csrf
            <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>

            @error('captcha')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Continue to Admin Panel</button>
        </form>
    </div>

    <script>
        // Optional: Add focus styles to match Filament
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('focus', () => {
                button.style.outline = '2px solid rgba(81, 69, 205, 0.5)';
                button.style.outlineOffset = '2px';
            });
            button.addEventListener('blur', () => {
                button.style.outline = 'none';
            });
        });
    </script>
</body>
</html>
