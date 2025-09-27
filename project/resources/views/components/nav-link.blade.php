@props(['active' => false])

<a {{ $attributes->merge(['class' => class(['text-gray-700', 'text-teal-500 font-bold' => $active, ]) ]) }}>
    {{ $slot }}
</a>
