@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-4 py-3 text-sm font-semibold rounded-xl text-white bg-indigo-600/90 shadow-md shadow-indigo-600/10 transition duration-150 ease-in-out group'
            : 'flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition duration-150 ease-in-out group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>