@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 fade-in">
                    About <span class="gradient-text">Business Control Systems</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-8 slide-up stagger-1">
                    Point of Sale (POS) Solutions Since 1976
                </h2>
                <p class="text-xl text-gray-600 mb-8 slide-up stagger-2">
                    At Business Control Systems Corp. (BCSC), we specialize in delivering reliable, scalable, and cost-effective
                    Point of Sale (POS) solutions for retail and distribution businesses. Founded in 1976, our mission has always
                    been to help businesses thrive through advanced automation and intelligent transaction processing.
                </p>
                <div class="inline-flex items-center space-x-2 bg-blue-100 rounded-full px-6 py-3 slide-up stagger-3">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-blue-800 font-medium">Over 47 years of POS innovation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Legacy Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 fade-in">
                            Our <span class="gradient-text">Legacy</span> in Point of Sale Innovation
                        </h2>
                        <p class="text-xl text-gray-600 mb-6 slide-up stagger-1">
                            BCSC began with a strong focus on computer hardware, POS terminals, and POS peripherals—establishing
                            ourselves early on as a reliable source for high-performance systems at affordable prices.
                        </p>
                        <p class="text-xl text-gray-600 mb-6 slide-up stagger-2">
                            As the industry evolved, so did we. We expanded into the development of <strong>POS software</strong>
                            and <strong>inventory management systems</strong>, creating fully integrated solutions that deliver
                            seamless transaction processing and real-time data insights.
                        </p>
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border-l-4 border-blue-500 slide-up stagger-3">
                            <p class="text-lg text-gray-700 font-medium">
                                "Starting with a strong focus on computer hardware, POS terminals, and POS peripherals,
                                we quickly established a reputation for offering the best price-to-performance options in the market."
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="w-full h-96 bg-gradient-to-br from-blue-500 to-purple-600 rounded-3xl flex items-center justify-center scale-in stagger-2">
                            <svg class="w-32 h-32 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl flex items-center justify-center scale-in stagger-3">
                            <span class="text-white text-2xl font-bold">47</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Serve Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                    Who <span class="gradient-text">We Serve</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                    Today, BCSC is a trusted provider of Point of Sale (POS) systems designed to meet the unique needs of
                    businesses of all sizes. Whether you're running a single retail store or managing a complex distribution network,
                    our technology helps you simplify sales, optimize inventory, and enhance customer service.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Small Businesses -->
                <div class="about-card rounded-2xl p-8 text-center scale-in stagger-1">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Small Businesses</h3>
                    <p class="text-gray-600">
                        Perfect for single retail stores and owner-operated businesses looking to streamline their operations
                        with affordable, easy-to-use POS solutions.
                    </p>
                </div>

                <!-- Mid-Sized Companies -->
                <div class="about-card rounded-2xl p-8 text-center scale-in stagger-2">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mid-Sized Companies</h3>
                    <p class="text-gray-600">
                        Ideal for growing businesses with multiple locations and department managers who need advanced
                        inventory management and reporting capabilities.
                    </p>
                </div>

                <!-- Large-Scale Businesses -->
                <div class="about-card rounded-2xl p-8 text-center scale-in stagger-3">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Large-Scale Businesses</h3>
                    <p class="text-gray-600">
                        Designed for enterprise-level operations with complex distribution networks, multiple managers,
                        and advanced automation requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-12 shadow-2xl">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 fade-in">
                            Get in <span class="gradient-text">Touch</span>
                        </h2>
                        <p class="text-xl text-gray-600 slide-up stagger-1">
                            Ready to transform your business with our POS solutions?
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 scale-in stagger-2">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Business Control Systems</h3>
                            <p class="contact-info-text">101 E 5th St<br>Loveland<br>Colorado- 80537</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 scale-in stagger-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Contact Numbers</h3>
                            <p class="text-gray-600">1 303 519 9549</p>
                        </div>
                    </div>

                    <div class="text-center mt-8">
                        <a href="/contact" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 scale-in stagger-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
