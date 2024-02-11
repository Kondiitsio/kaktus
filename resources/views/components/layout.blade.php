<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kaktus</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="bg-[#FFF5F5]">
    <livewire:components.navigation />
    <div class="flex flex-col h-screen justify-between">
        <div>
            {{ $slot }}
        </div>
        <footer class="bg-[#1A8B9D] text-[#FFF5F5] text-center p-3">
          <p>Copyright © 2024 Kaktus</p>
        </footer>
      </div>
</body>
</html>
