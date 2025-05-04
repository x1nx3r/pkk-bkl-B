<!DOCTYPE html>
<html>
<head>
    <title>Admin Gateway</title>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <style>
        body {
            font-family: system-ui, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9fafb;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
        }
        h1 { margin-bottom: 1rem; }
        .cf-turnstile {
            margin: 1.5rem 0;
            display: flex;
            justify-content: center;
        }
        button {
            background-color: #4f46e5;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }
        .error { color: #dc2626; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Gateway</h1>
        <p>Please complete the security check to access the admin area.</p>

        <form method="POST" action="{{ route('admin.gateway.verify') }}">
            @csrf
            <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>

            @error('captcha')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Continue to Admin</button>
        </form>
    </div>
</body>
</html>
