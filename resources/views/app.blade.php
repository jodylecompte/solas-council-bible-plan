<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#000000">
    <script>
        // Service Worker setup
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(() => console.log('Service Worker registered'))
                .catch((error) => console.log('Service Worker registration failed:', error));
        }
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.tsx', "resources/js/Pages/{$page['component']}.tsx"])
    @inertiaHead
    <style>
        html,
        body,
        #app {
            height: 100%;
        }

        #app {
            display: flex;
            flex-direction: column;
            font-family: "Libre Franklin", sans-serif;
        }
    </style>
</head>

<body class="font-sans antialiased h-full" data-theme="light">
    @inertia
</body>

</html>
