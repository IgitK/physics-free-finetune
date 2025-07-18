<x-app-layout>
    <div class="space-y-6 rounded-2xl bg-white p-6 shadow-md">
        <!-- Classroom Header -->
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex items-center gap-4">
                <div
                    class="flex h-16 w-16 items-center justify-center rounded-full border-4 border-gray-100 bg-red-100 text-2xl text-red-600 shadow-sm">
                    <i class="fas fa-building"></i>
                </div>

                <div>
                    <h1 class="text-2xl font-semibold text-gray-800">
                        {{ $classroom->name }} - {{ $classroom->institute }}
                    </h1>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <span
                            class="{{ $classroom->type == 'online' ? 'bg-green-100 text-green-700' : 'bg-purple-100 text-purple-700' }} rounded-full px-3 py-0.5 text-xs font-semibold">
                            {{ ucfirst($classroom->type) }}
                        </span>
                        <span
                            class="{{ $classroom->medium == 'english' ? 'bg-blue-100 text-blue-700' : 'bg-amber-100 text-amber-700' }} rounded-full px-3 py-0.5 text-xs font-semibold">
                            {{ ucfirst($classroom->medium) }}
                        </span>
                    </div>
                </div>
            </div>

            <a href="{{ route('classroom.edit', $classroom) }}"
                class="mt-2 text-lg text-gray-500  hover:text-blue-600 sm:mt-0" aria-label="Edit Classroom">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </div>

        <!-- Study Material Section -->
        <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
            <div class="border-b border-gray-200 px-6 py-4">
                <h3 class="text-lg font-semibold text-gray-900">Study Material</h3>
                <p class="mt-1 text-sm text-gray-500">Access and manage study materials for this classroom.</p>
            </div>

            <ul class="divide-y divide-gray-200">
                <!-- Sample Study Material Row -->
                <li class="group flex items-center justify-between px-6 py-4  hover:bg-gray-50">
                    <div class="flex items-center">
                        <div class="h-10 w-10 flex-shrink-0">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-500 text-sm font-medium text-white shadow-sm">
                                <i class="fa-solid fa-file-pdf"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Chapter 1 - Introduction to Algebra</p>
                            <div class="mt-0.5 flex flex-wrap gap-2 text-sm text-gray-500">
                                <span>PDF Document</span>
                                <span class="hidden sm:inline">•</span>
                                <span>Uploaded: Feb 01, 2024</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline"
                        aria-label="Download Chapter 1 - Introduction to Algebra">Download</a>
                </li>

                <!-- More study material rows would be looped here... -->
            </ul>
        </div>

        <!-- Students List -->
        <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
            <div class="border-b border-gray-200 px-6 py-4">
                <h3 class="text-lg font-semibold text-gray-900">Students List</h3>
                <p class="mt-1 text-sm text-gray-500">Manage student accounts and enrollment status.</p>
            </div>

            <ul class="divide-y divide-gray-200">
                <!-- Sample Student Row -->
                <li class="group flex items-center justify-between px-6 py-4  hover:bg-gray-50">
                    <div class="flex items-center">
                        <div class="h-10 w-10 flex-shrink-0">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-500 text-sm font-medium text-white shadow-sm">
                                JD
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-900">John Doe</p>
                                <span
                                    class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                    Active
                                </span>
                            </div>
                            <div class="mt-0.5 flex flex-wrap gap-2 text-sm text-gray-500">
                                <span>john.doe@email.com</span>
                                <span class="hidden sm:inline">•</span>
                                <span>Student ID: STU001</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-right text-sm text-gray-500">
                        Joined: Jan 15, 2024
                    </div>
                </li>

                <!-- More student rows would be looped here... -->
            </ul>
        </div>
    </div>
</x-app-layout>
