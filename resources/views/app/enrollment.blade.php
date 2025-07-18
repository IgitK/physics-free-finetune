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

    <div class="py-4">
        <div class="">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Enrollment Management</h2>
                        <p class="text-sm text-gray-600">Manage enrollments comming form website</p>
                    </div>

                    <!-- Stats Cards -->
                    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-4">
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-blue-100 p-2">
                                    <i class="fa-solid fa-user-group text-blue-500"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Total </p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $enrollments->count() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-green-100 p-2">
                                    <i class="fa-regular fa-circle-check text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Approved </p>
                                    <p class="text-2xl font-bold text-gray-900">
                                        {{ $enrollments->where('status', 1)->count() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-yellow-100 p-2">
                                    <i class="fa-solid fa-triangle-exclamation text-yellow-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Pending </p>
                                    <p class="text-2xl font-bold text-gray-900">
                                        {{ $enrollments->where('status', 0)->count() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-200 bg-white p-4">
                            <div class="flex items-center">
                                <div class="rounded-lg bg-red-100 p-2">
                                    <i class="fa-solid fa-circle-exclamation text-red-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Rejected</p>
                                    <p class="text-2xl font-bold text-gray-900">
                                        {{ $enrollments->where('status', 2)->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Status Filter -->
                    <div class="mb-6">
                        <div class="flex space-x-4 font-medium">
                            <a href="{{ route('enrollments.index') }}"
                                class="{{ request('status') === null ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-md px-4 py-2">
                                All
                            </a>
                            <a href="{{ route('enrollments.index', ['status' => 0]) }}"
                                class="{{ request('status') == '0' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-md px-4 py-2">
                                Pending
                            </a>
                            <a href="{{ route('enrollments.index', ['status' => 1]) }}"
                                class="{{ request('status') == '1' ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-md px-4 py-2">
                                Approved
                            </a>
                            <a href="{{ route('enrollments.index', ['status' => 2]) }}"
                                class="{{ request('status') == '2' ? 'bg-red-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-md px-4 py-2">
                                Rejected
                            </a>
                        </div>
                    </div>

                    <!-- Enrollments Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Student Details
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Classroom
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Contact
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Enrolled Date
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($enrollments as $enrollment)
                                    <tr class="hover:bg-gray-50">
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $enrollment->full_name }}
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $enrollment->classroom->name }}<br>
                                                <span
                                                    class="{{ $enrollment->classroom->type == 'online' ? 'bg-green-100 text-green-800' : 'bg-purple-100 text-purple-800' }} rounded-full px-2 py-0.5 text-xs font-medium">
                                                    {{ ucfirst($enrollment->classroom->type) }}</span> -
                                                {{ ucfirst($enrollment->classroom->institute) }}
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="text-sm text-gray-900">{{ $enrollment->email }}</div>
                                            <div class="text-sm text-gray-500">{{ $enrollment->phone }}</div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            @if ($enrollment->status == 0)
                                                <span
                                                    class="inline-flex rounded-full bg-yellow-100 px-2 py-1 text-xs font-semibold text-yellow-800">
                                                    Pending
                                                </span>
                                            @elseif($enrollment->status == 1)
                                                <span
                                                    class="inline-flex rounded-full bg-green-100 px-2 py-1 text-xs font-semibold text-green-800">
                                                    Approved
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex rounded-full bg-red-100 px-2 py-1 text-xs font-semibold text-red-800">
                                                    Rejected
                                                </span>
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $enrollment->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-medium">
                                            @if ($enrollment->status == 0)
                                                <!-- Pending - Show Accept/Reject buttons -->
                                                <div class="flex space-x-2">
                                                    <form action="{{ route('enrollments.approve', $enrollment) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="rounded bg-green-600 px-3 py-1 text-xs font-medium text-white    hover:bg-green-700"
                                                            onclick="return confirm('Are you sure you want to approve this enrollment?')">
                                                            Approve
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('enrollments.reject', $enrollment) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="rounded bg-red-600 px-3 py-1 text-xs font-medium text-white    hover:bg-red-700"
                                                            onclick="return confirm('Are you sure you want to reject this enrollment?')">
                                                            Reject
                                                        </button>
                                                    </form>
                                                </div>
                                            @elseif($enrollment->status == 1)
                                                <!-- Approved - Show Reject button only -->
                                                <form action="{{ route('enrollments.reject', $enrollment) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="rounded bg-red-600 px-3 py-1 text-xs font-medium text-white    hover:bg-red-700"
                                                        onclick="return confirm('Are you sure you want to reject this enrollment?')">
                                                        Reject
                                                    </button>
                                                </form>
                                            @else
                                                <!-- Rejected - Show Approve button only -->
                                                <form action="{{ route('enrollments.approve', $enrollment) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="rounded bg-green-600 px-3 py-1 text-xs font-medium text-white    hover:bg-green-700"
                                                        onclick="return confirm('Are you sure you want to approve this enrollment?')">
                                                        Approve
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm text-gray-500">
                                            No enrollments found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>


</x-app-layout>
