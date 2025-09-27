<x-layout>
  <script src="https://cdn.tailwindcss.com"></script>

  <div class="min-h-screen bg-gray-100 py-12 px-6 mt-7">
    <h1 class="text-4xl font-bold text-center mb-12">Our Team</h1>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="{{ asset('koki.jpeg') }}" alt="Team Member"
             class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-yellow-500 mb-4">
        <h3 class="text-xl font-semibold">Samsul Arif</h3>
        <p class="text-gray-600">Head Chef</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="{{ asset('manager.jpeg') }}" alt="Team Member"
             class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-yellow-500 mb-4">
        <h3 class="text-xl font-semibold">Helena</h3>
        <p class="text-gray-600">Manager</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="{{ asset('pelayan.jpeg') }}" alt="Team Member"
             class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-yellow-500 mb-4">
        <h3 class="text-xl font-semibold">Brando Franco Windah </h3>
        <p class="text-gray-600">Waiter</p>
      </div>
    </div>
  </div>
</x-layout>
