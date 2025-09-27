<x-layout>
  <div class="pt-24 pb-16 max-w-screen-xl mx-auto px-6">
    <h1 class="text-4xl font-bold text-center text-yellow-700 mb-12">Menu Rasa Nusantara</h1>

    <!-- Grid Menu -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('download.jpeg') }}" alt="Rendang" class="w-full h-48 object-cover">
        <div class="p-6 text-center">
          <h2 class="text-xl font-bold text-gray-800">Rendang</h2>
          <p class="text-gray-600 text-sm mt-2">Daging sapi dimasak dengan bumbu rempah khas Minang.</p>
          <p class="text-lg font-semibold text-yellow-700 mt-4">Rp 35.000</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('sate.jpeg') }}" alt="Sate Ayam" class="w-full h-48 object-cover">
        <div class="p-6 text-center">
          <h2 class="text-xl font-bold text-gray-800">Sate Ayam</h2>
          <p class="text-gray-600 text-sm mt-2">Sate ayam khas Madura dengan bumbu kacang gurih.</p>
          <p class="text-lg font-semibold text-yellow-700 mt-4">Rp 25.000</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('gudeg.jpeg') }}" alt="Gudeg" class="w-full h-48 object-cover">
        <div class="p-6 text-center">
          <h2 class="text-xl font-bold text-gray-800">Gudeg</h2>
          <p class="text-gray-600 text-sm mt-2">Masakan manis khas Yogyakarta dari nangka muda.</p>
          <p class="text-lg font-semibold text-yellow-700 mt-4">Rp 20.000</p>
        </div>
      </div>

    </div>
  </div>
</x-layout>
