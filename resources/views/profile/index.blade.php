<x-app-layout>

    <div class="bg-gray-50">

        <!-- Main Content -->

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <!-- Profile Sidebar -->
            <div class="lg:col-span-1">
                <div class="rounded-lg bg-white p-6 shadow-md">
                    <!-- Profile Picture -->
                    <div class="mb-6 text-center">
                        <div class="mx-auto mb-4 flex h-32 w-32 items-center justify-center rounded-full bg-gray-300">
                            <svg class="h-16 w-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900">John Doe</h2>
                        <p class="text-gray-600">Computer Science Student</p>
                        <span
                            class="mt-2 inline-block rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Active</span>
                    </div>

                    <!-- Quick Info -->
                    <div class="space-y-3">
                        <div class="flex items-center text-sm">
                            <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                </path>
                            </svg>
                            <span class="text-gray-600">john.doe@university.edu</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <span class="text-gray-600">Student ID: CS2024001</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 118 0v4H8v-4z"></path>
                            </svg>
                            <span class="text-gray-600">Year 3, Semester 1</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 space-y-2">
                        <button
                            class="w-full rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                            Edit Profile
                        </button>
                        <button
                            class="w-full rounded-md bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200">
                            Change Password
                        </button>
                    </div>
                </div>

                <!-- Academic Progress -->
                <div class="mt-6 rounded-lg bg-white p-6 shadow-md">
                    <h3 class="mb-4 text-lg font-semibold text-gray-900">Academic Progress</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="mb-1 flex justify-between text-sm">
                                <span class="text-gray-600">Overall GPA</span>
                                <span class="font-medium">3.75/4.0</span>
                            </div>
                            <div class="h-2 w-full rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-blue-600" style="width: 93.75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1 flex justify-between text-sm">
                                <span class="text-gray-600">Credits Completed</span>
                                <span class="font-medium">85/120</span>
                            </div>
                            <div class="h-2 w-full rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-green-600" style="width: 70.83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Tab Navigation -->
                <div class="mb-6 rounded-lg bg-white shadow-md">
                    <div class="border-b border-gray-200">
                        <nav class="flex space-x-8 px-6">
                            <button class="border-b-2 border-blue-600 px-1 py-4 text-sm font-medium text-blue-600">
                                Overview
                            </button>
                            <button
                                class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                Courses
                            </button>
                            <button
                                class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                Grades
                            </button>
                            <button
                                class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                Schedule
                            </button>
                        </nav>
                    </div>

                    <!-- Overview Tab Content -->
                    <div class="p-6">
                        <!-- Recent Activity -->
                        <div class="mb-8">
                            <h3 class="mb-4 text-lg font-semibold text-gray-900">Recent Activity</h3>
                            <div class="space-y-3">
                                <div class="flex items-start rounded-lg bg-gray-50 p-4">
                                    <div
                                        class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-blue-100">
                                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900">Assignment submitted</p>
                                        <p class="text-sm text-gray-600">Data Structures - Assignment 3</p>
                                        <p class="text-xs text-gray-500">2 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start rounded-lg bg-gray-50 p-4">
                                    <div
                                        class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-green-100">
                                        <svg class="h-4 w-4 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900">Quiz completed</p>
                                        <p class="text-sm text-gray-600">Web Development - Quiz 2 (Score: 85%)</p>
                                        <p class="text-xs text-gray-500">1 day ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start rounded-lg bg-gray-50 p-4">
                                    <div
                                        class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100">
                                        <svg class="h-4 w-4 text-yellow-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.232 16.5c-.77.833.192 2.5 1.732 2.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900">Reminder</p>
                                        <p class="text-sm text-gray-600">Database Systems - Project due tomorrow
                                        </p>
                                        <p class="text-xs text-gray-500">3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Current Courses -->
                        <div>
                            <h3 class="mb-4 text-lg font-semibold text-gray-900">Current Courses</h3>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div class="rounded-lg border border-gray-200 p-4">
                                    <div class="mb-2 flex items-center justify-between">
                                        <h4 class="font-medium text-gray-900">Data Structures</h4>
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">CS301</span>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-600">Prof. Smith</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Progress: 75%</span>
                                        <span class="text-sm font-medium text-green-600">A-</span>
                                    </div>
                                </div>
                                <div class="rounded-lg border border-gray-200 p-4">
                                    <div class="mb-2 flex items-center justify-between">
                                        <h4 class="font-medium text-gray-900">Web Development</h4>
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">CS302</span>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-600">Prof. Johnson</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Progress: 60%</span>
                                        <span class="text-sm font-medium text-green-600">B+</span>
                                    </div>
                                </div>
                                <div class="rounded-lg border border-gray-200 p-4">
                                    <div class="mb-2 flex items-center justify-between">
                                        <h4 class="font-medium text-gray-900">Database Systems</h4>
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">CS303</span>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-600">Prof. Brown</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Progress: 80%</span>
                                        <span class="text-sm font-medium text-green-600">A</span>
                                    </div>
                                </div>
                                <div class="rounded-lg border border-gray-200 p-4">
                                    <div class="mb-2 flex items-center justify-between">
                                        <h4 class="font-medium text-gray-900">Software Engineering</h4>
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">CS304</span>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-600">Prof. Davis</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Progress: 65%</span>
                                        <span class="text-sm font-medium text-yellow-600">B</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="rounded-lg bg-white p-6 shadow-md">
                    <h3 class="mb-4 text-lg font-semibold text-gray-900">Upcoming Deadlines</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between rounded-lg border border-red-200 bg-red-50 p-4">
                            <div>
                                <p class="font-medium text-gray-900">Database Systems - Final Project</p>
                                <p class="text-sm text-gray-600">Due: Tomorrow, 11:59 PM</p>
                            </div>
                            <span class="rounded bg-red-100 px-2 py-1 text-xs text-red-800">Urgent</span>
                        </div>
                        <div
                            class="flex items-center justify-between rounded-lg border border-yellow-200 bg-yellow-50 p-4">
                            <div>
                                <p class="font-medium text-gray-900">Web Development - Assignment 4</p>
                                <p class="text-sm text-gray-600">Due: March 15, 11:59 PM</p>
                            </div>
                            <span class="rounded bg-yellow-100 px-2 py-1 text-xs text-yellow-800">Soon</span>
                        </div>
                        <div
                            class="flex items-center justify-between rounded-lg border border-green-200 bg-green-50 p-4">
                            <div>
                                <p class="font-medium text-gray-900">Software Engineering - Midterm</p>
                                <p class="text-sm text-gray-600">Due: March 20, 2:00 PM</p>
                            </div>
                            <span class="rounded bg-green-100 px-2 py-1 text-xs text-green-800">Later</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
