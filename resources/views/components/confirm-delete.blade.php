@props(['id', 'action', 'title' => 'Are you sure?', 'message' => 'This action cannot be undone.'])

<div x-data="{ open: false }" x-cloak @open-modal.window="if ($event.detail.id === '{{ $id }}') open = true"
    @close-modal.window="if ($event.detail.id === '{{ $id }}') open = false"
    @keydown.window.escape="open = false" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-70" @click="open = false"></div>

    <!-- Modal Content -->
    <div class="relative w-full max-w-md rounded-lg bg-white p-6 shadow-lg" @click.away="open = false"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

        <div class="mb-4 flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-800">{{ $title }}</h2>
            <button @click="open = false" class="text-2xl text-gray-500 hover:text-gray-800">&times;</button>
        </div>

        <p class="mb-4 text-sm text-gray-600">{{ $message }}</p>

        <div class="flex justify-end space-x-3">
            <button @click="open = false" class="text-gray-600 hover:text-gray-900">Cancel</button>

            <form method="POST" action="{{ $action }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg bg-red-600 p-2 text-white">Yes, Delete</button>
            </form>
        </div>
    </div>
</div>
