    <div class="relative overflow-hidden rounded-2xl bg-white shadow-xl">
        <!-- Carousel Container -->
        <div id="carousel" class="carousel-container flex   ">
            <!-- Testimonial Items -->
            @foreach ([
        ['name' => 'John Smith', 'role' => 'CEO, TechCorp', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face', 'quote' => 'This product completely transformed our workflow. The team\'s productivity increased by 300% and we couldn\'t be happier with the results.'],
        ['name' => 'Sarah Johnson', 'role' => 'Marketing Director, Creative Co', 'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=80&h=80&fit=crop&crop=face', 'quote' => 'Outstanding customer service and an incredible product. I\'ve recommended it to all my colleagues and they love it too.'],
        ['name' => 'Mike Chen', 'role' => 'Founder, StartupXYZ', 'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face', 'quote' => 'The best investment we\'ve made for our business. Easy to use, powerful features, and excellent support team.'],
        ['name' => 'Emma Davis', 'role' => 'Operations Manager, Global Inc', 'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face', 'quote' => 'Seamless integration and fantastic results. Our clients are impressed and our efficiency has skyrocketed.'],
    ] as $testimonial)
                <div class="w-full flex-shrink-0 p-8 text-center md:p-12">
                    <div class="mb-4 flex justify-center">
                        <span class="star text-2xl">★★★★★</span>
                    </div>
                    <blockquote class="mb-8 text-xl leading-relaxed text-gray-800 md:text-2xl">
                        "{{ $testimonial['quote'] }}"
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                            class="mr-4 h-16 w-16 rounded-full object-cover" />
                        <div class="text-left">
                            <p class="font-semibold text-gray-900">{{ $testimonial['name'] }}</p>
                            <p class="text-gray-600">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation Arrows -->
        <button id="prevBtn" aria-label="Previous Slide"
            class="absolute left-4 top-1/2 -translate-y-1/2 transform rounded-full bg-white p-3 shadow-lg   hover:bg-gray-50">
            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="nextBtn" aria-label="Next Slide"
            class="absolute right-4 top-1/2 -translate-y-1/2 transform rounded-full bg-white p-3 shadow-lg   hover:bg-gray-50">
            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <!-- Dots Indicator -->
    <div class="mt-8 flex justify-center space-x-2">
        @foreach (range(0, 3) as $index)
            <button class="dot h-3 w-3 rounded-full bg-gray-300  "
                data-slide="{{ $index }}"></button>
        @endforeach
    </div>

    <script>
        const carousel = document.getElementById("carousel");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const dots = document.querySelectorAll(".dot");

        const totalSlides = dots.length;
        let currentSlide = 0;
        let autoPlayInterval;

        function updateCarousel() {
            const translateX = -currentSlide * 100;
            carousel.style.transform = `translateX(${translateX}%)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle("bg-blue-500", index === currentSlide);
                dot.classList.toggle("bg-gray-300", index !== currentSlide);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        nextBtn.addEventListener("click", () => {
            stopAutoPlay();
            nextSlide();
        });

        prevBtn.addEventListener("click", () => {
            stopAutoPlay();
            prevSlide();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                stopAutoPlay();
                goToSlide(index);
            });
        });

        carousel.addEventListener("touchstart", (e) => {
            stopAutoPlay();
            startX = e.touches[0].clientX;
        });

        carousel.addEventListener("touchend", (e) => {
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;

            if (Math.abs(diffX) > 50) {
                diffX > 0 ? nextSlide() : prevSlide();
            }
        });

        startAutoPlay();
    </script>
