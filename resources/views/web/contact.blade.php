<x-web-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
            <!-- Contact Cards Section -->
            <section>
                <div class="mx-auto max-w-4xl px-2 sm:px-4">
                    <div class="grid gap-4">
                        <!-- Email Card -->
                        <div
                            class="transform rounded-xl border border-gray-100 bg-white p-6 shadow-lg   hover:-translate-y-1 hover:shadow-2xl md:p-8">
                            <div class="mb-6">

                                <i class="fa-solid fa-envelope rounded-lg bg-blue-100 p-4 text-lg text-blue-600"></i>

                                <h3 class="mb-2 pt-2 text-xl font-semibold text-gray-900">Email</h3>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    Reach out to us via email and we’ll get back to you as soon as possible.
                                </p>
                            </div>
                            <a href=""
                                class="text-brand-blue inline-flex items-center text-lg font-medium   hover:text-blue-800">
                                info@adventus.com

                            </a>
                        </div>
                        <!-- Phone Card -->
                        <div
                            class="transform rounded-xl border border-gray-100 bg-white p-6 shadow-lg   hover:-translate-y-1 hover:shadow-2xl md:p-8">
                            <div class="mb-6">

                                <i class="fa-solid fa-phone rounded-lg bg-green-100 p-4 text-lg text-green-600"></i>

                                <h3 class="mb-2 pt-2 text-xl font-semibold text-gray-900">Phone</h3>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    Call us during business hours for immediate assistance.
                                </p>
                            </div>
                            <a href=""
                                class="text-brand-blue inline-flex items-center text-lg font-medium   hover:text-blue-800">
                                +94 (77) 14 15 401

                            </a>
                        </div>
                        <!-- Address Card -->
                        <div
                            class="transform rounded-xl border border-gray-100 bg-white p-6 shadow-lg   hover:-translate-y-1 hover:shadow-2xl md:p-8">
                            <div class="mb-6">

                                <i class="fa-solid fa-envelope rounded-lg bg-blue-100 p-4 text-lg text-blue-600"></i>

                                <h3 class="mb-2 text-xl font-semibold text-gray-900">Email</h3>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    Visit our institute at the address below.
                                </p>
                            </div>
                            <a href=""
                                class="text-brand-blue inline-flex items-center text-lg font-medium   hover:text-blue-800">
                                No.124, Kurunegala rd, Wawlwaththa
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <div class="mx-auto w-full max-w-2xl">
                <div class="overflow-hidden rounded-xl border border-gray-100 bg-white shadow-lg">
                    <div class="px-6 py-8 sm:px-8">
                        <h2 class="mb-8 text-center text-3xl font-bold text-gray-900">Contact Us</h2>

                        <form action="{{ route('contact-email.post') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Name Field -->
                            <div>
                                <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="@error('name') border-red-500 @enderror w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your full name" required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="@error('email') border-red-500 @enderror w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your email address" required>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone Field -->
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-medium text-gray-700">
                                    Phone Number
                                </label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="@error('phone') border-red-500 @enderror w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your phone number">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Subject Field -->
                            <div>
                                <label for="subject" class="mb-2 block text-sm font-medium text-gray-700">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <select id="subject" name="subject"
                                    class="@error('subject') border-red-500 @enderror w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                    required>
                                    <option value="">Select a subject</option>
                                    <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>General
                                        Inquiry
                                    </option>
                                    <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>
                                        Technical
                                        Support</option>
                                    <option value="business" {{ old('subject') == 'business' ? 'selected' : '' }}>
                                        Business
                                        Partnership</option>
                                    <option value="feedback" {{ old('subject') == 'feedback' ? 'selected' : '' }}>
                                        Feedback
                                    </option>
                                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Message Field -->
                            <div>
                                <label for="message" class="mb-2 block text-sm font-medium text-gray-700">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea id="message" name="message" rows="5"
                                    class="resize-vertical @error('message') border-red-500 @enderror w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm   focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter your message here..." required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Privacy Policy Checkbox -->
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="privacy" name="privacy" type="checkbox" value="1"
                                        class="@error('privacy') border-red-500 @enderror h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        {{ old('privacy') ? 'checked' : '' }} required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="privacy" class="text-gray-700">
                                        I agree to the <a href="#"
                                            class="text-blue-600 underline hover:text-blue-500">Privacy Policy</a> and
                                        <a href="#" class="text-blue-600 underline hover:text-blue-500">Terms of
                                            Service</a> <span class="text-red-500">*</span>
                                    </label>
                                </div>
                            </div>
                            @error('privacy')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full rounded-lg bg-gradient-to-r from-blue-600 to-blue-500 px-6 py-3 font-semibold text-white shadow-md   hover:from-blue-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Send Message
                                </button>
                            </div>
                        </form>

                        <!-- Success Message -->
                        @if (session('success'))
                            <div class="mt-6 rounded-md border border-green-200 bg-green-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
