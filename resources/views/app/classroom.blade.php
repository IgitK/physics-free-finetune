<x-app-layout>

    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "bottom",
                position: "right",
                backgroundColor: "#0BDA51",
                style: {
                    borderRadius: "8px",
                }
            }).showToast();
        </script>
    @endif

    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white p-6">
            <!-- Page Header -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Class Management</h2>
                    <p class="text-sm text-gray-600">Manage classes</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('classroom.create') }}"
                        class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                        <i class="fa-solid fa-plus mr-2"></i>
                        <span> Add Class</span>
                    </a>
                </div>
            </div>


            <!-- Filter and Search Section -->
            <div class="mb-6">
                <div class="flex flex-col gap-4 lg:flex-row">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text"
                                class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Search classes by name">
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <!-- Medium Filter -->
                        <select
                            class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">All Medium</option>
                            <option value="english">English</option>
                            <option value="sinhala">Sinhala</option>
                        </select>

                        <!-- Type Filter -->
                        <select
                            class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">All Types</option>
                            <option value="online">Online</option>
                            <option value="physical">Physical</option>
                        </select>

                        <!-- Institute Filter -->
                        <select
                            class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">All Institutes</option>
                            @foreach ($classrooms->pluck('institute')->unique()->filter() as $institute)
                                <option value="{{ $institute }}">{{ ucfirst($institute) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Stats Overview -->
            <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-4">
                <div class="rounded-lg border border-gray-200 bg-white p-4">
                    <div class="flex items-center">
                        <div class="rounded-lg bg-blue-100 p-2">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-600">Total Classes</p>
                            <p class="text-lg font-bold text-gray-900">{{ $classrooms->count() }}</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="rounded-lg border border-gray-200 bg-white p-4">
                    <div class="flex items-center">
                        <div class="rounded-lg bg-green-100 p-2">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-600">Available</p>
                            <p class="text-lg font-bold text-gray-900">32</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border border-gray-200 bg-white p-4">
                    <div class="flex items-center">
                        <div class="rounded-lg bg-red-100 p-2">
                            <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-600">Occupied</p>
                            <p class="text-lg font-bold text-gray-900">14</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border border-gray-200 bg-white p-4">
                    <div class="flex items-center">
                        <div class="rounded-lg bg-purple-100 p-2">
                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-600">Capacity</p>
                            <p class="text-lg font-bold text-gray-900">1,240</p>
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- Classroom Grid -->
            <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">
                @foreach ($classrooms as $classroom)
                    <!--  Classroom Card -->
                    <div class="classroom-item rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition-shadow duration-200 hover:border-blue-200 hover:shadow-md"
                        data-name="{{ strtolower($classroom->name) }}" data-medium="{{ $classroom->medium }}"
                        data-type="{{ $classroom->type }}" data-institute="{{ $classroom->institute }}">

                        <!-- Header -->
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $classroom->name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $classroom->institute ?? '—' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Info Section -->
                        <div class="mb-4 space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-500">Type:</span>
                                <span
                                    class="{{ $classroom->type == 'online' ? 'bg-green-100 text-green-800' : 'bg-purple-100 text-purple-800' }} rounded-full px-2 py-0.5 text-xs font-medium">
                                    {{ ucfirst($classroom->type) }}
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Students:</span>
                                <span class="font-medium text-gray-800">50 students</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Medium:</span>
                                <span
                                    class="{{ $classroom->medium == 'english' ? 'bg-blue-100 text-blue-800' : 'bg-amber-100 text-amber-800' }} rounded-full px-2 py-0.5 text-xs font-medium">
                                    {{ ucfirst($classroom->medium) }}
                                </span>
                            </div>
                        </div>

                        <!-- Schedule -->
                        <div class="mb-5">
                            <h4 class="mb-2 text-sm font-medium text-gray-900">Schedule</h4>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($classroom->start_time)->format('h:i A') }} -
                                    {{ \Carbon\Carbon::parse($classroom->end_time)->format('h:i A') }}
                                </span>
                                <span class="font-medium text-indigo-600">{{ ucfirst($classroom->day) }}</span>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex space-x-3">
                            <a href="{{ route('classroom.show', $classroom) }}"
                                class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-700">
                                View
                            </a>
                            <a href="{{ route('classroom.edit', $classroom) }}"
                                class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-100">
                                Edit
                            </a>
                            <!-- Delete Button -->
                            <button x-data
                                @click="$dispatch('open-modal', { id: 'delete-classroom-{{ $classroom->id }}' })"
                                class="text-lg text-red-600 hover:text-red-500">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Reusable Confirmation Modal -->
                            <x-confirm-delete id="delete-classroom-{{ $classroom->id }}" :action="route('classroom.destroy', $classroom->id)"
                                title="Delete Classroom"
                                message="Are you sure you want to delete this resource? This cannot be undone." />
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('input[placeholder="Search classrooms by name"]');
            const mediumSelect = document.querySelectorAll('select')[0];
            const typeSelect = document.querySelectorAll('select')[1];
            const instituteSelect = document.querySelectorAll('select')[2];
            const classrooms = document.querySelectorAll('.classroom-item');

            function filterClassrooms() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedMedium = mediumSelect.value;
                const selectedType = typeSelect.value;
                const selectedInstitute = instituteSelect.value;

                classrooms.forEach(item => {
                    const name = item.dataset.name;
                    const medium = item.dataset.medium;
                    const type = item.dataset.type;
                    const institute = item.dataset.institute;

                    const matchesSearch = name.includes(searchTerm);
                    const matchesMedium = !selectedMedium || medium === selectedMedium;
                    const matchesType = !selectedType || type === selectedType;
                    const matchesInstitute = !selectedInstitute || institute === selectedInstitute;

                    if (matchesSearch && matchesMedium && matchesType && matchesInstitute) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            [searchInput, mediumSelect, typeSelect, instituteSelect].forEach(el => {
                el.addEventListener('input', filterClassrooms);
                el.addEventListener('change', filterClassrooms);
            });
        });
    </script>


</x-app-layout>
