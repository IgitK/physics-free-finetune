{{-- resources/views/layouts/header.blade.php --}}
<nav class="sticky top-0 z-30 border-b border-gray-200 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Left side -->
            <div class="flex items-center space-x-4">
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = true"
                    class="rounded-md p-2 text-gray-600 transition-colors duration-200 hover:bg-gray-100 hover:text-gray-900 focus:outline-none lg:hidden">
                    <i class="fas fa-bars text-lg"></i>
                </button>

                <!-- Sidebar toggle for desktop -->
                <button @click="toggleSidebar()"
                    class="hidden rounded-md px-3 py-1 text-gray-600 transition-colors duration-200 hover:bg-gray-100 hover:text-gray-900 focus:outline-none lg:block">
                    <i class="fas fa-bars text-lg"></i>
                </button>

                <!-- Logo for mobile -->
                <div class="flex-shrink-0 lg:hidden">
                    <div class="flex items-center">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-600">
                            <i class="fas fa-atom text-sm text-white"></i>
                        </div>
                        <span class="ml-2 text-lg font-semibold text-gray-900">
                            PhysicsFree.lk
                        </span>
                    </div>
                </div>

                <!-- Breadcrumb for larger screens -->
                <div class="hidden items-center space-x-2 text-sm lg:flex">
                    @php
                        $breadcrumbs = [
                            'dashboard' => 'Dashboard',
                            'students' => 'Students',
                            'schedule' => 'Schedule',
                            'classroom' => 'Classes',
                            'enrollments' => 'Enrollments',
                            'resources' => 'Resources',
                            'analytics' => 'Analytics',
                            'messages' => 'Messages',
                            'settings' => 'Settings',
                            'profile' => 'Profile',
                        ];

                        $currentRoute = request()->route()->getName();
                        $routeParts = explode('.', $currentRoute);
                        $currentSection = $routeParts[0] ?? 'dashboard';
                        $currentAction = $routeParts[1] ?? 'index';

                        // Build breadcrumb path
                        $breadcrumbPath = [];

                        // Add Dashboard as root
                        $breadcrumbPath[] = [
                            'name' => 'Dashboard',
                            'url' => route('dashboard'),
                            'active' => $currentSection === 'dashboard',
                        ];

                        // Add current section if not dashboard
                        if ($currentSection !== 'dashboard' && isset($breadcrumbs[$currentSection])) {
                            $sectionRoute = $currentSection . '.index';
                            $breadcrumbPath[] = [
                                'name' => $breadcrumbs[$currentSection],
                                'url' => Route::has($sectionRoute) ? route($sectionRoute) : '#',
                                'active' => $currentAction === 'index',
                            ];

                            // Add action if not index
                            if ($currentAction !== 'index') {
                                $actionNames = [
                                    'create' => 'Create',
                                    'edit' => 'Edit',
                                    'show' => 'View',
                                    'store' => 'Store',
                                    'update' => 'Update',
                                    'destroy' => 'Delete',
                                ];

                                $breadcrumbPath[] = [
                                    'name' => $actionNames[$currentAction] ?? ucfirst($currentAction),
                                    'url' => '#',
                                    'active' => true,
                                ];
                            }
                        }
                    @endphp

                    @foreach ($breadcrumbPath as $index => $breadcrumb)
                        @if ($index > 0)
                            <i class="fas fa-chevron-right text-xs text-gray-400"></i>
                        @endif

                        @if ($breadcrumb['active'])
                            <span class="font-medium text-gray-900">{{ $breadcrumb['name'] }}</span>
                        @else
                            <a href="{{ $breadcrumb['url'] }}"
                                class="text-gray-500 transition-colors duration-200 hover:text-gray-700">
                                {{ $breadcrumb['name'] }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Right side -->
            <div class="flex items-center space-x-3">
                {{-- <!-- Search bar (hidden on mobile) -->
                <div class="hidden md:block">
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-sm text-gray-400"></i>
                        </div>
                        <input type="text" placeholder="Search students, classes..."
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 text-sm placeholder-gray-500 transition-colors duration-200 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div> --}}

                <!-- Notifications -->
                <div x-data="{ notificationOpen: false }" class="relative">
                    <button @click="notificationOpen = !notificationOpen"
                        class="relative rounded-md bg-gray-100 px-3 py-1 text-gray-600 transition-colors duration-200 hover:bg-gray-200 hover:text-gray-900 focus:outline-none">
                        <i class="fas fa-bell text-sm"></i>
                        <span
                            class="absolute right-0 top-0 block h-2 w-2 animate-pulse rounded-full bg-red-500 ring-2 ring-white"></span>
                    </button>

                    <!-- Notifications dropdown with animation -->
                    <div x-show="notificationOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 translate-y-1" x-cloak
                        @click.away="notificationOpen = false"
                        class="absolute left-1/2 z-50 mt-2 w-80 origin-top-right -translate-x-60 transform rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 md:left-auto md:right-0 md:translate-x-0">
                        <div class="border-b border-gray-200 px-4 py-3">
                            <h3 class="text-sm font-medium text-gray-900">Notifications</h3>
                        </div>
                        <div class="max-h-64 overflow-y-auto">
                            <a href="#" class="flex px-4 py-3 transition-colors duration-200 hover:bg-gray-50">
                                <div class="flex-shrink-0">
                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100">
                                        <i class="fas fa-user-plus text-xs text-blue-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">New student enrolled</p>
                                    <p class="truncate text-sm text-gray-500">Sarah Johnson joined Physics Grade 12</p>
                                    <p class="mt-1 text-xs text-gray-400">2 hours ago</p>
                                </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 transition-colors duration-200 hover:bg-gray-50">
                                <div class="flex-shrink-0">
                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100">
                                        <i class="fas fa-calendar-check text-xs text-green-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Class completed</p>
                                    <p class="truncate text-sm text-gray-500">Quantum Physics - Wave Functions</p>
                                    <p class="mt-1 text-xs text-gray-400">5 hours ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-3">
                            <a href="#"
                                class="text-sm font-medium text-indigo-600 transition-colors duration-200 hover:text-indigo-500">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>



                <!-- Profile Dropdown -->
                <div x-data="{ profileOpen: false }" class="relative">
                    <button @click="profileOpen = !profileOpen"
                        class="flex items-center space-x-2 rounded-full p-1 transition-colors duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <img class="h-8 w-8 rounded-full object-cover"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="Profile">
                        <div class="hidden text-left sm:block">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ ucfirst(Auth::user()->role ?? 'user') }}</p>
                        </div>
                        <i class="fas fa-chevron-down hidden text-xs text-gray-400 transition-transform duration-200 sm:block"
                            :class="profileOpen ? 'rotate-180' : ''"></i>
                    </button>

                    <!-- Profile dropdown with animation -->
                    <div x-show="profileOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 translate-y-1" x-cloak
                        @click.away="profileOpen = false"
                        class="absolute right-0 z-50 mt-2 w-56 origin-top-right transform rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="border-b border-gray-200 px-4 py-3">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <a href="{{ route('profile.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-50">
                            <i class="fas fa-user-circle mr-3 w-4 text-gray-400"></i>
                            Your Profile
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-50">
                            <i class="fas fa-cog mr-3 w-4 text-gray-400"></i>
                            Settings
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-50">
                            <i class="fas fa-question-circle mr-3 w-4 text-gray-400"></i>
                            Help & Support
                        </a>
                        <div class="border-t border-gray-200"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="flex w-full items-center px-4 py-2 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-50">
                                <i class="fas fa-sign-out-alt mr-3 w-4 text-gray-400"></i>
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
