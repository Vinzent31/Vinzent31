<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-nav-link>Home</x-nav-link>
        <x-nav-link>Profil</x-nav-link>
        <x-nav-link>Kontak</x-nav-link>
    </nav>

    <main>
        {{ $slot }}
    </main>
    
    <footer>
        Ini footer dari page: <span>{{ $footer }}</span>
    </footer>
</body>
</html>
