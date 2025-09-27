<x-layout>
    <x-slot name="footer">
        <strong>Home Page</strong>
    </x-slot>

    <h1 class="text-white">Daftar Siswa</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
            <thead>
                <tr class="*:font-medium *:text-gray-900 dark:*:text-black">
                    <th class="px-3 py-2 whitespace-nowrap">Name</th>
                    <th class="px-3 py-2 whitespace-nowrap">DoB</th>
                    <th class="px-3 py-2 whitespace-nowrap">Role</th>
                    <th class="px-3 py-2 whitespace-nowrap">Status</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($data as $item)
                    @php
                        if ($item ['nilai'] >= 80) {
                            $status = "Lulus";
                        }
                        else {
                            $status = "Tidak Lulus";
                        }
                    @endphp

                    <tr class="*:text-gray-900 *:first:font-medium dark:*:text-black">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nama'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['id'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nilai'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
