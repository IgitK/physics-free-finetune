{{-- resources/views/layouts/sidebar.blade.php --}}
<!-- Enhanced Sidebar with URL-based Active Item -->
<div class="lg:hidden">
    <!-- Mobile sidebar with slide-in animation -->
    <div x-show="mobileMenuOpen" x-:enter="  "
        x-:enter-start="-translate-x-full" x-:enter-end="translate-x-0"
        x-:leave="  " x-:leave-start="translate-x-0"
        x-:leave-end="-translate-x-full" x-cloak
        class="fixed inset-y-0 left-0 z-50 w-64 transform bg-white shadow-lg">

        <!-- Mobile sidebar header -->
        <div class="flex h-16 items-center justify-between border-b border-gray-200 bg-indigo-600 px-4">
            <div class="flex items-center">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-white/20">
                    <i class="fas fa-atom text-sm text-white"></i>
                </div>
                <div class="ml-3">
                    {{-- <h2 class="text-lg font-semibold text-white">{{ config('app.name', 'PhysicsFree.lk') }}</h2> --}}
                    <h2 class="text-lg font-semibold tracking-tight text-white">PhysicsFree.lk</h2>
                    <p class="text-xs text-white/70">Learning Platform</p>
                </div>
            </div>
            <button @click="mobileMenuOpen = false"
                class="rounded-md p-2 text-white/80   hover:bg-white/10 hover:text-white">
                <i class="fas fa-times text-lg"></i>
            </button>
        </div>

        <!-- Mobile navigation -->
        <nav class="flex-1 overflow-y-auto px-4 py-4">
            <div class="space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}" @click="activeItem = 'dashboard'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-home {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Dashboard</span>
                </a>

                <!-- Students -->
                <a href="" @click="activeItem = 'students'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('students.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-users {{ request()->routeIs('students.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Students</span>
                    <span
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">247</span>
                </a>

                <!-- Schedule -->
                <a href="" @click="activeItem = 'schedule'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('schedule.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-calendar-alt {{ request()->routeIs('schedule.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Schedule</span>
                    <span
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">3</span>
                </a>

                <!-- Classes -->
                <a href="" @click="activeItem = 'classroom'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('classroom.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-book {{ request()->routeIs('classroom.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Classes</span>
                </a>

                <!-- Enrollments -->
                <a href="{{ route('enrollments.index') }}" @click="activeItem = 'enrollments'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('enrollments.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-tasks {{ request()->routeIs('enrollments.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Enrollments</span>
                    <span
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">12</span>
                </a>

                <!-- Resources -->
                <a href="" @click="activeItem = 'resources'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('resources.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-folder-open {{ request()->routeIs('resources.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Resources</span>
                </a>

                <!-- Analytics -->
                <a href="" @click="activeItem = 'analytics'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('analytics.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-chart-line {{ request()->routeIs('analytics.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Analytics</span>
                </a>

                <!-- Messages -->
                <a href="" @click="activeItem = 'messages'; mobileMenuOpen = false"
                    class="{{ request()->routeIs('messages.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                    <i
                        class="fas fa-comments {{ request()->routeIs('messages.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                    <span>Messages</span>
                    <span
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">8</span>
                </a>
            </div>

            <!-- Mobile bottom menu -->
            <div class="mt-8 border-t border-gray-200 pt-4">
                <div class="space-y-1">
                    <!-- Settings -->
                    <a href="" @click="activeItem = 'settings'; mobileMenuOpen = false"
                        class="{{ request()->routeIs('settings.*') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                        <i
                            class="fas fa-cog {{ request()->routeIs('settings.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                        <span>Settings</span>
                    </a>

                    <!-- Help -->
                    <a href="" @click="activeItem = 'help'; mobileMenuOpen = false"
                        class="{{ request()->routeIs('help.*') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50">
                        <i
                            class="fas fa-question-circle {{ request()->routeIs('help.*') ? 'text-indigo-600' : 'text-gray-400' }} mr-3 flex-shrink-0 text-lg  "></i>
                        <span>Help & Support</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Desktop sidebar with width  -->
<div class="hidden    lg:fixed lg:inset-y-0 lg:z-40 lg:flex lg:flex-col"
    :class="sidebarCollapsed ? 'lg:w-16' : 'lg:w-64'">

    <!-- Sidebar content -->
    <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
        <!-- Desktop logo -->
        <div class="flex h-16 flex-shrink-0 items-center bg-indigo-600 px-4">
            <div class="flex w-full items-center">
                <div class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-white/20">
                    <i class="fas fa-atom text-sm text-white"></i>
                </div>
                <div class="ml-3 overflow-hidden  "
                    :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">
                    <h2 class="whitespace-nowrap text-lg font-semibold text-white">{{ config('app.name', 'Laravel') }}
                    </h2>
                    <p class="whitespace-nowrap text-xs text-white/70">Learning Platform</p>
                </div>
            </div>
        </div>

        <!-- Desktop navigation -->
        <nav class="flex-1 overflow-y-auto bg-white px-3 py-4">
            <div class="space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}" @click="activeItem = 'dashboard'"
                    class="{{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Dashboard' : ''">
                    <i
                        class="fas fa-home {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Dashboard</span>
                </a>

                <!-- Students -->
                <a href="" @click="activeItem = 'students'"
                    class="{{ request()->routeIs('students.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Students' : ''">
                    <i
                        class="fas fa-users {{ request()->routeIs('students.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Students</span>
                    <span x-show="!sidebarCollapsed" x-:enter="  "
                        x-:enter-start="opacity-0 scale-75" x-:enter-end="opacity-100 scale-100"
                        x-:leave="  "
                        x-:leave-start="opacity-100 scale-100" x-:leave-end="opacity-0 scale-75"
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">247</span>
                </a>

                <!-- Schedule -->
                <a href="" @click="activeItem = 'schedule'"
                    class="{{ request()->routeIs('schedule.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Schedule' : ''">
                    <i
                        class="fas fa-calendar-alt {{ request()->routeIs('schedule.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Schedule</span>
                    <span x-show="!sidebarCollapsed" x-:enter="  "
                        x-:enter-start="opacity-0 scale-75" x-:enter-end="opacity-100 scale-100"
                        x-:leave="  "
                        x-:leave-start="opacity-100 scale-100" x-:leave-end="opacity-0 scale-75"
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">3</span>
                </a>

                <!-- Classes -->
                <a href="{{ route('classroom.index') }}" @click="activeItem = 'classroom'"
                    class="{{ request()->routeIs('classroom.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Classes' : ''">
                    <i
                        class="fas fa-book {{ request()->routeIs('classroom.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Classes</span>
                </a>

                <!-- Enrollments -->
                <a href="{{ route('enrollments.index') }}" @click="activeItem = 'enrollments'"
                    class="{{ request()->routeIs('enrollments.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Enrollments' : ''">
                    <i
                        class="fas fa-tasks {{ request()->routeIs('enrollments.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Enrollments</span>
                    <span x-show="!sidebarCollapsed" x-:enter="  "
                        x-:enter-start="opacity-0 scale-75" x-:enter-end="opacity-100 scale-100"
                        x-:leave="  "
                        x-:leave-start="opacity-100 scale-100" x-:leave-end="opacity-0 scale-75"
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">12</span>
                </a>

                <!-- Resources -->
                <a href="" @click="activeItem = 'resources'"
                    class="{{ request()->routeIs('resources.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Resources' : ''">
                    <i
                        class="fas fa-folder-open {{ request()->routeIs('resources.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Resources</span>
                </a>

                <!-- Analytics -->
                <a href="" @click="activeItem = 'analytics'"
                    class="{{ request()->routeIs('analytics.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Analytics' : ''">
                    <i
                        class="fas fa-chart-line {{ request()->routeIs('analytics.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Analytics</span>
                </a>

                <!-- Messages -->
                <a href="" @click="activeItem = 'messages'"
                    class="{{ request()->routeIs('messages.*') ? 'bg-indigo-50 text-indigo-700 border-r-2 border-indigo-600' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                    :title="sidebarCollapsed ? 'Messages' : ''">
                    <i
                        class="fas fa-comments {{ request()->routeIs('messages.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                    <span class="ml-3 overflow-hidden whitespace-nowrap  "
                        :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Messages</span>
                    <span x-show="!sidebarCollapsed" x-:enter="  "
                        x-:enter-start="opacity-0 scale-75" x-:enter-end="opacity-100 scale-100"
                        x-:leave="  "
                        x-:leave-start="opacity-100 scale-100" x-:leave-end="opacity-0 scale-75"
                        class="ml-auto inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">8</span>
                </a>
            </div>

            <!-- Desktop bottom menu -->
            <div class="mt-8 border-t border-gray-200 pt-4">
                <div class="space-y-1">
                    <!-- Settings -->
                    <a href="" @click="activeItem = 'settings'"
                        class="{{ request()->routeIs('settings.*') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                        :title="sidebarCollapsed ? 'Settings' : ''">
                        <i
                            class="fas fa-cog {{ request()->routeIs('settings.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                        <span class="ml-3 overflow-hidden whitespace-nowrap  "
                            :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Settings</span>
                    </a>

                    <!-- Help -->
                    <a href="" @click="activeItem = 'help'"
                        class="{{ request()->routeIs('help.*') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:text-gray-900' }} group flex items-center rounded-lg px-3 py-3 text-sm font-medium   hover:bg-gray-50"
                        :title="sidebarCollapsed ? 'Help & Support' : ''">
                        <i
                            class="fas fa-question-circle {{ request()->routeIs('help.*') ? 'text-indigo-600' : 'text-gray-400' }} flex-shrink-0 text-lg  "></i>
                        <span class="ml-3 overflow-hidden whitespace-nowrap  "
                            :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Help &
                            Support</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Collapse button with icon rotation -->
        <div class="border-t border-gray-200 p-4">
            <button @click="sidebarCollapsed = !sidebarCollapsed"
                class="flex w-full items-center justify-center rounded-lg px-3 py-2 text-sm font-medium text-gray-700   hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <i class="fas  "
                    :class="sidebarCollapsed ? 'fa-chevron-right' : 'fa-chevron-left'"></i>
                <span class="ml-2 overflow-hidden whitespace-nowrap  "
                    :class="sidebarCollapsed ? 'lg:w-0 lg:opacity-0' : 'lg:w-auto lg:opacity-100'">Collapse</span>
            </button>
        </div>
    </div>
</div>
