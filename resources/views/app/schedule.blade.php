<x-app-layout>
    <div class="">
        <div class="">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <!-- Page Header -->
                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Class Schedule Management</h2>
                            <p class="text-sm text-gray-600">Manage class schedules, time slots, and room assignments
                            </p>
                        </div>
                        <div class="flex space-x-3">
                            <button
                                class="rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white hover:bg-green-700">
                                Import Schedule
                            </button>
                            <button
                                class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                Add New Class
                            </button>
                        </div>
                    </div>

                    <!-- Filter and View Options -->
                    <div class="mb-6">
                        <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
                            <div class="flex flex-col gap-4 sm:flex-row">
                                <select
                                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">All Courses</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="english">English</option>
                                    <option value="history">History</option>
                                    <option value="physics">Physics</option>
                                </select>
                                <select
                                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">All Instructors</option>
                                    <option value="john_doe">John Doe</option>
                                    <option value="jane_smith">Jane Smith</option>
                                    <option value="mike_johnson">Mike Johnson</option>
                                </select>
                                <select
                                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">All Rooms</option>
                                    <option value="room_a101">Room A101</option>
                                    <option value="room_b205">Room B205</option>
                                    <option value="lab_c301">Lab C301</option>
                                </select>
                            </div>
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    Week View
                                </button>
                                <button
                                    class="rounded-md bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                    Day View
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Current Week Navigation -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button class="rounded-md p-2 hover:bg-gray-100">
                                    <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <h3 class="text-lg font-semibold text-gray-900">July 7 - July 13, 2025</h3>
                                <button class="rounded-md p-2 hover:bg-gray-100">
                                    <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="rounded-md bg-blue-50 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-100">
                                Today
                            </button>
                        </div>
                    </div>

                    <!-- Schedule Grid -->
                    <div class="overflow-hidden rounded-lg border border-gray-200 bg-white">
                        <!-- Header with days -->
                        <div class="grid grid-cols-8 border-b border-gray-200 bg-gray-50">
                            <div class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Time
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Monday<br><span class="font-normal text-gray-400">Jul 7</span>
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Tuesday<br><span class="font-normal text-gray-400">Jul 8</span>
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Wednesday<br><span class="font-normal text-gray-400">Jul 9</span>
                            </div>
                            <div
                                class="bg-blue-50 px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-blue-600">
                                Thursday<br><span class="font-normal text-blue-400">Jul 10</span>
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Friday<br><span class="font-normal text-gray-400">Jul 11</span>
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Saturday<br><span class="font-normal text-gray-400">Jul 12</span>
                            </div>
                            <div
                                class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider text-gray-500">
                                Sunday<br><span class="font-normal text-gray-400">Jul 13</span>
                            </div>
                        </div>

                        <!-- Time slots -->
                        <div class="divide-y divide-gray-200">
                            <!-- 8:00 AM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    8:00 AM
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-blue-200 bg-blue-100 p-2 text-xs">
                                        <div class="font-medium text-blue-900">Mathematics</div>
                                        <div class="text-blue-700">Prof. Johnson</div>
                                        <div class="text-blue-600">Room A101</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-green-200 bg-green-100 p-2 text-xs">
                                        <div class="font-medium text-green-900">Physics</div>
                                        <div class="text-green-700">Dr. Smith</div>
                                        <div class="text-green-600">Lab C301</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-purple-200 bg-purple-100 p-2 text-xs">
                                        <div class="font-medium text-purple-900">English</div>
                                        <div class="text-purple-700">Ms. Davis</div>
                                        <div class="text-purple-600">Room B205</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="px-2 py-1"></div>
                            </div>

                            <!-- 9:00 AM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    9:00 AM
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-red-200 bg-red-100 p-2 text-xs">
                                        <div class="font-medium text-red-900">Chemistry</div>
                                        <div class="text-red-700">Dr. Wilson</div>
                                        <div class="text-red-600">Lab C302</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-blue-200 bg-blue-100 p-2 text-xs">
                                        <div class="font-medium text-blue-900">Mathematics</div>
                                        <div class="text-blue-700">Prof. Johnson</div>
                                        <div class="text-blue-600">Room A102</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-yellow-200 bg-yellow-100 p-2 text-xs">
                                        <div class="font-medium text-yellow-900">History</div>
                                        <div class="text-yellow-700">Prof. Brown</div>
                                        <div class="text-yellow-600">Room A201</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-green-200 bg-green-100 p-2 text-xs">
                                        <div class="font-medium text-green-900">Biology</div>
                                        <div class="text-green-700">Dr. Lee</div>
                                        <div class="text-green-600">Lab C303</div>
                                    </div>
                                </div>
                                <div class="px-2 py-1"></div>
                            </div>

                            <!-- 10:00 AM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    10:00 AM
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-purple-200 bg-purple-100 p-2 text-xs">
                                        <div class="font-medium text-purple-900">Literature</div>
                                        <div class="text-purple-700">Ms. Davis</div>
                                        <div class="text-purple-600">Room B206</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-indigo-200 bg-indigo-100 p-2 text-xs">
                                        <div class="font-medium text-indigo-900">Computer Science</div>
                                        <div class="text-indigo-700">Dr. Garcia</div>
                                        <div class="text-indigo-600">Lab D401</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-pink-200 bg-pink-100 p-2 text-xs">
                                        <div class="font-medium text-pink-900">Art</div>
                                        <div class="text-pink-700">Ms. Taylor</div>
                                        <div class="text-pink-600">Studio E101</div>
                                    </div>
                                </div>
                                <div class="px-2 py-1">
                                    <div class="rounded border border-gray-200 bg-gray-100 p-2 text-xs">
                                        <div class="font-medium text-gray-900">Study Hall</div>
                                        <div class="text-gray-700">Various</div>
                                        <div class="text-gray-600">Library</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 11:00 AM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    11:00 AM
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-blue-200 bg-blue-100 p-2 text-xs">
                                        <div class="font-medium text-blue-900">Advanced Math</div>
                                        <div class="text-blue-700">Prof. Johnson</div>
                                        <div class="text-blue-600">Room A103</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-green-200 bg-green-100 p-2 text-xs">
                                        <div class="font-medium text-green-900">Environmental Science</div>
                                        <div class="text-green-700">Dr. Smith</div>
                                        <div class="text-green-600">Room B301</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="px-2 py-1"></div>
                            </div>

                            <!-- 12:00 PM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    12:00 PM
                                </div>
                                <div class="border-r border-gray-200 bg-yellow-50 px-2 py-1">
                                    <div class="py-2 text-center text-xs font-medium text-yellow-700">
                                        LUNCH BREAK
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-yellow-50 px-2 py-1">
                                    <div class="py-2 text-center text-xs font-medium text-yellow-700">
                                        LUNCH BREAK
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-yellow-50 px-2 py-1">
                                    <div class="py-2 text-center text-xs font-medium text-yellow-700">
                                        LUNCH BREAK
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 bg-yellow-50 px-2 py-1">
                                    <div class="py-2 text-center text-xs font-medium text-yellow-700">
                                        LUNCH BREAK
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-yellow-50 px-2 py-1">
                                    <div class="py-2 text-center text-xs font-medium text-yellow-700">
                                        LUNCH BREAK
                                    </div>
                                </div>
                                <div class="px-2 py-1"></div>
                            </div>

                            <!-- 1:00 PM -->
                            <div class="grid min-h-16 grid-cols-8">
                                <div class="border-r border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500">
                                    1:00 PM
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-orange-200 bg-orange-100 p-2 text-xs">
                                        <div class="font-medium text-orange-900">Spanish</div>
                                        <div class="text-orange-700">Sra. Martinez</div>
                                        <div class="text-orange-600">Room B207</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-teal-200 bg-teal-100 p-2 text-xs">
                                        <div class="font-medium text-teal-900">Geography</div>
                                        <div class="text-teal-700">Mr. Clark</div>
                                        <div class="text-teal-600">Room A202</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-red-200 bg-red-100 p-2 text-xs">
                                        <div class="font-medium text-red-900">Chemistry Lab</div>
                                        <div class="text-red-700">Dr. Wilson</div>
                                        <div class="text-red-600">Lab C302</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 bg-blue-50 px-2 py-1"></div>
                                <div class="border-r border-gray-200 px-2 py-1">
                                    <div class="rounded border border-indigo-200 bg-indigo-100 p-2 text-xs">
                                        <div class="font-medium text-indigo-900">Programming</div>
                                        <div class="text-indigo-700">Dr. Garcia</div>
                                        <div class="text-indigo-600">Lab D401</div>
                                    </div>
                                </div>
                                <div class="border-r border-gray-200 px-2 py-1"></div>
                                <div class="px-2 py-1"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="mt-6 flex flex-col justify-between gap-4 sm:flex-row">
                        <div class="flex gap-2">
                            <button
                                class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Export Schedule
                            </button>
                            <button
                                class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Print Schedule
                            </button>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="rounded-md bg-yellow-600 px-4 py-2 text-sm font-medium text-white hover:bg-yellow-700">
                                Check Conflicts
                            </button>
                            <button
                                class="rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white hover:bg-green-700">
                                Publish Schedule
                            </button>
                        </div>
                    </div>

                    <!-- Legend -->
                    <div class="mt-6 rounded-lg bg-gray-50 p-4">
                        <h4 class="mb-3 text-sm font-medium text-gray-900">Subject Color Legend</h4>
                        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 lg:grid-cols-6">
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-blue-200"></div>
                                <span class="text-sm text-gray-700">Mathematics</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-green-200"></div>
                                <span class="text-sm text-gray-700">Science</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-purple-200"></div>
                                <span class="text-sm text-gray-700">English</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-red-200"></div>
                                <span class="text-sm text-gray-700">Chemistry</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-yellow-200"></div>
                                <span class="text-sm text-gray-700">History</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-4 w-4 rounded bg-indigo-200"></div>
                                <span class="text-sm text-gray-700">Computer Science</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
