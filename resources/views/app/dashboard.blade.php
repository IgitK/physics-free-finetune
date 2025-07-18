<x-app-layout>
    <!-- Recent Activity & Quick Actions -->
    <div class="mb-6 grid grid-cols-1 gap-4 sm:mb-8 sm:gap-6 xl:grid-cols-2">
        <!-- Today's Schedule -->
        <div class="rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="mb-4 text-lg font-medium leading-6 text-gray-900">Today's Schedule</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between rounded-lg bg-blue-50 p-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Math Tutoring - Sarah Johnson</p>
                            <p class="text-sm text-gray-500">10:00 AM - 11:00 AM</p>
                        </div>
                        <span
                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                            Confirmed
                        </span>
                    </div>
                    <div class="flex items-center justify-between rounded-lg bg-yellow-50 p-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Physics Session - Mike Chen</p>
                            <p class="text-sm text-gray-500">2:00 PM - 3:30 PM</p>
                        </div>
                        <span
                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">
                            Pending
                        </span>
                    </div>
                    <div class="flex items-center justify-between rounded-lg bg-purple-50 p-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Chemistry Lab - Emma Davis</p>
                            <p class="text-sm text-gray-500">4:00 PM - 5:00 PM</p>
                        </div>
                        <span
                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                            Confirmed
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="mb-4 text-lg font-medium leading-6 text-gray-900">Quick Actions</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <button
                        class="flex flex-col items-center rounded-lg bg-indigo-50 p-4  hover:bg-indigo-100">
                        <i class="fas fa-plus mb-2 text-2xl text-indigo-600"></i>
                        <span class="text-sm font-medium text-indigo-900">Add Student</span>
                    </button>
                    <button
                        class="flex flex-col items-center rounded-lg bg-green-50 p-4  hover:bg-green-100">
                        <i class="fas fa-calendar-plus mb-2 text-2xl text-green-600"></i>
                        <span class="text-sm font-medium text-green-900">Schedule Class</span>
                    </button>
                    <button
                        class="flex flex-col items-center rounded-lg bg-yellow-50 p-4  hover:bg-yellow-100">
                        <i class="fas fa-file-plus mb-2 text-2xl text-yellow-600"></i>
                        <span class="text-sm font-medium text-yellow-900">Create Course</span>
                    </button>
                    <button
                        class="flex flex-col items-center rounded-lg bg-purple-50 p-4  hover:bg-purple-100">
                        <i class="fas fa-envelope mb-2 text-2xl text-purple-600"></i>
                        <span class="text-sm font-medium text-purple-900">Send Message</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Students & Performance -->
    <div class="grid grid-cols-1 gap-4 sm:gap-6 xl:grid-cols-3">
        <!-- Recent Students -->
        <div class="rounded-lg bg-white shadow xl:col-span-2">
            <div class="px-4 py-5 sm:p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Students</h3>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">View all</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 sm:px-6">
                                    Student</th>
                                <th
                                    class="hidden px-3 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 sm:table-cell sm:px-6">
                                    Subject</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 sm:px-6">
                                    Progress</th>
                                <th
                                    class="hidden px-3 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 sm:px-6 md:table-cell">
                                    Last Session</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div
                                            class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-indigo-500">
                                            <span class="text-sm font-medium text-white">SJ</span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                            <div class="text-xs text-gray-500 sm:hidden">Mathematics</div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell sm:px-6">
                                    Mathematics</td>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div class="h-2 w-full rounded-full bg-gray-200">
                                            <div class="h-2 rounded-full bg-green-600" style="width: 75%"></div>
                                        </div>
                                        <span class="ml-2 text-sm text-gray-500">75%</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:px-6 md:table-cell">
                                    2 days ago</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div
                                            class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-green-500">
                                            <span class="text-sm font-medium text-white">MC</span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Mike Chen</div>
                                            <div class="text-xs text-gray-500 sm:hidden">Physics</div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell sm:px-6">
                                    Physics</td>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div class="h-2 w-full rounded-full bg-gray-200">
                                            <div class="h-2 rounded-full bg-yellow-600" style="width: 60%"></div>
                                        </div>
                                        <span class="ml-2 text-sm text-gray-500">60%</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:px-6 md:table-cell">
                                    1 day ago</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div
                                            class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-purple-500">
                                            <span class="text-sm font-medium text-white">ED</span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Emma Davis</div>
                                            <div class="text-xs text-gray-500 sm:hidden">Chemistry</div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell sm:px-6">
                                    Chemistry</td>
                                <td class="whitespace-nowrap px-3 py-4 sm:px-6">
                                    <div class="flex items-center">
                                        <div class="h-2 w-full rounded-full bg-gray-200">
                                            <div class="h-2 rounded-full bg-green-600" style="width: 85%"></div>
                                        </div>
                                        <span class="ml-2 text-sm text-gray-500">85%</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:px-6 md:table-cell">
                                    Today</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Performance Overview -->
        <div class="rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="mb-4 text-lg font-medium leading-6 text-gray-900">Performance Overview</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Session Completion Rate</span>
                            <span class="font-medium">95%</span>
                        </div>
                        <div class="mt-1 h-2 rounded-full bg-gray-200">
                            <div class="h-2 rounded-full bg-green-600" style="width: 95%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Student Satisfaction</span>
                            <span class="font-medium">4.8/5</span>
                        </div>
                        <div class="mt-1 h-2 rounded-full bg-gray-200">
                            <div class="h-2 rounded-full bg-blue-600" style="width: 96%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Response Time</span>
                            <span class="font-medium">
                                < 2 hours</span>
                        </div>
                        <div class="mt-1 h-2 rounded-full bg-gray-200">
                            <div class="h-2 rounded-full bg-purple-600" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 border-t border-gray-200 pt-4">
                    <div class="text-center">
                        <p class="text-sm text-gray-600">This Month</p>
                        <p class="text-2xl font-bold text-gray-900">24</p>
                        <p class="text-sm text-gray-500">Sessions Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
