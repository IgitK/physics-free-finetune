<!-- Header -->
<header class="sticky top-0 z-50 border-b border-gray-100 bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between lg:h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="text-primary flex items-center text-xl font-bold tracking-tighter lg:text-2xl">
                    PhysicsFree.lk
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden items-center space-x-8 font-semibold lg:flex">
                <a href="{{ route('home') }}"
                    class="font-medium text-gray-600   hover:text-gray-900">Home</a>
                <a href="{{ route('about') }}"
                    class="font-medium text-gray-600   hover:text-gray-900">About</a>
                <a href="{{ route('schedule') }}"
                    class="font-medium text-gray-600   hover:text-gray-900">Classes</a>
                <a href=""
                    class="font-medium text-gray-600   hover:text-gray-900">Reviews</a>
                <a href="{{ route('contact') }}"
                    class="font-medium text-gray-600   hover:text-gray-900">Contact</a>
                <a href="{{ route('login') }}"
                    class="rounded-3xl bg-blue-500 px-4 py-2 text-sm font-medium text-white hover:scale-105 hover:bg-blue-400">Sign
                    In</a>
            </nav>


            <!-- Mobile Menu Button -->
            <button class="hover:text-primary p-2 text-gray-600 lg:hidden" id="mobile-menu-btn">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden lg:hidden" id="mobile-menu">
            <div class="space-y-4 border-t border-gray-100 py-4">
                <a href="{{ route('home') }}" class="hover:text-primary block font-medium text-gray-600">Home</a>
                <a href="#about-section" class="hover:text-primary block font-medium text-gray-600">About</a>
                <a href="{{ route('schedule') }}" class="hover:text-primary block font-medium text-gray-600">Classes</a>
                <a href="#testimonials-section" class="hover:text-primary block font-medium text-gray-600">Reviews</a>
                <a href="{{ route('contact') }}" class="hover:text-primary block font-medium text-gray-600">Contact</a>
                <a href="{{ route('login') }}"
                    class="block rounded-3xl bg-blue-500 px-4 py-2 text-center text-sm font-medium text-white hover:scale-105 hover:bg-blue-400">Sign
                    In</a>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
                // Close mobile menu if open
                mobileMenu.classList.add("hidden");
            }
        });
    });

    // Enhanced subject card interactions
    document.querySelectorAll(".subject-card").forEach((card) => {
        card.addEventListener("mouseenter", function() {
            this.style.transform = "translateY(-4px)";
        });

        card.addEventListener("mouseleave", function() {
            this.style.transform = "translateY(0)";
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate-slide-up");
            }
        });
    }, observerOptions);

    // Observe sections for animations
    document.querySelectorAll("section").forEach((section) => {
        observer.observe(section);
    });

    // Header background on scroll
    window.addEventListener("scroll", () => {
        const header = document.querySelector("header");
        if (window.scrollY > 0) {
            header.classList.add("shadow-md");
        } else {
            header.classList.remove("shadow-md");
        }
    });
</script>
