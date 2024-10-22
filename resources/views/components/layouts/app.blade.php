<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>

    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body x-init="darkMode = localStorage.getItem('theme') === 'dark'; document.documentElement.classList.toggle('dark', darkMode)">
    <div>
        {{ $slot }}
    </div>

    @vite(['resources/js/app.js'])
    @livewireScripts
</body>
</html>
