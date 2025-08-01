@props(['name', 'show' => false, 'maxWidth' => '2xl'])

@php
    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth];
@endphp

<div x-data="{
    show: @js($show),
    focusables() {
        // All focusable element types...
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
        return [...$el.querySelectorAll(selector)]
            // All non-disabled elements...
            .filter(el => !el.hasAttribute('disabled'))
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
}" x-init="$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-y-hidden');
        {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
    } else {
        document.body.classList.remove('overflow-y-hidden');
    }
})"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null" x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
    class="fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: {{ $show ? 'block' : 'none' }};">
    <div x-show="show" class="fixed inset-0 transform " x-on:click="show = false"
        x-:enter=" " x-:enter-start="opacity-0"
        x-:enter-end="opacity-100" x-:leave=" "
        x-:leave-start="opacity-100" x-:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75 dark:bg-gray-900"></div>
    </div>

    <div x-show="show"
        class="{{ $maxWidth }} mb-6 transform overflow-hidden rounded-lg bg-white shadow-xl  sm:mx-auto sm:w-full dark:bg-gray-800"
        x-:enter=" "
        x-:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-:enter-end="opacity-100 translate-y-0 sm:scale-100" x-:leave=" "
        x-:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
    </div>
</div>
