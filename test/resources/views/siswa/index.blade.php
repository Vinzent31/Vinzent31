<x-layout>
    <x-slot name="footer">
        <strong>Home Page</strong>
    </x-slot>

    <h1>Daftar Siswa</h1>
    <ul>
        @foreach ($data as $item)
            <li>
                <h3>
                    {{ $item['id'] }} {{ $item['nama'] }} - Nilai: {{ $item['nilai'] }} - Status:
                    @if ($item['nilai'] >= 80)
                        Lulus
                    @else
                        Tidak Lulus
                    @endif
                </h3>
            </li>
        @endforeach
    </ul>
</x-layout>
