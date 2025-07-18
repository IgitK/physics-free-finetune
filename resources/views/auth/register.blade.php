<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center bg-gray-100">
        <div class="w-full max-w-xl self-center">
            <!-- Login Card -->
            <div class="space-y-6 rounded-2xl bg-white p-8">
                <!-- Header -->
                <div class="text-center">
                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600">
                        <i class="fas fa-graduation-cap text-2xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Create Account</h2>
                    <p class="mt-2 text-gray-600">Join our learning platform today</p>
                </div>

                <!-- Signup Form -->
                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Full Name Field -->
                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                            Full Name
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="@error('name') border-red-500 @enderror block w-full rounded-lg border border-gray-300 py-3 pl-10 pr-3 transition-colors focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your full name" required>
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="@error('email') border-red-500 @enderror block w-full rounded-lg border border-gray-300 py-3 pl-10 pr-3 transition-colors focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your email" required>
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <!-- Role Selection -->
                <div>
                    <label for="role" class="mb-2 block text-sm font-medium text-gray-700">
                        I am a
                    </label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-user-tag text-gray-400"></i>
                        </div>
                        <select id="role" name="role"
                            class="@error('role') border-red-500 @enderror block w-full appearance-none rounded-lg border border-gray-300 bg-white py-3 pl-10 pr-8 transition-colors focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                            <option value="">Select your role</option>
                            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                            <option value="instructor" {{ old('role') == 'instructor' ? 'selected' : '' }}>Instructor
                            </option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrator</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </div>
                    </div>
                    @error('role')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div> --}}

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" name="password"
                                class="@error('password') border-red-500 @enderror block w-full rounded-lg border border-gray-300 py-3 pl-10 pr-12 transition-colors focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Create a password" required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3"
                                onclick="togglePassword('password')">
                                <i id="passwordToggle" class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                            </button>
                        </div>
                        <div class="mt-1 text-xs text-gray-500">
                            Password must be at least 8 characters long
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-700">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="@error('password_confirmation') border-red-500 @enderror block w-full rounded-lg border border-gray-300 py-3 pl-10 pr-12 transition-colors focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Confirm your password" required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3"
                                onclick="togglePassword('password_confirmation')">
                                <i id="passwordConfirmToggle" class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Terms and Privacy -->
                    <div class="flex items-start">
                        <input id="terms" name="terms" type="checkbox"
                            class="mt-1 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" required>
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the
                            <a href="" class="text-indigo-600 hover:text-indigo-500" target="_blank">Terms of
                                Service</a>
                            and
                            <a href="" class="text-indigo-600 hover:text-indigo-500" target="_blank">Privacy
                                Policy</a>
                        </label>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="flex items-center">
                        <input id="newsletter" name="newsletter" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                            {{ old('newsletter') ? 'checked' : '' }}>
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            Subscribe to our newsletter for course updates and tips
                        </label>
                    </div>

                    <!-- Signup Button -->
                    <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-medium text-white transition-colors hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create Account
                    </button>
                </form>


                <!-- Additional Links -->
                <div class="mt-6 space-y-2 text-center">
                    <p class="text-sm text-gray-600">
                        <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-500">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Back to Homepage
                        </a>
                    </p>
                    <p class="text-xs text-gray-500">
                        Need help? <a href="{{ route('contact') }}"
                            class="text-indigo-600 hover:text-indigo-500">Contact
                            Support</a>
                    </p>
                </div>
            </div>

            <script>
                function togglePassword(fieldId) {
                    const passwordInput = document.getElementById(fieldId);
                    const toggleIcon = document.getElementById(fieldId === 'password' ? 'passwordToggle' : 'passwordConfirmToggle');

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        toggleIcon.classList.remove('fa-eye');
                        toggleIcon.classList.add('fa-eye-slash');
                    } else {
                        passwordInput.type = 'password';
                        toggleIcon.classList.remove('fa-eye-slash');
                        toggleIcon.classList.add('fa-eye');
                    }
                }

                // Password strength indicator
                document.getElementById('password').addEventListener('input', function(e) {
                    const password = e.target.value;
                    const strengthIndicator = document.getElementById('passwordStrength');

                    // You can add password strength validation here
                    // This is a placeholder for the functionality
                });

                // Password confirmation validation
                document.getElementById('password_confirmation').addEventListener('input', function(e) {
                    const password = document.getElementById('password').value;
                    const confirmPassword = e.target.value;

                    if (confirmPassword && password !== confirmPassword) {
                        e.target.classList.add('border-red-500');
                        e.target.classList.remove('border-gray-300');
                    } else {
                        e.target.classList.remove('border-red-500');
                        e.target.classList.add('border-gray-300');
                    }
                });

                // Add loading state to form submission
                document.querySelector('form').addEventListener('submit', function(e) {
                    const submitButton = this.querySelector('button[type="submit"]');
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating Account...';
                    submitButton.disabled = true;
                });

                // Auto-focus first input with error or name field
                window.addEventListener('load', function() {
                    const errorInput = document.querySelector('.border-red-500');
                    if (errorInput) {
                        errorInput.focus();
                    } else {
                        document.getElementById('name').focus();
                    }
                });

                // Form validation enhancement
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.querySelector('form');
                    const requiredFields = form.querySelectorAll('input[required], select[required]');

                    requiredFields.forEach(field => {
                        field.addEventListener('blur', function() {
                            if (!this.value.trim()) {
                                this.classList.add('border-red-500');
                                this.classList.remove('border-gray-300');
                            } else {
                                this.classList.remove('border-red-500');
                                this.classList.add('border-gray-300');
                            }
                        });
                    });
                });
            </script>
</x-guest-layout>
