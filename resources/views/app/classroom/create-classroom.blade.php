<x-app-layout>

    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white p-6">
            <!-- Page Header -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Create Classroom </h2>
                    <p class="text-sm text-gray-600">Add classroom with time and institute and more details</p>
                </div>

            </div>

            <form action="{{ route('classroom.post') }}" method="POST">
                @csrf

                <!-- Create Classroom Section -->
                <div class="pb-6">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter your class name">

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Year Selection -->
                        <div>
                            <label for="year" class="mb-2 block text-sm font-medium text-gray-700">
                                Year <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="year" required max="2100" min="2025"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter batch year">
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>

                        <!-- Medium Selection -->
                        <div>
                            <label for="medium" class="mb-2 block text-sm font-medium text-gray-700">
                                Medium <span class="text-red-500">*</span>
                            </label>
                            <select name="medium" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Medium</option>
                                <option value="english">English</option>
                                <option value="sinhala">Sinhala</option>
                            </select>
                            <x-input-error :messages="$errors->get('medium')" class="mt-2" />
                        </div>

                        <!-- Type Selection -->
                        <div class="mt-4">
                            <label class="mb-3 block text-sm font-medium text-gray-700">
                                Class Type <span class="text-red-500">*</span>
                            </label>
                            <div class="flex flex-wrap gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="type" value="physical" id="physicalRadio"
                                        class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Physical Class</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="type" value="online" id="onlineRadio"
                                        class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Online Class</span>
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <hr class="col-span-2 border-gray-300">

                        <!--Time section -->
                        <div>
                            <label for="medium" class="mb-2 block text-sm font-medium text-gray-700">
                                Day <span class="text-red-500">*</span>
                            </label>
                            <select name="day" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Day</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="satureday">Satureday</option>
                                <option value="sunday">Sunday</option>
                            </select>
                            <x-input-error :messages="$errors->get('day')" class="mt-2" />
                        </div>


                        <div>
                            <div>
                                <label for="start_time" class="mb-2 block text-sm font-medium text-gray-700">
                                    Start Time <span class="text-red-500">*</span>
                                </label>
                                <input type="time" name="start_time" required
                                    class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            </div>

                            <x-input-error :messages="$errors->get('start_time')" class="mt-2" />

                        </div>

                        <div>
                            <div>
                                <label for="end_time" class="mb-2 block text-sm font-medium text-gray-700">
                                    End Time <span class="text-red-500">*</span>
                                </label>
                                <input type="time" name="end_time" required
                                    class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            </div>
                            <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
                        </div>

                        <hr class="col-span-2 border-gray-300">

                        <!--Institute  section -->
                        <div>
                            <label for="institute" class="mb-2 block text-sm font-medium text-gray-700">
                                Institute <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="institute" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter institute Name and City">

                            <x-input-error :messages="$errors->get('institute')" class="mt-2" />
                        </div>

                    </div>

                </div>

                <div class="flex items-center justify-end gap-3">
                    <a href="{{ route('classroom.index') }}"
                        class="rounded-md bg-gray-500 p-2 text-sm font-medium text-white hover:bg-gray-700">
                        Back</a>

                    <button type="submit"
                        class="rounded-md bg-blue-500 p-2 text-sm font-medium text-white hover:bg-blue-700">
                        <i class="fa-solid fa-plus mr-1"></i>
                        Create
                    </button>
                </div>


            </form>


        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const instituteSelect = document.getElementById('instituteSelect');
            const typeRadios = document.querySelectorAll('input[name="type"]');

            function toggleInstitute() {
                const selectedType = document.querySelector('input[name="type"]:checked')?.value;
                if (selectedType === 'online') {
                    instituteSelect.disabled = true;
                    instituteSelect.value = ''; // Clear selection if needed
                } else {
                    instituteSelect.disabled = false;
                }
            }

            typeRadios.forEach(radio => {
                radio.addEventListener('change', toggleInstitute);
            });

            // Run on load in case of form rehydration
            toggleInstitute();
        });
    </script>


</x-app-layout>
