<x-layout>
     <h1>Welcome to page, My name is {{ $data }} </h1>
    <p>Umur saya {{ $umur }}</p>
    @if ($umur > 18)
        <h3>Mantap Punya KTP Bang</h3>
    @else
        <h3>Yah ga punya KTP</h3>
    @endif
    <x-slot:footer>
        <strong>Welcome Page</strong>
    </x-slot:footer>
</x-layout>

