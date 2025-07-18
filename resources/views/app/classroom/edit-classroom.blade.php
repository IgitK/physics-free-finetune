<x-app-layout>

    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6">

            <!-- Page Header -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Edit Classroom</h2>
                    <p class="text-sm text-gray-600">Update classroom details</p>
                </div>
            </div>

            <form action="{{ route('classroom.update', $classroom->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="pb-6">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" required value="{{ old('name', $classroom->name) }}"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Year -->
                        <div>
                            <label for="year" class="block text-sm font-medium text-gray-700">Year <span
                                    class="text-red-500">*</span></label>
                            <input type="number" name="year" required min="2025" max="2100"
                                value="{{ old('year', $classroom->year) }}"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>

                        <!-- Medium -->
                        <div>
                            <label for="medium" class="block text-sm font-medium text-gray-700">Medium <span
                                    class="text-red-500">*</span></label>
                            <select name="medium" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Medium</option>
                                <option value="english"
                                    {{ old('medium', $classroom->medium) === 'english' ? 'selected' : '' }}>English
                                </option>
                                <option value="sinhala"
                                    {{ old('medium', $classroom->medium) === 'sinhala' ? 'selected' : '' }}>Sinhala
                                </option>
                            </select>
                            <x-input-error :messages="$errors->get('medium')" class="mt-2" />
                        </div>

                        <!-- Type -->
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700">Class Type <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-2 flex gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="type" value="physical"
                                        {{ old('type', $classroom->type) === 'physical' ? 'checked' : '' }}
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm">Physical Class</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="type" value="online"
                                        {{ old('type', $classroom->type) === 'online' ? 'checked' : '' }}
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm">Online Class</span>
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <hr class="col-span-2 border-gray-300">

                        <!-- Day -->
                        <div>
                            <label for="day" class="block text-sm font-medium text-gray-700">Day <span
                                    class="text-red-500">*</span></label>
                            <select name="day" required
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                                @foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'satureday', 'sunday'] as $day)
                                    <option value="{{ $day }}"
                                        {{ old('day', $classroom->day) === $day ? 'selected' : '' }}>
                                        {{ ucfirst($day) }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('day')" class="mt-2" />
                        </div>

                        <!-- Start Time -->
                        <div>
                            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time <span
                                    class="text-red-500">*</span></label>
                            <input type="time" name="start_time" required
                                value="{{ old('start_time', $classroom->start_time) }}"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
                        </div>

                        <!-- End Time -->
                        <div>
                            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time <span
                                    class="text-red-500">*</span></label>
                            <input type="time" name="end_time" required
                                value="{{ old('end_time', $classroom->end_time) }}"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
                        </div>

                        <hr class="col-span-2 border-gray-300">

                        <!-- Institute -->
                        <div>
                            <label for="institute" class="mb-2 block text-sm font-medium text-gray-700">
                                Institute <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="institute" required
                                value="{{ old('institute', $classroom->institute) }}"
                                class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter institute Name and City">

                            <x-input-error :messages="$errors->get('institute')" class="mt-2" />
                        </div>
                    </div>
                </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('classroom.index') }}"
                class="rounded-md bg-gray-500 p-2 text-sm font-medium text-white hover:bg-gray-700">Back</a>

            <button type="submit" class="rounded-md bg-blue-500 p-2 text-sm font-medium text-white hover:bg-blue-700">
                <i class="fa-solid fa-save mr-1"></i>
                Update
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
                instituteSelect.disabled = selectedType === 'online';
                if (selectedType === 'online') instituteSelect.value = '';
            }

            typeRadios.forEach(radio => radio.addEventListener('change', toggleInstitute));
            toggleInstitute();
        });
    </script>

</x-app-layout>
