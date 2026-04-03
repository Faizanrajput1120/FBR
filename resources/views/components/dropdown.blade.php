@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'py-1 bg-white'
])

@php
// Alignment mapping
$alignments = [
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    'right' => 'ltr:origin-top-right rtl:origin-top-left end-0',
];

$alignmentClasses = $alignments[$align] ?? $alignments['right'];

// Width mapping (extendable)
$widthMap = [
    '48' => 'w-48',
    '56' => 'w-56',
    '64' => 'w-64',
];
$widthClasses = $widthMap[$width] ?? $width; // Accepts custom class like "w-40" directly
@endphp

<div class="relative" 
     x-data="{ open: false }" 
     @click.outside="open = false" 
     @keydown.escape.window="open = false">
    
    {{-- Trigger --}}
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    {{-- Dropdown --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute z-50 mt-2 {{ $widthClasses }} rounded-md shadow-lg {{ $alignmentClasses }}"
         style="display: none;"
         role="menu"
         @click="open = false">
         
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
