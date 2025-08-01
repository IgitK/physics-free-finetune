@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white '])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        default => 'ltr:origin-top-right rtl:origin-top-left end-0',
    };

    $width = match ($width) {
        '48' => 'w-48',
        default => $width,
    };
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open" x-:enter="  " x-:enter-start="opacity-0 scale-95"
        x-:enter-end="opacity-100 scale-100" x-:leave="  duration-75"
        x-:leave-start="opacity-100 scale-100" x-:leave-end="opacity-0 scale-95"
        class="{{ $width }} {{ $alignmentClasses }} absolute z-50 mt-2 rounded-md shadow-lg"
        style="display: none;" @click="open = false">
        <div class="{{ $contentClasses }} rounded-md ring-1 ring-black ring-opacity-5">
            {{ $slot }}
        </div>
    </div>
</div>
