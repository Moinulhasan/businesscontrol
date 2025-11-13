<section class="py-24 bg-white" id="products">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                Complete <span class="gradient-text">POS Solutions</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From small retail shops to enterprise-level operations, we have the perfect POS system for your business needs.
            </p>
        </div>

        <!-- Product Image Slider -->
        <div class="relative max-w-6xl mx-auto">
            <!-- Slider Container -->
            <div class="overflow-hidden rounded-3xl shadow-2xl">
                <div id="product-slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1: Retail POS -->
                    <div class="w-full flex-shrink-0">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                 alt="Retail POS System"
                                 class="w-full h-96 md:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <h3 class="text-3xl md:text-4xl font-bold mb-4">Retail POS System</h3>
                                <p class="text-lg md:text-xl mb-6 max-w-2xl">
                                    Complete retail management solution with inventory tracking, customer management, and sales analytics.
                                </p>
                                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Restaurant POS -->
                    <div class="w-full flex-shrink-0">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80"
                                 alt="Restaurant POS System"
                                 class="w-full h-96 md:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <h3 class="text-3xl md:text-4xl font-bold mb-4">Restaurant POS System</h3>
                                <p class="text-lg md:text-xl mb-6 max-w-2xl">
                                    Specialized restaurant management with table management, kitchen orders, and menu customization.
                                </p>
                                <button class="bg-gradient-to-r from-green-600 to-blue-600 text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Mobile POS -->
                    <div class="w-full flex-shrink-0">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                 alt="Mobile POS System"
                                 class="w-full h-96 md:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <h3 class="text-3xl md:text-4xl font-bold mb-4">Mobile POS System</h3>
                                <p class="text-lg md:text-xl mb-6 max-w-2xl">
                                    Take your business anywhere with our mobile POS solution for tablets and smartphones.
                                </p>
                                <button class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="prev-slide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="next-slide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Dots Indicator -->
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
                <button class="w-3 h-3 bg-white/70 hover:bg-white rounded-full transition-all duration-300 slide-dot active" data-slide="0"></button>
                <button class="w-3 h-3 bg-white/70 hover:bg-white rounded-full transition-all duration-300 slide-dot" data-slide="1"></button>
                <button class="w-3 h-3 bg-white/70 hover:bg-white rounded-full transition-all duration-300 slide-dot" data-slide="2"></button>
            </div>
        </div>
    </div>
</section>
