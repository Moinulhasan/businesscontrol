@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 fade-in">
                    <span class="gradient-text">Retail POS Solutions</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-8 slide-up stagger-1">
                    Complete Easy to Use Point of Sale Systems
                </h2>
                <p class="text-xl text-gray-600 mb-8 slide-up stagger-2">
                    From small retail stores to large-scale distribution networks, our POS solutions are designed
                    to meet the unique needs of businesses at every stage of growth. Simple, powerful, and reliable.
                </p>
                <div class="inline-flex items-center space-x-2 bg-blue-100 rounded-full px-6 py-3 slide-up stagger-3">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-blue-800 font-medium">Trusted by thousands of businesses since 1976</span>
                </div>
            </div>
        </div>
    </section>

    <!-- POS Solutions Overview -->
{{--    <section class="py-20 bg-white">--}}
{{--        <div class="container mx-auto px-6">--}}
{{--            <div class="text-center mb-16">--}}
{{--                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">--}}
{{--                    Choose Your <span class="gradient-text">POS Solution</span>--}}
{{--                </h2>--}}
{{--                <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">--}}
{{--                    Three comprehensive POS systems designed for businesses of all sizes, from single retail stores--}}
{{--                    to complex multi-location operations.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">--}}
{{--                <!-- Small Business POS -->--}}
{{--                <div class="pos-card rounded-3xl p-8 text-center scale-in stagger-1">--}}
{{--                    <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6">--}}
{{--                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Small Business POS</h3>--}}
{{--                    <p class="text-gray-600 mb-6">--}}
{{--                        Perfect for single retail stores and owner-operated businesses looking to streamline their operations--}}
{{--                        with affordable, easy-to-use POS solutions.--}}
{{--                    </p>--}}
{{--                    <div class="bg-blue-50 rounded-2xl p-4 mb-6">--}}
{{--                        <h4 class="font-semibold text-blue-900 mb-3">Key Features:</h4>--}}
{{--                        <ul class="text-sm text-blue-800 space-y-2 text-left">--}}
{{--                            <li>• Simple Menu Driven Interface</li>--}}
{{--                            <li>• Barcode Scanning & Sales</li>--}}
{{--                            <li>• Inventory Tracking</li>--}}
{{--                            <li>• Basic Reporting</li>--}}
{{--                            <li>• Customer Management</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <a href="#small-business" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">--}}
{{--                        Learn More--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Mid-Range Business POS -->--}}
{{--                <div class="pos-card rounded-3xl p-8 text-center scale-in stagger-2">--}}
{{--                    <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl flex items-center justify-center mx-auto mb-6">--}}
{{--                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mid-Range Business POS</h3>--}}
{{--                    <p class="text-gray-600 mb-6">--}}
{{--                        Ideal for growing businesses with multiple locations and department managers who need advanced--}}
{{--                        inventory management and reporting capabilities.--}}
{{--                    </p>--}}
{{--                    <div class="bg-green-50 rounded-2xl p-4 mb-6">--}}
{{--                        <h4 class="font-semibold text-green-900 mb-3">Key Features:</h4>--}}
{{--                        <ul class="text-sm text-green-800 space-y-2 text-left">--}}
{{--                            <li>• OneStep-JV™ Technology</li>--}}
{{--                            <li>• Java & Oracle Database</li>--}}
{{--                            <li>• Advanced Analytics</li>--}}
{{--                            <li>• Multi-location Support</li>--}}
{{--                            <li>• Web Catalog Integration</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <a href="#mid-range" class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">--}}
{{--                        Learn More--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Large-Scale Business POS -->--}}
{{--                <div class="pos-card rounded-3xl p-8 text-center scale-in stagger-3">--}}
{{--                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6">--}}
{{--                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Large-Scale Business POS</h3>--}}
{{--                    <p class="text-gray-600 mb-6">--}}
{{--                        Designed for enterprise-level operations with complex distribution networks, multiple managers,--}}
{{--                        and advanced automation requirements.--}}
{{--                    </p>--}}
{{--                    <div class="bg-purple-50 rounded-2xl p-4 mb-6">--}}
{{--                        <h4 class="font-semibold text-purple-900 mb-3">Key Features:</h4>--}}
{{--                        <ul class="text-sm text-purple-800 space-y-2 text-left">--}}
{{--                            <li>• Multi-Store Configuration</li>--}}
{{--                            <li>• Advanced Modules</li>--}}
{{--                            <li>• E-commerce Integration</li>--}}
{{--                            <li>• Multi-Currency Support</li>--}}
{{--                            <li>• Wireless Processing</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <a href="#large-scale" class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">--}}
{{--                        Learn More--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Small Business POS Details -->
    <section id="small-business" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                        <span class="gradient-text">Small Business POS</span> System
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                        Complete easy to use point of sale systems designed specifically for small retail operations.
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6 slide-up stagger-2">
                            Simple Menu Driven Interface - Easy to Use
                        </h3>
                        <div class="space-y-4 slide-up stagger-3">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Ring-up Sales by Scanning Barcodes</h4>
                                    <p class="text-gray-600 text-sm">Efficient barcode scanning for quick and accurate sales processing</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Automatically Track Overages and Shortages</h4>
                                    <p class="text-gray-600 text-sm">Built-in cash management with automatic discrepancy tracking</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Process & Ship Orders</h4>
                                    <p class="text-gray-600 text-sm">Complete order management from processing to shipping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl p-8 text-white scale-in stagger-4">
                        <h4 class="text-2xl font-bold mb-6">Core Capabilities</h4>
                        <ul class="space-y-3 text-blue-100">
                            <li>• Track Receivings & Identify Shrinkage</li>
                            <li>• Know Your Customer's Buying Patterns</li>
                            <li>• Know Your Profits on Each Item</li>
                            <li>• Know Your Profits for the Day, Month or Year</li>
                            <li>• Know Your Fast & Slow Movers</li>
                            <li>• Control Your Inventory & Purchasing</li>
                            <li>• Print Barcode Price Labels</li>
                            <li>• Accept Multiple Methods of Payment</li>
                            <li>• Access Your System from Home</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="https://onesetp.businesscontrol.com/" class="mesmerizing-btn bg-red-600 text-white px-12 py-4
                 rounded-2xl font-bold text-lg hover:bg-blue-700 hover:shadow-2xl
                 transform hover:scale-105 transition-all duration-300">
                    Explore Firearms Tracking
                </a>
            </div>
        </div>

    </section>

    <!-- Mid-Range Business POS Details -->
    <section id="mid-range" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                        <span class="gradient-text">Mid-Range Business POS</span> System
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                        This POS system brings the most advanced technology available in a full-featured suite of applications
                        for Retailers and Distributors.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-3xl p-8 text-white scale-in stagger-2">
                        <h4 class="text-2xl font-bold mb-6">OneStep-JV™ Technology</h4>
                        <p class="text-green-100 mb-6">
                            Written in Java with Oracle as the embedded database at its foundation, OneStep-JV™ point of sale systems
                            bring the most advanced and reliable technology and inventory management software available.
                        </p>
                        <ul class="space-y-3 text-green-100">
                            <li>• Cross-platform portability</li>
                            <li>• Single user to large-scale networks</li>
                            <li>• Windows, Novell, Unix and Linux support</li>
                            <li>• Auto-recovery database features</li>
                            <li>• Hardware-independent operation</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6 slide-up stagger-3">
                            Advanced Operational Functions
                        </h3>
                        <div class="space-y-4 slide-up stagger-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Infinite Barcode Support</h4>
                                    <p class="text-gray-600 text-sm">Support for unlimited barcodes per item with advanced scanning</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Profitability Forecasting</h4>
                                    <p class="text-gray-600 text-sm">Advanced analytics for business planning and growth</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Web Catalog Integration</h4>
                                    <p class="text-gray-600 text-sm">Build your web catalog directly from your inventory file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="https://onesetp.businesscontrol.com/" class="mesmerizing-btn bg-red-600 text-white px-12 py-4
                 rounded-2xl font-bold text-lg hover:bg-blue-700 hover:shadow-2xl
                 transform hover:scale-105 transition-all duration-300">
                    Explore Firearms Tracking
                </a>
            </div>
        </div>
    </section>

    <!-- Large-Scale Business POS Details -->
    <section id="large-scale" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                        <span class="gradient-text">Large-Scale Business POS</span> System
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                        This point of sale system contains an incredible suite of applications that provide basic and advanced
                        functions needed to run and control large-scale Retail and Distribution operations.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6 slide-up stagger-2">
                            Hardware-Independent Design
                        </h3>
                        <p class="text-lg text-gray-600 mb-6 slide-up stagger-3">
                            This inventory management software and point of sale system has been designed to be hardware-independent.
                            It takes an open architecture approach to ensure compatibility with a variety of computer platforms
                            and peripheral devices.
                        </p>
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white scale-in stagger-4">
                            <h4 class="text-xl font-bold mb-4">Supported Platforms</h4>
                            <ul class="space-y-2 text-purple-100">
                                <li>• Windows, Netware, Unix/Linux</li>
                                <li>• Citrix Support</li>
                                <li>• Single Store or Multi-Store</li>
                                <li>• Open Architecture Design</li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-white rounded-2xl p-6 shadow-lg scale-in stagger-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Base System Functions</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Point of Sale (Touch Screen or Form Entry)</li>
                                <li>• Inventory Control (with Grids / Apparel)</li>
                                <li>• Customer Management & Purchasing</li>
                                <li>• Label Processing & E-Commerce</li>
                                <li>• Sales History & Timecards</li>
                                <li>• Credit Cards Processing (SMP)</li>
                                <li>• Gift Registry & Frequent Shopper</li>
                                <li>• E-Mail (Internal and Web based)</li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg scale-in stagger-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Optional Advanced Modules</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Basic Accounting (GL, AP and Check Rec)</li>
                                <li>• Serial / Lot Number Tracking</li>
                                <li>• Data Interchange & SQL Connection</li>
                                <li>• Offline Ticket Entry</li>
                                <li>• Multi-Currency PO</li>
                                <li>• Wireless Order Processing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="https://onesetp.businesscontrol.com/" class="mesmerizing-btn bg-red-600 text-white px-12 py-4
                 rounded-2xl font-bold text-lg hover:bg-blue-700 hover:shadow-2xl
                 transform hover:scale-105 transition-all duration-300">
                    Explore Firearms Tracking
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
{{--    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">--}}
{{--        <div class="container mx-auto px-6 text-center">--}}
{{--            <h2 class="text-4xl md:text-5xl font-black text-white mb-8 fade-in">--}}
{{--                Ready to Transform Your <span class="text-yellow-300">Business</span>?--}}
{{--            </h2>--}}
{{--            <p class="text-xl text-gray-100 mb-12 max-w-3xl mx-auto slide-up stagger-1">--}}
{{--                Contact Business Control Systems today to find out how our industry-leading POS solutions can help--}}
{{--                your business attain peak efficiency and growth.--}}
{{--            </p>--}}

{{--            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">--}}
{{--                <div class="bg-white rounded-2xl p-6 text-center scale-in stagger-2">--}}
{{--                    <div class="text-2xl font-bold text-gray-900 mb-2">1 303 519 9549</div>--}}
{{--                    --}}{{--                    <div class="text-gray-600">Ext. 233</div>--}}
{{--                </div>--}}
{{--                <a href="/contact" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 scale-in stagger-3">--}}
{{--                    Get Free Consultation--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
