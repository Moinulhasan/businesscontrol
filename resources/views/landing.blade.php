@extends('layouts.master')

@section('title', 'Business Control Systems - Global POS Solutions Since 1983')

@section('styles')
    @vite(['resources/css/landing.css'])
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

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
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
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
                <div
                    class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-8">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium">Trusted by 10,000+ businesses worldwide</span>
                </div>

                <h1 class="text-4xl md:text-5xl font-black mb-8 leading-tight">
                    <span class="block">OneStep POS</span>
                    <span class="block">Solutions</span>
                </h1>

                <p class="text-xl md:text-xl mb-12 text-gray-100 max-w-4xl mx-auto leading-relaxed">
                    Empowering businesses across 50+ countries with enterprise-grade point-of-sale systems, inventory management, and business intelligence since 1983 — trusted by Firearm Retail Stores, Tobacco Distributors, Natural Food Retailers, and more.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{route('contact')}}"
                        class="group bg-white text-gray-900 px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <span class="flex items-center space-x-2">
                            <span>Start Free Trial</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <button
                        class="group border-2 border-white/30 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                        <span class="flex items-center space-x-2">
                            <span>Watch Demo</span>
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
    @include('landing.reatilspos')

    <!-- Core Values Section -->
    @include('landing.corevalue')

    <!-- Product Showcase Section -->
    @include('landing.productshowcase')

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
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🇺🇸</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">North America</h3>
                    <p class="text-lg font-semibold text-blue-600 mb-2">5,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Europe -->
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🇪🇺</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Europe</h3>
                    <p class="text-lg font-semibold text-emerald-600 mb-2">3,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Asia Pacific -->
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-purple-600 via-violet-700 to-fuchsia-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🌏</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Asia Pacific</h3>
                    <p class="text-lg font-semibold text-purple-600 mb-2">2,000+</p>
                    <p class="text-sm text-gray-600">Businesses Served</p>
                </div>

                <!-- Global Support -->
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-orange-600 via-red-700 to-pink-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
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
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">📊</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Analytics</h3>
                    <p class="text-lg font-semibold text-blue-600 mb-2">AI-Powered</p>
                    <p class="text-sm text-gray-600">Real-time Business Intelligence</p>
                </div>

                <!-- Enterprise Security -->
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🔒</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Security</h3>
                    <p class="text-lg font-semibold text-emerald-600 mb-2">Bank-Level</p>
                    <p class="text-sm text-gray-600">PCI DSS Compliant</p>
                </div>

                <!-- Lightning Fast -->
                <div
                    class="text-center group p-8 rounded-2xl bg-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-purple-600 via-violet-700 to-fuchsia-800 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-2 -right-2 w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center">
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
                    <a href="{{route('contact')}}"
                        class="bg-white text-gray-900 px-12 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 shadow-xl">
                        Start Free Trial
                    </a>
                    <a href="{{route('contact')}}"
                        class="border-2 border-white/30 text-white px-12 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                        Schedule Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    @vite(['resources/js/landing.js'])
@endsection
