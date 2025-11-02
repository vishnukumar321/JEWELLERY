<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurelius - Luxury Jewelry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif']
                    },
                    colors: {
                        'gold': '#D4AF37',
                        'gold-light': '#F4E4A6',
                        'gold-dark': '#B8941F'
                    }
                }
            }
        }
    </script>
    <style>
        .slider-container {
            scroll-behavior: smooth;
            scrollbar-width: none;
        }
        .slider-container::-webkit-scrollbar {
            display: none;
        }
        .slide {
            scroll-snap-align: start;
            flex-shrink: 0;
        }
        .review-slider-container {
            scroll-behavior: smooth;
            scrollbar-width: none;
        }
        .review-slider-container::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="font-sans text-gray-900 bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 md:h-20">
                <div class="flex items-center">
                    <h1 class="text-2xl md:text-3xl font-serif font-bold text-gray-900">Aurelius</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#collections" class="text-gray-700 hover:text-gold transition-colors font-medium">Collections</a>
                    <a href="#about" class="text-gray-700 hover:text-gold transition-colors font-medium">Craftsmanship</a>
                    <a href="#testimonials" class="text-gray-700 hover:text-gold transition-colors font-medium">Reviews</a>
                    <a href="#contact" class="text-gray-700 hover:text-gold transition-colors font-medium">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-gold transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button class="text-gray-700 hover:text-gold transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-gold text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                    </button>
                    <button class="md:hidden text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Image Slider Section -->
    <section class="relative h-[32vh] md:h-[700px] bg-gray-900 overflow-hidden">
        <div id="slider" class="slider-container flex h-full overflow-x-auto snap-x snap-mandatory">
            <!-- Slide 1 -->
            <div class="slide w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Luxury Diamond Ring" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-6xl lg:text-7xl font-serif font-bold mb-2 md:mb-4">Timeless <span class="text-gold">Elegance</span></h2>
                        <p class="text-sm md:text-xl mb-4 md:mb-8 max-w-2xl mx-auto">Discover our exquisite collection of handcrafted jewelry</p>
                        <button class="bg-gold hover:bg-gold-dark text-white px-6 py-3 md:px-8 md:py-4 font-semibold transition-colors text-sm md:text-base">Explore Collections</button>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Diamond Engagement Ring" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-6xl lg:text-7xl font-serif font-bold mb-2 md:mb-4">Diamond <span class="text-gold">Perfection</span></h2>
                        <p class="text-sm md:text-xl mb-4 md:mb-8 max-w-2xl mx-auto">Brilliant cut diamonds in platinum settings</p>
                        <button class="bg-gold hover:bg-gold-dark text-white px-6 py-3 md:px-8 md:py-4 font-semibold transition-colors text-sm md:text-base">Shop Rings</button>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Gold Necklace" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-6xl lg:text-7xl font-serif font-bold mb-2 md:mb-4">Golden <span class="text-gold">Luxury</span></h2>
                        <p class="text-sm md:text-xl mb-4 md:mb-8 max-w-2xl mx-auto">18k gold chains with precious stone pendants</p>
                        <button class="bg-gold hover:bg-gold-dark text-white px-6 py-3 md:px-8 md:py-4 font-semibold transition-colors text-sm md:text-base">View Necklaces</button>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="slide w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Jewelry Craftsmanship" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-6xl lg:text-7xl font-serif font-bold mb-2 md:mb-4">Master <span class="text-gold">Craftsmanship</span></h2>
                        <p class="text-sm md:text-xl mb-4 md:mb-8 max-w-2xl mx-auto">Three generations of jewelry excellence</p>
                        <button class="bg-gold hover:bg-gold-dark text-white px-6 py-3 md:px-8 md:py-4 font-semibold transition-colors text-sm md:text-base">Our Story</button>
                    </div>
                </div>
            </div>
            
            <!-- Slide 5 -->
            <div class="slide w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1506630448388-4e683c67ddb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Pearl Jewelry" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-6xl lg:text-7xl font-serif font-bold mb-2 md:mb-4">Pearl <span class="text-gold">Elegance</span></h2>
                        <p class="text-sm md:text-xl mb-4 md:mb-8 max-w-2xl mx-auto">Cultured pearls with diamond accents</p>
                        <button class="bg-gold hover:bg-gold-dark text-white px-6 py-3 md:px-8 md:py-4 font-semibold transition-colors text-sm md:text-base">Discover Pearls</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Buttons -->
        <button id="prevBtn" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-900 w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center shadow-lg transition-all z-10">
            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="nextBtn" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-900 w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center shadow-lg transition-all z-10">
            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        
        <!-- Slide Indicators -->
        <div class="absolute bottom-4 md:bottom-8 left-1/2 -translate-x-1/2 flex space-x-2 md:space-x-3 z-10">
            <button class="indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all" data-slide="0"></button>
            <button class="indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all" data-slide="1"></button>
            <button class="indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all" data-slide="2"></button>
            <button class="indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all" data-slide="3"></button>
            <button class="indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all" data-slide="4"></button>
        </div>
    </section>

    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const indicators = document.querySelectorAll('.indicator');
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        const totalSlides = slides.length;

        function updateIndicators() {
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.add('bg-opacity-100');
                    indicator.classList.remove('bg-opacity-50');
                } else {
                    indicator.classList.add('bg-opacity-50');
                    indicator.classList.remove('bg-opacity-100');
                }
            });
        }

        function scrollToSlide(index) {
            const slideWidth = slider.offsetWidth;
            slider.scrollTo({
                left: slideWidth * index,
                behavior: 'smooth'
            });
            currentSlide = index;
            updateIndicators();
        }

        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            scrollToSlide(currentSlide);
        });

        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            scrollToSlide(currentSlide);
        });

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                scrollToSlide(index);
            });
        });

        let autoPlayInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            scrollToSlide(currentSlide);
        }, 5000);

        slider.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        slider.addEventListener('mouseleave', () => {
            autoPlayInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                scrollToSlide(currentSlide);
            }, 5000);
        });

        slider.addEventListener('scroll', () => {
            const slideWidth = slider.offsetWidth;
            const scrollPosition = slider.scrollLeft;
            const newSlide = Math.round(scrollPosition / slideWidth);
            if (newSlide !== currentSlide) {
                currentSlide = newSlide;
                updateIndicators();
            }
        });

        updateIndicators();
    </script>

    <!-- Featured Collections -->
    <section id="collections" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Featured Collections</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Each collection represents the pinnacle of craftsmanship and design excellence</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden bg-gray-50 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Diamond Rings" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-serif font-semibold text-gray-900 mb-2">Diamond Rings</h4>
                    <p class="text-gray-600 mb-4">Brilliant cut diamonds in platinum settings</p>
                    <span class="text-gold font-semibold">From $2,500</span>
                </div>
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden bg-gray-50 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gold Necklaces" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-serif font-semibold text-gray-900 mb-2">Gold Necklaces</h4>
                    <p class="text-gray-600 mb-4">18k gold chains with precious stone pendants</p>
                    <span class="text-gold font-semibold">From $1,800</span>
                </div>
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden bg-gray-50 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1506630448388-4e683c67ddb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pearl Earrings" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-serif font-semibold text-gray-900 mb-2">Pearl Earrings</h4>
                    <p class="text-gray-600 mb-4">Cultured pearls with diamond accents</p>
                    <span class="text-gold font-semibold">From $950</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                <div class="space-y-6">
                    <div class="relative bg-white p-8 aspect-square">
                        <img src="https://images.unsplash.com/photo-1603561591411-07134e71a2a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Featured Ring" class="w-full h-full object-cover">
                        <button class="absolute top-4 right-4 bg-white shadow-lg p-2 hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex space-x-4">
                        <button class="w-20 h-20 bg-white p-2 border-2 border-gold">
                            <img src="https://images.unsplash.com/photo-1603561591411-07134e71a2a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="View 1" class="w-full h-full object-cover">
                        </button>
                        <button class="w-20 h-20 bg-white p-2 border border-gray-200 hover:border-gold transition-colors">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="View 2" class="w-full h-full object-cover">
                        </button>
                        <button class="w-20 h-20 bg-white p-2 border border-gray-200 hover:border-gold transition-colors flex items-center justify-center">
                            <span class="text-xs font-semibold text-gray-600">360°</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Eternal Solitaire Ring</h3>
                        <p class="text-2xl font-semibold text-gold mb-6">$3,250</p>
                        <p class="text-gray-600 leading-relaxed mb-8">
                            A timeless solitaire featuring a brilliant 1.5-carat diamond set in platinum. This classic design showcases the diamond's natural beauty with a six-prong setting that maximizes light reflection.
                        </p>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Ring Size</label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option>Select Size</option>
                                <option>5</option>
                                <option>5.5</option>
                                <option>6</option>
                                <option>6.5</option>
                                <option>7</option>
                                <option>7.5</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="flex-1 bg-gold hover:bg-gold-dark text-white px-8 py-4 font-semibold transition-colors">
                                Add to Cart
                            </button>
                            <button class="border-2 border-gray-300 hover:border-gold text-gray-900 px-8 py-4 font-semibold transition-colors">
                                Save to Wishlist
                            </button>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-8">
                        <h4 class="font-semibold text-gray-900 mb-4">Product Details</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>• 1.5ct brilliant cut diamond</li>
                            <li>• Platinum band</li>
                            <li>• Six-prong setting</li>
                            <li>• Certified by GIA</li>
                            <li>• Lifetime warranty included</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Craftsmanship -->
    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Master Craftsmanship</h3>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        For over three generations, our master jewelers have perfected the art of creating extraordinary pieces. Each item is meticulously handcrafted using traditional techniques passed down through decades of expertise.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-light rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Premium Materials</h4>
                                <p class="text-gray-600">Only the finest diamonds, precious metals, and gemstones make it into our collections.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-light rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Quality Assurance</h4>
                                <p class="text-gray-600">Every piece undergoes rigorous quality checks and comes with lifetime warranty.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-light rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Personalized Service</h4>
                                <p class="text-gray-600">Custom designs and personal consultations to create your perfect piece.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Jewelry craftsmanship" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-30"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section id="testimonials" class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">What Our Clients Say</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover why discerning customers choose Aurelius for their most precious moments</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "The engagement ring I purchased exceeded all expectations. The craftsmanship is impeccable and the customer service was outstanding throughout the entire process."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">New York, NY</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "I've been a customer for years and the quality never disappoints. The custom necklace they created for my anniversary was absolutely perfect."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Michael Chen" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Michael Chen</h4>
                            <p class="text-sm text-gray-500">Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "Exceptional quality and service. The team helped me find the perfect wedding bands and the experience was seamless from start to finish."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Emma Rodriguez" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Emma Rodriguez</h4>
                            <p class="text-sm text-gray-500">Chicago, IL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secure Checkout Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Secure Checkout</h3>
                <p class="text-lg text-gray-600">Complete your purchase with confidence using our secure payment system</p>
            </div>
            <div class="bg-gray-50 p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-6">Order Summary</h4>
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center py-4 border-b border-gray-200">
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1603561591411-07134e71a2a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Ring" class="w-16 h-16 object-cover">
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Eternal Solitaire Ring</h5>
                                        <p class="text-sm text-gray-600">Size 6.5</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-gray-900">$3,250</span>
                            </div>
                            <div class="flex justify-between items-center py-4 border-b border-gray-200">
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Necklace" class="w-16 h-16 object-cover">
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Gold Chain Necklace</h5>
                                        <p class="text-sm text-gray-600">18k Gold</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-gray-900">$1,800</span>
                            </div>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-gray-900">$5,050</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="text-gray-900">Free</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="text-gray-900">$404</span>
                            </div>
                            <div class="flex justify-between text-lg font-semibold pt-4 border-t border-gray-200">
                                <span>Total</span>
                                <span class="text-gold">$5,454</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-6">Payment Information</h4>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">Card Number</label>
                                <input type="text" placeholder="1234 5678 9012 3456" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-900 mb-2">Expiry Date</label>
                                    <input type="text" placeholder="MM/YY" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-900 mb-2">CVV</label>
                                    <input type="text" placeholder="123" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">Cardholder Name</label>
                                <input type="text" placeholder="John Doe" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" id="save-card" class="w-4 h-4 text-gold border-gray-300 focus:ring-gold">
                                <label for="save-card" class="text-sm text-gray-600">Save card for future purchases</label>
                            </div>
                            <button type="submit" class="w-full bg-gold hover:bg-gold-dark text-white px-8 py-4 font-semibold transition-colors">
                                Complete Purchase
                            </button>
                        </form>
                        <div class="flex items-center justify-center space-x-4 mt-6 pt-6 border-t border-gray-200">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&q=80" alt="Security" class="w-8 h-8">
                            <span class="text-sm text-gray-600">256-bit SSL encryption</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Get in Touch</h3>
                <p class="text-lg text-gray-600">Have questions about our jewelry or need personalized assistance? We're here to help.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">First Name</label>
                                <input type="text" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">Last Name</label>
                                <input type="text" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                            <input type="email" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Phone</label>
                            <input type="tel" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Subject</label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option>General Inquiry</option>
                                <option>Custom Design</option>
                                <option>Product Question</option>
                                <option>Repair Service</option>
                                <option>Appointment Request</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Message</label>
                            <textarea rows="5" class="w-full border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-gold focus:border-transparent" placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gold hover:bg-gold-dark text-white px-8 py-4 font-semibold transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="space-y-8">
                    <div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Visit Our Showroom</h4>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-gold mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Address</p>
                                    <p class="text-gray-600">123 Fifth Avenue<br>New York, NY 10001</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-gold mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Phone</p>
                                    <p class="text-gray-600">(212) 555-0123</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-gold mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Email</p>
                                    <p class="text-gray-600">info@aureliusjewelry.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Store Hours</h4>
                        <div class="space-y-2 text-gray-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>10:00 AM - 7:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>10:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>12:00 PM - 5:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-gold text-white flex items-center justify-center hover:bg-gold-dark transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gold text-white flex items-center justify-center hover:bg-gold-dark transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gold text-white flex items-center justify-center hover:bg-gold-dark transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Slider Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Customer Reviews</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">See what our valued customers have to say about their experience</p>
            </div>
            <div class="relative">
                <div id="reviewSlider" class="review-slider-container overflow-x-auto snap-x snap-mandatory flex gap-6">
                    <!-- Review 1 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-gray-50 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-gold">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">"Absolutely stunning craftsmanship! The attention to detail on my custom engagement ring was beyond my expectations. Worth every penny."</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="James Wilson" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-900">James Wilson</h4>
                                <p class="text-sm text-gray-500">Boston, MA</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-gray-50 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-gold">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">"The pearl necklace I ordered is exquisite. The quality is unmatched and the presentation was elegant. Highly recommend!"</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Lisa Anderson" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-900">Lisa Anderson</h4>
                                <p class="text-sm text-gray-500">Miami, FL</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-gray-50 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-gold">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">"Outstanding service from start to finish. The team helped me design the perfect anniversary gift. My wife absolutely loves it!"</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="David Martinez" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-900">David Martinez</h4>
                                <p class="text-sm text-gray-500">Seattle, WA</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-gray-50 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-gold">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.