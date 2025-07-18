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

    <div class="min-h-screen">
        <div>
            <!-- Header -->
            <div class="mb-4">
                <h1 class="text-xl font-bold text-gray-900">Upload Resources</h1>
                <p class="mt-1 text-gray-600">Add educational materials to your resource library</p>
            </div>

            <!-- Upload Form -->
            <div class="mb-8 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <form action="{{ route('resource.post') }}" method="post" enctype="multipart/form-data"
                    class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    @csrf
                    <!-- Title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="mt-1 block w-full" type="text" name="title"
                            :value="old('title')" autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <!-- Category Field -->
                    <div>
                        <x-input-label for="title" :value="__('Category')" />

                        {{-- <div class="relative mt-1" x-data="{ open: false, selected: 'tutorial' }" @click.away="open = false">
                            <button type="button" @click="open = !open"
                                class="flex w-full items-center justify-between rounded-md border border-gray-300 bg-white px-3 py-2 text-left focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <span
                                    x-text="selected === 'tutorial' ? 'Tutorial' : selected === 'past_paper' ? 'Past Paper' : 'Model Paper'"></span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform duration-200"
                                    :class="{ 'rotate-180': open }"></i>
                            </button>

                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute z-10 mt-1 w-full rounded-md border border-gray-300 bg-white shadow-lg">
                                <div class="py-1">
                                    <button type="button"
                                        @click="selected = 'tutorial'; category = 'tutorial'; open = false"
                                        class="flex w-full items-center space-x-3 px-3 py-2 text-left hover:bg-gray-50"
                                        :class="{ 'bg-blue-50 text-blue-700': selected === 'tutorial' }">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100">
                                            <i class="fas fa-book text-blue-600"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Tutorial</div>
                                            <div class="text-sm text-gray-500">Learning materials</div>
                                        </div>
                                    </button>

                                    <button type="button"
                                        @click="selected = 'past_paper'; category = 'past_paper'; open = false"
                                        class="flex w-full items-center space-x-3 px-3 py-2 text-left hover:bg-gray-50"
                                        :class="{ 'bg-blue-50 text-blue-700': selected === 'past_paper' }">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100">
                                            <i class="fas fa-file-alt text-green-600"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Past Paper</div>
                                            <div class="text-sm text-gray-500">Previous exams</div>
                                        </div>
                                    </button>

                                    <button type="button"
                                        @click="selected = 'model_paper'; category = 'model_paper'; open = false"
                                        class="flex w-full items-center space-x-3 px-3 py-2 text-left hover:bg-gray-50"
                                        :class="{ 'bg-blue-50 text-blue-700': selected === 'model_paper' }">
                                        <div
                                            class="flex h-8 w-8 items-center justify-center rounded-full bg-purple-100">
                                            <i class="fas fa-clipboard-check text-purple-600"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Model Paper</div>
                                            <div class="text-sm text-gray-500">Practice templates</div>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <select name="category"class="hidden">
                                <option value="tutorial">Tutorial</option>
                                <option value="past_paper">Past Paper</option>
                                <option value="model_paper">Model Paper</option>
                            </select>

                        </div> --}}

                        <select name="category" id=""
                            class="mt-1 flex w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-left focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                            >
                            <option disabled selected>Select a category</option>
                            <option value="tutorial">Tutorial</option>
                            <option value="past_paper">Past Past</option>
                            <option value="model_paper">Model Paper</option>
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>
                    <!-- File Field -->
                    <div class="md:col-span-2">
                        <x-input-label for="file" :value="__('File')" />
                        <input type="file" id="file" name="file"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 file:mr-4 file:rounded-md file:border-0 file:bg-blue-50 file:px-4 file:py-2 file:text-sm file:font-medium file:text-blue-700 hover:file:bg-blue-100 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-2 text-sm text-gray-600"></p>
                        <x-input-error :messages="$errors->get('file')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end md:col-span-2">
                        <button type="submit"
                            class="flex items-center space-x-2 rounded-md bg-blue-600 px-6 py-2 font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fas fa-upload"></i>
                            <span>Upload Resource</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Resources List -->
            <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                <div class="border-b border-gray-200 px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-900">Available Resources</h2>
                    <p class="mt-1 text-sm text-gray-600">Manage your uploaded educational materials</p>
                </div>

                @foreach ($resources as $resource)
                    <div class="border-b-1 border-gray-300 p-6 hover:bg-gray-100">
                        <div class="flex items-center justify-between">

                            <div class="flex-1">
                                <div class="mb-2 flex items-center space-x-3">
                                    <h3 class="text-lg font-medium text-gray-900">{{ $resource->title }}</h3>
                                </div>

                                <div class="flex items-center space-x-6 text-sm text-gray-500">
                                    <div class="flex items-center space-x-1">
                                        <i class="fas fa-user text-xs"></i>
                                        <span>Admin</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <i class="fas fa-calendar text-xs"></i>
                                        <span>{{ $resource->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <i class="fas fa-file text-xs"></i>
                                        <span>{{ $resource->category }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <i class="fas fa-download text-xs"></i>
                                        <span>125 times</span>
                                    </div>
                                </div>
                            </div>

                            <div class="ml-4 flex items-center space-x-2">
                                <button
                                    class="flex items-center space-x-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <i class="fas fa-download"></i>
                                    <span>Download</span>
                                </button>
                                <!-- Delete Button -->
                                <button x-data
                                    @click="$dispatch('open-modal', { id: 'delete-resource-{{ $resource->id }}' })"
                                    class="text-lg text-red-600 hover:text-red-500">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <!-- Reusable Confirmation Modal -->
                                <x-confirm-delete id="delete-resource-{{ $resource->id }}" :action="route('resource.destroy', $resource->id)"
                                    title="Delete Resource"
                                    message="Are you sure you want to delete this resource? This cannot be undone." />

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
