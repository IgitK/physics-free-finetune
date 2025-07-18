<x-web-layout>


    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">
        <section class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12 text-center">
                <h2
                    class="mb-4 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent">
                    Class Schedule
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-slate-600">
                    Join our A/L preparation classes with flexible online and physical options
                </p>
            </div>

            <!-- Filters -->
            <div class="mb-8 flex flex-wrap items-center justify-center gap-4">
                <!-- Year Filter -->
                <div class="flex items-center space-x-2">
                    <label for="year-filter" class="text-sm font-medium text-slate-700">Year:</label>
                    <select id="year-filter"
                        class="rounded-lg border-slate-300 bg-white px-4 py-2.5 text-sm shadow-sm   hover:border-blue-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="all">All Years</option>
                        @foreach (collect($classrooms)->unique('year') as $classroom)
                            <option value="{{ $classroom->year }}">{{ ucfirst($classroom->year) }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Medium Filter -->
                <div class="flex items-center space-x-2">
                    <label for="medium-filter" class="text-sm font-medium text-slate-700">Medium:</label>
                    <select id="medium-filter"
                        class="rounded-lg border-slate-300 bg-white px-4 py-2.5 text-sm shadow-sm   hover:border-blue-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="all">All Medium</option>
                        @foreach (collect($classrooms)->unique('medium') as $classroom)
                            <option value="{{ $classroom->medium }}">{{ ucfirst($classroom->medium) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Type Filter -->
                <div class="flex items-center space-x-2">
                    <label for="type-filter" class="text-sm font-medium text-slate-700">Type:</label>
                    <select id="type-filter"
                        class="rounded-lg border-slate-300 bg-white px-4 py-2.5 text-sm shadow-sm   hover:border-blue-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="all">All Types</option>
                        @foreach (collect($classrooms)->unique('type') as $classroom)
                            <option value="{{ $classroom->type }}">{{ ucfirst($classroom->type) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Reset Button -->
                <button id="reset-filters"
                    class="rounded-lg bg-slate-200 px-5 py-2.5 text-sm font-medium text-slate-700   hover:bg-slate-300 hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-500/20 focus:ring-offset-2">
                    Reset Filters
                </button>
            </div>

            <!-- Results Count -->
            <div class="mb-6 text-center">
                <span id="results-count" class="text-sm font-medium text-slate-600"></span>
            </div>

            <!-- Schedule Grid -->
            <div id="schedule-grid" class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($classrooms as $index => $classroom)
                    <div class="schedule-card group rounded-xl border border-slate-200 bg-white p-6 shadow-sm   hover:-translate-y-1 hover:border-blue-300 hover:shadow-xl"
                        data-year="{{ $classroom->year }}" data-type="{{ $classroom->type }}"
                        data-medium="{{ $classroom->medium }}" data-index="{{ $index }}">
                        <div class="mb-4 flex items-center justify-between">
                            <h3
                                class="text-xl font-semibold text-slate-800  group-hover:text-blue-600">
                                {{ $classroom->name }}
                            </h3>
                            <span
                                class="{{ $classroom->type === 'physical' ? 'bg-blue-100 text-blue-700 border-blue-200' : 'bg-emerald-100 text-emerald-700 border-emerald-200' }} inline-flex items-center rounded-full border px-3 py-1 text-sm font-medium">
                                {{ ucfirst($classroom->type) }}
                            </span>
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <div class="flex items-center text-slate-600">
                                    <svg class="mr-3 h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <span class="font-medium">{{ ucfirst($classroom->day) }}</span>
                                </div>
                                <div class="flex items-center text-slate-600">
                                    <svg class="mr-3 h-5 w-5 text-indigo-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span
                                        class="text-sm">{{ \Carbon\Carbon::parse($classroom->start_time)->format('h:i A') }}
                                        -
                                        {{ \Carbon\Carbon::parse($classroom->end_time)->format('h:i A') }}</span>
                                </div>
                            </div>

                            <div class="flex items-center text-slate-600">
                                <svg class="mr-3 h-5 w-5 text-purple-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">{{ $classroom->institute }}</span>
                            </div>
                            <div class="flex items-center text-slate-600">
                                <svg class="mr-3 h-5 w-5 text-orange-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        d="m13 19 3.5-9 3.5 9m-6.125-2h5.25M3 7h7m0 0h2m-2 0c0 1.63-.793 3.926-2.239 5.655M7.5 6.818V5m.261 7.655C6.79 13.82 5.521 14.725 4 15m3.761-2.345L5 10m2.761 2.655L10.2 15" />
                                </svg>
                                <span class="text-sm">{{ ucfirst($classroom->medium) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- No Results Message -->
            <div id="no-results" class="hidden py-12 text-center">
                <div class="mx-auto max-w-md">
                    <svg class="mx-auto h-16 w-16 text-slate-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.5-.935-6.086-2.455l-.233-.257A7.96 7.96 0 014 9c0-2.21.895-4.21 2.343-5.657l.233-.257A7.96 7.96 0 0112 1a7.96 7.96 0 015.657 2.343l.257.233A7.962 7.962 0 0120 9c0 2.21-.895-4.21-2.343 5.657l-.257.233A7.96 7.96 0 0112 17z">
                        </path>
                    </svg>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800">No classes found</h3>
                    <p class="mt-2 text-slate-600">No classes match your current filter criteria.</p>
                    <div class="mt-6">
                        <button id="clear-filters"
                            class="inline-flex items-center rounded-lg border border-transparent bg-blue-600 px-6 py-3 text-sm font-medium text-white shadow-sm   hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:ring-offset-2">
                            Clear Filters
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enrollment Form -->
            <div class="mx-auto mt-16 rounded-2xl border border-slate-200 bg-white p-8 shadow-lg">
                <div class="mb-8 text-center">
                    <h3
                        class="mb-2 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-3xl font-bold text-transparent">
                        Enroll Now</h3>
                    <p class="text-slate-600">Fill out the form below to join our A/L preparation classes</p>
                </div>

                <form action="{{ route('enroll') }}" method="POST" id="enrollment-form" class="space-y-6">
                    @csrf
                    <!-- Personal Information Section -->
                    <div class="border-b border-slate-200 pb-8">
                        <h4 class="mb-6 flex items-center text-lg font-semibold text-slate-800">
                            <div class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-blue-100">
                                <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            Personal Information
                        </h4>

                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Full Name -->
                            <div>
                                <label for="fullname" class="mb-2 block text-sm font-medium text-slate-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="fullname" name="fullname" required
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                    placeholder="Enter your full name">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-medium text-slate-700">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                    placeholder="0771234567">
                                <p class="mt-1 text-xs text-slate-500">Enter 10-digit phone number without spaces</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mt-6">
                            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                placeholder="your.email@example.com">
                            <p class="mt-1 text-xs text-slate-500">Double check your email before submission</p>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>



                    <!-- Class Preferences Section -->
                    <div class="pb-8">
                        <h4 class="mb-6 flex items-center text-lg font-semibold text-slate-800">
                            <div class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-100">
                                <svg class="h-4 w-4 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            Class Preferences
                        </h4>

                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Year Selection -->
                            <div>
                                <label for="year" class="mb-2 block text-sm font-medium text-slate-700">
                                    Year <span class="text-red-500">*</span>
                                </label>
                                <select id="year" name="year" required
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                                    <option value="">Select Year</option>
                                    @foreach (collect($classrooms)->unique('year') as $classroom)
                                        <option value="{{ $classroom->year }}">{{ $classroom->year }} A/L</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Medium Selection -->
                            <div>
                                <label for="medium" class="mb-2 block text-sm font-medium text-slate-700">
                                    Medium <span class="text-red-500">*</span>
                                </label>
                                <select id="medium" name="medium" required
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                                    <option value="">Select Medium</option>
                                    @foreach (collect($classrooms)->unique('medium') as $classroom)
                                        <option value="{{ $classroom->medium }}">{{ $classroom->medium }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Class Type Preference -->
                        <div class="mt-6">
                            <label class="mb-3 block text-sm font-medium text-slate-700">
                                Preferred Class Type <span class="text-red-500">*</span>
                            </label>
                            <div class="flex flex-wrap gap-4">
                                <label class="group flex cursor-pointer items-center">
                                    <input type="radio" name="class_type" value="physical" required
                                        class="h-4 w-4 border-slate-300 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <span
                                        class="ml-3 text-sm text-slate-700  group-hover:text-blue-600">Physical
                                        Classes</span>
                                </label>
                                <label class="group flex cursor-pointer items-center">
                                    <input type="radio" name="class_type" value="online" required
                                        class="h-4 w-4 border-slate-300 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <span
                                        class="ml-3 text-sm text-slate-700  group-hover:text-blue-600">Online
                                        Classes</span>
                                </label>
                            </div>
                        </div>

                        <!-- Class Selection -->
                        <div class="mt-6">
                            <label for="class" class="mb-2 block text-sm font-medium text-slate-700">
                                Select the Class You Need to Join <span class="text-red-500">*</span>
                            </label>
                            <select id="class" name="class_id" required
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 disabled:bg-slate-50 disabled:text-slate-500"
                                disabled>
                                <option value="">Please select year, medium, and class type first</option>
                                @foreach ($classrooms as $classroom)
                                    <option value="{{ $classroom->id }}" data-year="{{ $classroom->year }}"
                                        data-medium="{{ $classroom->medium }}" data-type="{{ $classroom->type }}">
                                        {{ $classroom->name }} ({{ ucfirst($classroom->day) }},
                                        {{ \Carbon\Carbon::parse($classroom->start_time)->format('h:i A') }} -
                                        {{ \Carbon\Carbon::parse($classroom->end_time)->format('h:i A') }})
                                    </option>
                                @endforeach
                            </select>

                            <p class="mt-1 text-xs text-slate-500" id="class-help-text">
                                Available classes will appear when you select the options above
                            </p>
                        </div>

                        <!-- Additional Notes -->
                        <div class="mt-6">
                            <label for="notes" class="mb-2 block text-sm font-medium text-slate-700">
                                Additional Notes (Optional)
                            </label>
                            <textarea id="notes" name="notes" rows="3"
                                class="w-full resize-none rounded-lg border border-slate-300 px-4 py-3 text-sm   hover:border-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                placeholder="Any special requirements or questions..."></textarea>
                        </div>
                    </div>


                    <!-- Terms and Conditions -->
                    <div class="border-t border-slate-200 pt-6">
                        <label class="group flex cursor-pointer items-start">
                            <input type="checkbox" name="terms_accepted" value="1" required
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-2 focus:ring-blue-500">
                            <span class="ml-3 text-sm text-slate-700  group-hover:text-slate-800">
                                I agree to the <a href="#"
                                    class="text-blue-600 underline  hover:text-blue-700">Terms and
                                    Conditions</a>
                                and <a href="#"
                                    class="text-blue-600 underline  hover:text-blue-700">Privacy
                                    Policy</a>
                                <span class="text-red-500">*</span>
                            </span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6 text-center">
                        <button type="submit"
                            class="inline-flex transform items-center rounded-lg border border-transparent bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-3 text-sm font-semibold text-white shadow-lg   hover:scale-105 hover:from-blue-700 hover:to-indigo-700 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="submit-btn">
                            <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Submit Enrollment
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        // Pass classrooms data from backend to frontend
        const classrooms = @json($classrooms);
        console.log('Classrooms data:', classrooms);

        // Initialize form when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Pre-select default values if needed
            if (yearSelect.value && mediumSelect.value && document.querySelector(
                    'input[name="class_type"]:checked')) {
                updateClassOptions();
            }

            filterSchedules();
        });

        // DOM elements for schedule filtering
        const yearFilter = document.getElementById('year-filter');
        const mediumFilter = document.getElementById('medium-filter');
        const typeFilter = document.getElementById('type-filter');
        const resetButton = document.getElementById('reset-filters');
        const clearButton = document.getElementById('clear-filters');
        const scheduleCards = document.querySelectorAll('.schedule-card');
        const noResultsDiv = document.getElementById('no-results');
        const resultsCount = document.getElementById('results-count');
        const scheduleGrid = document.getElementById('schedule-grid');

        // DOM elements for enrollment form
        const yearSelect = document.getElementById('year');
        const mediumSelect = document.getElementById('medium');
        const classTypeRadios = document.querySelectorAll('input[name="class_type"]');
        const classSelect = document.getElementById('class');
        const helpText = document.getElementById('class-help-text');



        // Schedule filtering functionality
        function filterSchedules() {
            const selectedYear = yearFilter.value;
            const selectedType = typeFilter.value;
            const selectedMedium = mediumFilter.value;
            let visibleCount = 0;

            scheduleCards.forEach(card => {
                const cardYear = card.dataset.year;
                const cardType = card.dataset.type;
                const cardMedium = card.dataset.medium;

                const yearMatch = selectedYear === 'all' || cardYear === selectedYear;
                const typeMatch = selectedType === 'all' || cardType === selectedType;
                const mediumMatch = selectedMedium === 'all' || cardMedium === selectedMedium;

                if (yearMatch && typeMatch && mediumMatch) {
                    card.style.display = 'block';
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                    card.classList.add('hidden');
                }
            });

            // Update results count
            if (visibleCount === 0) {
                noResultsDiv.classList.remove('hidden');
                scheduleGrid.classList.add('hidden');
                resultsCount.textContent = '';
            } else {
                noResultsDiv.classList.add('hidden');
                scheduleGrid.classList.remove('hidden');
                resultsCount.textContent = `Showing ${visibleCount} class${visibleCount !== 1 ? 'es' : ''}`;
            }
        }

        function resetFilters() {
            yearFilter.value = 'all';
            typeFilter.value = 'all';
            mediumFilter.value = 'all';
            filterSchedules();
        }

        // Enrollment form functionality
        function updateClassOptions() {
            const selectedYear = yearSelect.value;
            const selectedMedium = mediumSelect.value;
            const selectedClassType = document.querySelector('input[name="class_type"]:checked')?.value;

            console.log('Selected:', {
                selectedYear,
                selectedMedium,
                selectedClassType
            });

            // Clear existing options
            classSelect.innerHTML = '';

            // Check if all required fields are selected
            if (!selectedYear || !selectedMedium || !selectedClassType) {
                classSelect.disabled = true;
                classSelect.innerHTML = '<option value="">Please select year, medium, and class type first</option>';
                helpText.textContent = 'Available classes will appear when you select the options above';
                helpText.className = 'mt-1 text-xs text-slate-500';
                return;
            }

            // Filter classrooms based on selected criteria
            const filteredClassrooms = classrooms.filter(classroom => {
                const yearMatch = String(classroom.year) === String(selectedYear);
                const mediumMatch = String(classroom.medium) === String(selectedMedium);
                const typeMatch = String(classroom.type) === String(selectedClassType);

                console.log('Filtering:', {
                    classroom: classroom,
                    yearMatch,
                    mediumMatch,
                    typeMatch
                });

                return yearMatch && mediumMatch && typeMatch;
            });

            console.log('Filtered classrooms:', filteredClassrooms);

            // Enable the select and populate options
            classSelect.disabled = false;

            if (filteredClassrooms.length === 0) {
                classSelect.innerHTML = '<option value="">No classes available for selected criteria</option>';
                helpText.textContent = 'No classes match your selection. Please try different options.';
                helpText.className = 'mt-1 text-xs text-amber-600';
            } else {
                // Add default option
                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = 'Select Class';
                classSelect.appendChild(defaultOption);

                // Add filtered options
                filteredClassrooms.forEach(classroom => {
                    const option = document.createElement('option');
                    const timeStart = classroom.start_time ? new Date(`2000-01-01T${classroom.start_time}`)
                        .toLocaleTimeString('en-US', {
                            hour: 'numeric',
                            minute: '2-digit',
                            hour12: true
                        }) : '';
                    const timeEnd = classroom.end_time ? new Date(`2000-01-01T${classroom.end_time}`)
                        .toLocaleTimeString('en-US', {
                            hour: 'numeric',
                            minute: '2-digit',
                            hour12: true
                        }) : '';

                    // Set the value to the classroom ID (this is what gets submitted)
                    option.value = classroom.id;

                    // Set the display text to show class details
                    option.textContent =
                        `${classroom.name} - ${classroom.day} / ${timeStart} - ${timeEnd} (${classroom.institute})`;

                    classSelect.appendChild(option);
                });

                helpText.textContent = `${filteredClassrooms.length} class(es) available for your selection`;
                helpText.className = 'mt-1 text-xs text-emerald-600';
            }
        }

        // Event listeners for schedule filtering
        yearFilter.addEventListener('change', filterSchedules);
        typeFilter.addEventListener('change', filterSchedules);
        mediumFilter.addEventListener('change', filterSchedules);
        resetButton.addEventListener('click', resetFilters);
        if (clearButton) {
            clearButton.addEventListener('click', resetFilters);
        }

        // Event listeners for enrollment form
        yearSelect.addEventListener('change', updateClassOptions);
        mediumSelect.addEventListener('change', updateClassOptions);
        classTypeRadios.forEach(radio => {
            radio.addEventListener('change', updateClassOptions);
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            filterSchedules();
            updateClassOptions();
        });
    </script>

</x-web-layout>
