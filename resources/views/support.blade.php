@extends('layouts.master')

@section('title', 'Support Services - Business Control Systems')

@section('styles')
@vite(['resources/css/support.css'])
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 fade-in">
                    <span class="gradient-text">Support Services</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 slide-up stagger-1">
                    BCSC spares no effort in ensuring our customers receive the highest level of service in the industry.
                    Throughout the process of designing and implementing custom configured point of sale systems and inventory management software,
                    we unfailingly maintain our principles of <strong>Value, Honesty, Pride, and Fairness</strong> in meeting your goals and expectations.
                </p>
                <div class="inline-flex items-center space-x-2 bg-blue-100 rounded-full px-6 py-3 slide-up stagger-2">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-blue-800 font-medium">Over 20 years of customer success</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <blockquote class="text-2xl md:text-3xl font-medium text-gray-700 italic mb-4 fade-in">
                    "Our Age of Anxiety is, in great part, the result of trying to do today's jobs with yesterday's tools"
                </blockquote>
                <cite class="text-gray-600 slide-up stagger-1">— Marshall McLuhan (Theorist of Mass Communication)</cite>
            </div>
        </div>
    </section>

    <!-- Technology Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                    Our Full Offering of <span class="gradient-text">Technology Services</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                    Comprehensive support covering every aspect of your POS system implementation and maintenance
                </p>
            </div>

            <!-- Services Slider Container -->
            <div class="relative">
                <div class="services-slider overflow-hidden">
                    <div class="services-track flex transition-transform duration-500 ease-in-out" id="servicesTrack">
                        <!-- Software Application Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-1 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Software Application Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Software Installation</li>
                                <li>• Software Configuration</li>
                                <li>• Software Upgrade</li>
                                <li>• Software Maintenance</li>
                            </ul>
                        </div>

                        <!-- Data Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-2 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Data Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Data Repair</li>
                                <li>• Data Replacement</li>
                                <li>• Data Mining</li>
                                <li>• Data Integration</li>
                                <li>• Data Backup & Recovery</li>
                            </ul>
                        </div>

                        <!-- Customization Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-3 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Customization Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Custom Application Programming</li>
                                <li>• Custom Reports</li>
                                <li>• Custom Forms & Labels</li>
                                <li>• Custom Macros</li>
                                <li>• Workflow Automation</li>
                            </ul>
                        </div>

                        <!-- Training Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-4 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 5.477 5.754 5 7.5 5s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Training Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Online Training</li>
                                <li>• On-site Training</li>
                                <li>• Classroom Training</li>
                                <li>• Certification Programs</li>
                                <li>• Ongoing Support</li>
                            </ul>
                        </div>

                        <!-- Consulting Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-5 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Consulting Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Operational Reviews</li>
                                <li>• Automation Analysis</li>
                                <li>• Procedure Documentation</li>
                                <li>• Performance Optimization</li>
                                <li>• Strategic Planning</li>
                            </ul>
                        </div>

                        <!-- Hardware Support -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-1 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2-6H3m18 6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Hardware Support</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• POS Terminal Repair</li>
                                <li>• Peripheral Installation</li>
                                <li>• Network Setup</li>
                                <li>• Preventive Maintenance</li>
                                <li>• Emergency Repairs</li>
                            </ul>
                        </div>

                        <!-- Cloud Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-2 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Cloud Migration</li>
                                <li>• SaaS Implementation</li>
                                <li>• Data Synchronization</li>
                                <li>• Remote Access Setup</li>
                                <li>• Security Configuration</li>
                            </ul>
                        </div>

                        <!-- Integration Services -->
                        <div class="support-card rounded-2xl p-6 text-center scale-in stagger-3 flex-shrink-0 w-80 mx-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Integration Services</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Third-party Integrations</li>
                                <li>• API Development</li>
                                <li>• Payment Gateway Setup</li>
                                <li>• Inventory System Sync</li>
                                <li>• E-commerce Integration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 hover:text-blue-600 p-3 rounded-full shadow-lg transition-all duration-300 z-10" id="prevBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 hover:text-blue-600 p-3 rounded-full shadow-lg transition-all duration-300 z-10" id="nextBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-8 fade-in">
                Ready to Get <span class="text-yellow-300">Premium Support</span>?
            </h2>
            <p class="text-xl text-gray-100 mb-12 max-w-3xl mx-auto slide-up stagger-1">
                Contact Business Control Systems today to find out how industry-leading service and properly configured
                point of sale systems and inventory control software can help your business attain peak efficiency.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <div class="bg-white rounded-2xl p-6 text-center scale-in stagger-2">
                    <div class="text-2xl font-bold text-gray-900 mb-2">1 303 519 9549</div>
{{--                    <div class="text-gray-600">Ext. 233</div>--}}
                </div>
                <a href="/contact" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 scale-in stagger-3">
                    Contact Us Online
                </a>
            </div>
        </div>
    </section>
@endsection
