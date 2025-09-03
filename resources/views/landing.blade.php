@extends('layouts.master')

@section('title', 'Business Control Systems - Global POS Solutions Since 1983')

@section('styles')
@vite(['resources/css/landing.css'])
<style>
    * { font-family: 'Inter', sans-serif; }
    .hero-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    }
    .premium-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .floating-animation {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    .gradient-text {
        background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 0;
        background: linear-gradient(135deg, #667eea, #764ba2);
        transition: width 0.3s ease;
    }
    .nav-link:hover::after {
        width: 100%;
    }
    .feature-icon {
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-5xl mx-auto">
                <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-8">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium">Trusted by 10,000+ businesses worldwide</span>
                </div>
                
                <h1 class="text-6xl md:text-8xl font-black mb-8 leading-tight">
                    <span class="block">Global POS</span>
                    <span class="block">Solutions</span>
                </h1>
                
                <p class="text-xl md:text-2xl mb-12 text-gray-100 max-w-4xl mx-auto leading-relaxed">
                    Empowering businesses across 50+ countries with enterprise-grade point-of-sale systems, 
                    inventory management, and business intelligence since 1983.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="group bg-white text-gray-900 px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <span class="flex items-center space-x-2">
                            <span>Start Free Trial</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </button>
                    <button class="group border-2 border-white/30 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                        <span class="flex items-center space-x-2">
                            <span>Watch Demo</span>
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
                
                <!-- Global Stats -->
                <div class="grid grid-cols-3 gap-8 mt-16 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">40+</div>
                        <div class="text-gray-200 text-sm">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">50+</div>
                        <div class="text-gray-200 text-sm">Countries Served</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">10K+</div>
                        <div class="text-gray-200 text-sm">Happy Customers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Retail POS Solutions Section -->
    <section class="py-24 bg-black relative overflow-hidden" id="retail-solutions">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900"></div>
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="floating-circle" style="position: absolute; top: 20%; left: 10%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 70%, transparent 100%); border-radius: 50%;"></div>
                <div class="floating-circle" style="position: absolute; top: 60%; right: 15%; width: 150px; height: 150px; background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.03) 70%, transparent 100%); border-radius: 50%;"></div>
                <div class="floating-circle" style="position: absolute; bottom: 20%; left: 20%; width: 180px; height: 180px; background: radial-gradient(circle, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 70%, transparent 100%); border-radius: 50%;"></div>
            </div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white mb-20">
                <h2 class="text-5xl md:text-6xl font-black mb-6">
                    <span class="gradient-text">Retail POS</span>
                    <br>Solutions
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Complete easy-to-use point of sale systems for businesses of all sizes
                </p>
            </div>
            
            <!-- Product Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Small Business POS -->
                <div class="retail-card text-center p-8 rounded-3xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 transform-gpu">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Small Business POS</h3>
                    <div class="text-gray-300 mb-6">
                        <p class="mb-2"><strong>Work Stations:</strong> Limited Number</p>
                        <p class="mb-2"><strong>Yearly Revenue:</strong> Under $1M</p>
                        <p class="mb-2"><strong>Locations:</strong> Single Location</p>
                        <p><strong>Type:</strong> Owner Operated</p>
                    </div>
                    <div class="text-left text-gray-300 text-sm mb-6">
                        <p class="font-semibold text-white mb-2">Level I Product Features:</p>
                        <ul class="space-y-1">
                            <li>• Inventory Tracking & Analysis</li>
                            <li>• Sales Analysis</li>
                            <li>• Customer Tracking</li>
                            <li>• Marketing Tools</li>
                            <li>• Sales Tax Reporting</li>
                            <li>• Cash Drawer Reporting</li>
                            <li>• Point of Sale Functionality</li>
                            <li>• Purchasing Advice Reports</li>
                        </ul>
                    </div>
                    <a href="/retail-pos" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-block">
                        Learn More
                    </a>
                </div>
                
                <!-- Mid-Range Business POS -->
                <div class="retail-card text-center p-8 rounded-3xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 transform-gpu">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Mid-Range Business POS</h3>
                    <div class="text-gray-300 mb-6">
                        <p class="mb-2"><strong>Work Stations:</strong> Multiple</p>
                        <p class="mb-2"><strong>Yearly Revenue:</strong> $750K – $2M</p>
                        <p class="mb-2"><strong>Locations:</strong> Single or Multiple</p>
                        <p><strong>Type:</strong> Department Managers</p>
                    </div>
                    <div class="text-left text-gray-300 text-sm mb-6">
                        <p class="font-semibold text-white mb-2">Level II Product Features:</p>
                        <p class="mb-2">All Level I Features PLUS:</p>
                        <ul class="space-y-1">
                            <li>• Purchase Order Processing</li>
                            <li>• Department Specific Reports</li>
                            <li>• Inventory Layout Tracking</li>
                            <li>• Advanced POS Functionality</li>
                            <li>• Customer & Product Pictures</li>
                            <li>• Multi Location Integration</li>
                            <li>• Automatic Marketing Tools</li>
                            <li>• User Functionality Control</li>
                            <li>• Portable Device Integration</li>
                        </ul>
                    </div>
                    <a href="/retail-pos" class="bg-gradient-to-r from-green-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-block">
                        Learn More
                    </a>
                </div>
                
                <!-- Large Scale Business POS -->
                <div class="retail-card text-center p-8 rounded-3xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 transform-gpu">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Large Scale Business POS</h3>
                    <div class="text-gray-300 mb-6">
                        <p class="mb-2"><strong>Work Stations:</strong> 50+</p>
                        <p class="mb-2"><strong>Yearly Revenue:</strong> $2M+</p>
                        <p class="mb-2"><strong>Locations:</strong> Single or Multiple</p>
                        <p><strong>Type:</strong> Numerous Managers</p>
                    </div>
                    <div class="text-left text-gray-300 text-sm mb-6">
                        <p class="font-semibold text-white mb-2">Level III Product Features:</p>
                        <p class="mb-2">All Level I & II Features PLUS:</p>
                        <ul class="space-y-1">
                            <li>• SQL Database</li>
                            <li>• Multiple Operating Systems</li>
                            <li>• Automated Sales Order Fulfillment</li>
                            <li>• Purchasing Budget Tools</li>
                            <li>• Transaction Security Controls</li>
                            <li>• Wireless Device Integration</li>
                            <li>• Field Customization</li>
                            <li>• Batch Control Processing</li>
                            <li>• ODBC Access</li>
                            <li>• Data Mining & EDI</li>
                        </ul>
                    </div>
                    <a href="/retail-pos" class="bg-gradient-to-r from-purple-500 to-pink-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-block">
                        Learn More
                    </a>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center">
                <p class="text-gray-300 mb-6 max-w-3xl mx-auto">
                    Call Business Control Systems today at <strong class="text-white">(800) 233-5876</strong> to find out how properly configured point of sale systems and inventory control software can help your business attain peak efficiency.
                </p>
                <button class="mesmerizing-btn bg-blue-600 text-white px-12 py-4 rounded-2xl font-bold text-lg hover:bg-blue-700 hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    Get Your Free Consultation
                </button>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-gradient-to-br from-amber-50 via-orange-50 to-red-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Built on <span class="gradient-text">Core Values</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    For over 40 years, our success has been built on unwavering commitment to these fundamental principles.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Honesty -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">✓</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Honesty</h3>
                    <p class="text-lg font-semibold text-blue-600 mb-2">Transparent</p>
                    <p class="text-sm text-gray-600">Pricing & Communication</p>
                </div>

                <!-- Value -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">$</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Value</h3>
                    <p class="text-lg font-semibold text-emerald-600 mb-2">ROI Focused</p>
                    <p class="text-sm text-gray-600">Cost-Effective Solutions</p>
                </div>

                <!-- Pride -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-600 via-violet-700 to-fuchsia-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">♥</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pride</h3>
                    <p class="text-lg font-semibold text-purple-600 mb-2">Excellence</p>
                    <p class="text-sm text-gray-600">In Every Detail</p>
                </div>

                <!-- Fairness -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-600 via-red-700 to-pink-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">⚖</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fairness</h3>
                    <p class="text-lg font-semibold text-orange-600 mb-2">Equitable</p>
                    <p class="text-sm text-gray-600">Treatment for All</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase Section -->
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

    <!-- Global Presence Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    <span class="gradient-text">Global Reach,</span> Local Expertise
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From New York to Tokyo, London to Sydney, we're powering businesses worldwide with our 
                    innovative POS solutions and dedicated local support teams.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- North America -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🇺🇸</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">North America</h3>
                    <p class="text-lg font-semibold text-blue-600 mb-2">5,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Europe -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🇪🇺</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Europe</h3>
                    <p class="text-lg font-semibold text-emerald-600 mb-2">3,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Asia Pacific -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-600 via-violet-700 to-fuchsia-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🌏</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Asia Pacific</h3>
                    <p class="text-lg font-semibold text-purple-600 mb-2">2,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Global Support -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-600 via-red-700 to-pink-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🌍</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Global Support</h3>
                    <p class="text-lg font-semibold text-orange-600 mb-2">24/7</p>
                    <p class="text-sm text-gray-600">Round-the-Clock</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Enterprise-Grade <span class="gradient-text">Features</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Built for scale, designed for performance, engineered for reliability.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Advanced Analytics -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">📊</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Analytics</h3>
                    <p class="text-lg font-semibold text-blue-600 mb-2">AI-Powered</p>
                    <p class="text-sm text-gray-600">Real-time Business Intelligence</p>
                </div>
                
                <!-- Enterprise Security -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🔒</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Security</h3>
                    <p class="text-lg font-semibold text-emerald-600 mb-2">Bank-Level</p>
                    <p class="text-sm text-gray-600">PCI DSS Compliant</p>
                </div>
                
                <!-- Lightning Fast -->
                <div class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-600 via-violet-700 to-fuchsia-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">⚡</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lightning Fast</h3>
                    <p class="text-lg font-semibold text-purple-600 mb-2">99.99% Uptime</p>
                    <p class="text-sm text-gray-600">Sub-second Processing</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="absolute top-20 left-10 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-4xl mx-auto">
                <h2 class="text-5xl md:text-6xl font-black mb-8">
                    Ready to Scale
                    <br>Your Business?
                </h2>
                <p class="text-xl mb-12 text-gray-100 max-w-2xl mx-auto">
                    Join thousands of businesses worldwide who trust Business Control Systems 
                    to power their growth and success.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="bg-white text-gray-900 px-12 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 shadow-xl">
                        Start Free Trial
                    </button>
                    <button class="border-2 border-white/30 text-white px-12 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                        Schedule Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
@vite(['resources/js/landing.js'])
@endsection
