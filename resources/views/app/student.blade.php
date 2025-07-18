<x-app-layout>
    <div>
        <div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <!-- Page Header -->
                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Student Management</h2>
                            <p class="text-sm text-gray-600">Manage students, enrollments, and academic records</p>
                        </div>
                        <button
                            class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                            Add New Student
                        </button>
                    </div>

                    <!-- Search and Filter Section -->
                    <div class="mb-6">
                        <div class="flex flex-col gap-4 sm:flex-row">
                            <div class="flex-1">
                                <label for="search" class="sr-only">Search students</label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="search" name="search"
                                        class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Search by name, email, or student ID">
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <select
                                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">All Courses</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="english">English</option>
                                    <option value="history">History</option>
                                </select>
                                <select
                                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">All Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-4">
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-blue-100 p-2">
                                    <i class="fa-solid fa-user-group text-blue-500"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Total Students</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $students->count() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-green-100 p-2">
                                    <i class="fa-regular fa-circle-check text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Active Students</p>
                                    <p class="text-2xl font-bold text-gray-900">1,156</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-yellow-100 p-2">
                                    <i class="fa-solid fa-triangle-exclamation text-yellow-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Pending Approval</p>
                                    <p class="text-2xl font-bold text-gray-900">23</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-red-100 p-2">
                                    <i class="fa-solid fa-circle-exclamation text-red-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Suspended</p>
                                    <p class="text-2xl font-bold text-gray-900">68</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Students Table -->
                    <div class="overflow-hidden bg-white shadow sm:rounded-md">
                        <div class="border-b border-gray-200 px-4 py-5 sm:px-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Students List</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage student accounts and enrollment
                                status</p>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            <!-- Student Row 1 -->
                            @foreach ($students as $student)
                                <li class="px-4 py-4 hover:bg-gray-50">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div
                                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-500">
                                                    <span class="text-sm font-medium text-white">JD</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="flex items-center">
                                                    <p class="text-sm font-medium text-gray-900">
                                                        {{ $student->user->name }}</p>
                                                    <span
                                                        class="font-medium{{ $student->status ? 'text-green-800 bg-green-100 ' : 'text-red-800 bg-red-100' }} ml-2 inline-flex items-center rounded-full px-2.5 py-0.5 text-xs">{{ $student->status ? 'Active' : 'Inactive' }}</span>
                                                </div>
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <p>{{ $student->user->email }}</p>
                                                    <span class="mx-2">•</span>
                                                    <p>Student ID: {{ $student->st_id }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <p class="text-sm text-gray-500">
                                                {{ $student->created_at->format('M d, Y') }} </p>

                                            <div class="flex space-x-2">
                                                <a href="{{ route('student.show', $student->id) }}"
                                                    class="text-sm font-medium text-blue-600 hover:text-blue-900">View</a>
                                                <button
                                                    class="text-sm font-medium text-green-600 hover:text-green-900">Edit</button>
                                                <button
                                                    class="text-sm font-medium text-red-600 hover:text-red-900">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
