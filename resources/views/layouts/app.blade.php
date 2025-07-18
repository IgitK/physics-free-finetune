{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PhysicsFree.lk') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page specific styles -->
    @stack('styles')
</head>

<body x-data="{
    mobileMenuOpen: false,
    sidebarCollapsed: localStorage.getItem('sidebarCollapsed') === 'true' || false,
    activeItem: '{{ request()->route()->getName() ?? 'dashboard' }}',
    toggleSidebar() {
        this.sidebarCollapsed = !this.sidebarCollapsed;
        localStorage.setItem('sidebarCollapsed', this.sidebarCollapsed);
    }
}" class="bg-gray-50 font-sans text-gray-900 antialiased">

    <!-- Mobile menu backdrop with fade animation -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-50"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-50"
        x-transition:leave-end="opacity-0" x-cloak @click="mobileMenuOpen = false"
        class="fixed inset-0 z-40 bg-black opacity-50 lg:hidden">
    </div>

    <div class="flex min-h-screen">
        @include('layouts.sidebar')

        <!-- Main content wrapper with animated margin -->
        <div class="flex min-w-0 flex-1 flex-col" :class="sidebarCollapsed ? 'lg:ml-16' : 'lg:ml-64'">
            @include('layouts.header')

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-4 sm:p-6 lg:p-8">
                <div class="">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <!-- Toastify Script -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Page specific scripts -->
    @stack('scripts')

    <!-- Flash Messages -->
    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
            }).showToast();
        </script>
    @endif
</body>

</html>
