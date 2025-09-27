<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Siswa</title>
  
  <!-- Tailwind via CDN (untuk test cepat) -->
  <script src="https://cdn.tailwindcss.com"></script>

 
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

<header class="bg-white shadow">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    
    <a class="block text-teal-600 font-bold text-lg" href="#">
      LOGO
    </a>

    
    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="block">
        <ul class="flex items-center gap-6 text-sm">
          <li><x-nav-link class="text-black hover:text-teal-600" href="/welcome" :active="request()->is('welcome')>Home</x-nav-link></li>
          <li><x-nav-link class="text-black hover:text-teal-600" href='about'>About</x-nav-link></li>
          <li><x-nav-link class="text-black hover:text-teal-600" href="#">About</x-nav-link></li>
          <li><x-nav-link class="text-black hover:text-teal-600" href="#">About</x-nav-link></li>
        </ul>
      </nav>

      <!-- Action buttons -->
      <div class="flex items-center gap-4">
        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-teal-700" href="#">
          Login
        </a>
        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 hover:text-teal-700" href="#">
          Register
        </a>
      </div>
    </div>
  </div>
</header>








<main class="p-6">
  {{ $slot }}
</main>

<footer class="bg-gray-100 text-center p-4 mt-6">
  Ini footer dari page <span>{{ $footer }}</span>
</footer>

</body>
</html>
