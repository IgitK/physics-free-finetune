<x-app-layout>

    <!-- Main Content -->
    <div class="">
        <!-- Profile Header - YouTube Channel Style -->
        <div class="mb-8 rounded-xl bg-white shadow">

            <!-- Profile Info -->
            <div class="relative px-8 py-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-8">
                    <!-- Profile Picture -->
                    <div class="absolute -top-12 left-8 flex-shrink-0 sm:static sm:mt-0">
                        <div
                            class="flex h-24 w-24 items-center justify-center rounded-full border-4 border-white bg-gray-200 shadow sm:h-32 sm:w-32">
                            <svg class="h-12 w-12 text-gray-400 sm:h-20 sm:w-20" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <div class="mt-16 flex-1 sm:mt-0">
                        <div class="flex items-center">
                            <div class="mb-2 text-2xl font-bold text-gray-900 sm:text-3xl">{{ $student->user->name }}
                            </div>
                            <div
                                class="{{ $student->status ? 'text-green-700 bg-green-100 ' : 'text-red-800 bg-red-100' }} ml-2 inline-flex justify-start rounded-full px-2.5 py-0.5 text-xs font-medium">
                                {{ $student->status ? 'Active' : 'Inactive' }}
                            </div>
                        </div>
                        <p class="mb-2 text-gray-600"> {{ $student->user->email }} </p>
                        <div class="flex flex-wrap items-center gap-x-4 text-sm text-gray-500">
                            <span> Student ID : {{ $student->st_id }}</span>
                            <span>&bull;</span>
                            <span>Joined 1 Class(es)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







</x-app-layout>
