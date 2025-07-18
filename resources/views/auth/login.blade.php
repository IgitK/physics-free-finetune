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
                    <h2 class="text-3xl font-bold text-gray-900">Welcome Back</h2>
                    <p class="mt-2 text-gray-600">Sign in to your LMS account</p>
                </div>

                <!-- Login Form -->
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

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
                                placeholder="Enter your password" required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3"
                                onclick="togglePassword()">
                                <i id="passwordToggle" class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-medium text-white transition-colors hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Sign In
                    </button>

                    <!-- Registration Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Sign up here
                            </a>
                        </p>
                    </div>
            </div>

            <!-- Additional Links -->
            <div class="mt-6 space-y-2 text-center">
                <p class="text-sm text-gray-600">
                    <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-500">
                        <i class="fas fa-arrow-left mr-1"></i>
                        Back to Homepage
                    </a>
                </p>
                <p class="text-xs text-gray-500">
                    Need help? <a href="{{ route('contact') }}" class="text-indigo-600 hover:text-indigo-500">Contact
                        Support</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('passwordToggle');

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

        // Add loading state to form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Signing In...';
            submitButton.disabled = true;
        });

        // Auto-focus first input with error or email field
        window.addEventListener('load', function() {
            const errorInput = document.querySelector('.border-red-500');
            if (errorInput) {
                errorInput.focus();
            } else {
                document.getElementById('email').focus();
            }
        });
    </script>
</x-guest-layout>
