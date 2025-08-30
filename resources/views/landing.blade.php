<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Control Systems - Global POS Solutions Since 1983</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
</head>
<body class="bg-gray-50">
    <!-- Premium Header -->
    <header class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-200/50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">BCS</span>
                    </div>
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Business Control Systems
                    </h1>
                </div>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <!-- <a href="/products" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Solutions</a> -->
                    <!-- <a href="/industries" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Industries</a> -->
                    <a href="/retail-pos" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Retail POS</a>
                    <a href="/about" class="nav-link text-gray-700 hover:text-blue-600 font-medium">About</a>
                    <a href="/support" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Support</a>
                    <a href="/contact" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Get Demo
                    </button>
                </div>
                
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4 border-t border-gray-200">
                <div class="flex flex-col space-y-4 pt-4">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium py-2">Home</a>
                    <!-- <a href="/products" class="text-gray-700 hover:text-blue-600 font-medium py-2">Solutions</a> -->
                    <!-- <a href="/products" class="text-gray-700 hover:text-blue-600 font-medium py-2">Industries</a> -->
                    <a href="/retail-pos" class="text-gray-700 hover:text-blue-600 font-medium py-2">Retail POS</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium py-2">About</a>
                    <a href="/support" class="text-gray-700 hover:text-blue-600 font-medium py-2">Support</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium py-2">Contact</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-300 mt-2">
                        Get Demo
                    </button>
                </div>
            </div>
        </nav>
    </header>

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
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                    Complete easy-to-use point of sale systems for businesses of all sizes
                </p>
                <a href="/retail-pos" class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm border border-white/30 text-white px-8 py-3 rounded-xl font-semibold hover:bg-white/30 transition-all duration-300">
                    <span>View All Retail POS Solutions</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
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
                    <a href="/retail-pos#small-business" class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
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
                    <a href="/retail-pos#mid-range" class="inline-block bg-gradient-to-r from-green-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
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
                    <a href="/retail-pos#large-scale" class="inline-block bg-gradient-to-r from-purple-500 to-pink-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
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
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white core-values">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    Built on <span class="gradient-text">Core Values</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    For over 40 years, our success has been built on unwavering commitment to these fundamental principles.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Honesty</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Transparent pricing, honest communication, and trustworthy partnerships with every client. We believe in complete transparency in all our business dealings.</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Value</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Delivering exceptional ROI through cost-effective solutions that drive business growth. Every investment in our systems pays for itself through increased efficiency.</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Pride</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Taking pride in every solution we deliver, ensuring excellence in every detail. We're committed to quality that exceeds expectations and builds lasting relationships.</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-24 h-24 bg-gradient-to-br from-orange-500 to-orange-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Fairness</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Fair treatment for all customers, equitable pricing, and balanced business relationships. We believe in creating win-win partnerships that benefit everyone involved.</p>
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
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    <span class="gradient-text">Global Reach,</span>
                    <br>Local Expertise
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From New York to Tokyo, London to Sydney, we're powering businesses worldwide with our 
                    innovative POS solutions and dedicated local support teams.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-3xl">🇺🇸</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">North America</h3>
                    <p class="text-gray-600 text-center mb-4">5,000+ Businesses</p>
                    <div class="text-center">
                        <div class="inline-flex items-center space-x-2 bg-blue-50 rounded-full px-4 py-2">
                            <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                            <span class="text-blue-800 text-sm font-medium">24/7 Support</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-3xl">🇪🇺</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Europe</h3>
                    <p class="text-gray-600 text-center mb-4">3,000+ Businesses</p>
                    <div class="text-center">
                        <div class="inline-flex items-center space-x-2 bg-green-50 rounded-full px-4 py-2">
                            <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                            <span class="text-green-800 text-sm font-medium">Local Teams</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-3xl">🌏</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Asia Pacific</h3>
                    <p class="text-gray-600 text-center mb-4">2,000+ Businesses</p>
                    <div class="text-center">
                        <div class="inline-flex items-center space-x-2 bg-purple-50 rounded-full px-4 py-2">
                            <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                            <span class="text-purple-800 text-sm font-medium">Multi-Language</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🌍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Global</h3>
                    <p class="text-gray-600 text-center mb-4">24/7 Support</p>
                    <div class="text-center">
                        <div class="inline-flex items-center space-x-2 bg-orange-50 rounded-full px-4 py-2">
                            <span class="w-2 h-2 bg-orange-600 rounded-full"></span>
                            <span class="text-orange-800 text-sm font-medium">Worldwide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    Enterprise-Grade
                    <br><span class="gradient-text">Features</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Built for scale, designed for performance, engineered for reliability.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="premium-card rounded-3xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Analytics</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Real-time business intelligence with AI-powered insights, predictive analytics, and customizable dashboards.
                    </p>
                    <div class="flex items-center text-blue-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="premium-card rounded-3xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Security</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Bank-level encryption, PCI DSS compliance, multi-factor authentication, and SOC 2 Type II certification.
                    </p>
                    <div class="flex items-center text-green-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="premium-card rounded-3xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Lightning Fast</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Sub-second transaction processing, 99.99% uptime guarantee, and global CDN for optimal performance.
                    </p>
                    <div class="flex items-center text-purple-600 font-medium">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
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

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-lg">BCS</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Business Control Systems</h3>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Empowering businesses worldwide with enterprise-grade POS solutions since 1983. 
                        Trusted by 10,000+ businesses across 50+ countries.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.047-1.852-3.047-1.853 0-2.136 1.445-2.136 2.939v5.677H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Solutions</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">POS Systems</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Inventory Management</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Analytics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Mobile POS</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Company</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-16 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Business Control Systems. All rights reserved. | Global POS Solutions</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple, reliable animations that work 100%
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing simple animations...');
            
            // Simple fade-in animation function
            function simpleFadeIn(selector, delay = 0) {
                const elements = document.querySelectorAll(selector);
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateY(20px)';
                        el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                        
                        setTimeout(() => {
                            el.style.opacity = '1';
                            el.style.transform = 'translateY(0)';
                        }, 100);
                    }, delay + (index * 200));
                });
            }
            
            // Simple slide-in animation function
            function simpleSlideIn(selector, delay = 0) {
                const elements = document.querySelectorAll(selector);
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateX(-30px)';
                        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            el.style.opacity = '1';
                            el.style.transform = 'translateX(0)';
                        }, 100);
                    }, delay + (index * 150));
                });
            }
            
            // Simple scale animation function
            function simpleScaleIn(selector, delay = 0) {
                const elements = document.querySelectorAll(selector);
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.opacity = '0';
                        el.style.transform = 'scale(0.8)';
                        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            el.style.opacity = '1';
                            el.style.transform = 'scale(1)';
                        }, 100);
                    }, delay + (index * 200));
                });
            }
            
            // Initialize all simple animations
            function initializeSimpleAnimations() {
                // Hero section - simple fade in
                simpleFadeIn('.hero-gradient h1', 200);
                simpleFadeIn('.hero-gradient p', 600);
                simpleFadeIn('.hero-gradient button', 1000);
                simpleFadeIn('.hero-gradient .grid.grid-cols-3 > div', 1200);
                
                // Core values - simple slide in
                simpleSlideIn('.core-values .group', 500);
                
                // Product showcase - simple scale in
                simpleScaleIn('#products', 300);
                
                // Retail solutions - simple fade in
                simpleFadeIn('.retail-card', 400);
                
                // Global presence - simple slide in
                simpleSlideIn('.bg-gradient-to-br.from-gray-50.to-white .grid > div', 200);
                
                // Features - simple scale in
                simpleScaleIn('.premium-card', 300);
                
                // CTA section - simple fade in
                simpleFadeIn('.bg-gradient-to-r.from-blue-600', 200);
                
                // Footer - simple slide in
                simpleSlideIn('footer .grid > div', 100);
                
                console.log('Simple animations initialized successfully!');
            }
            
            // Initialize animations immediately
            initializeSimpleAnimations();
            
            // Add scroll-triggered animations for better performance
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        
                        // Add a simple animation class when element comes into view
                        if (!target.classList.contains('animated')) {
                            target.classList.add('animated');
                            target.style.opacity = '0';
                            target.style.transform = 'translateY(30px)';
                            target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                            
                            setTimeout(() => {
                                target.style.opacity = '1';
                                target.style.transform = 'translateY(0)';
                            }, 100);
                        }
                    }
                });
            }, observerOptions);
            
            // Observe all major sections for scroll animations
            const sections = document.querySelectorAll('section, .premium-card, .retail-card, .support-card');
            sections.forEach(section => {
                observer.observe(section);
            });
                
                // HERO SECTION ANIMATIONS - Enhanced and more dynamic
                const heroTl = gsap.timeline();
                
                heroTl
                    .from('.hero-gradient h1', {
                        duration: 2,
                        y: 200,
                        opacity: 0,
                        ease: 'power4.out',
                        stagger: 0.4
                    })
                    .from('.hero-gradient p', {
                        duration: 1.8,
                        y: 100,
                        opacity: 0,
                        ease: 'power3.out'
                    }, '-=1')
                    .from('.hero-gradient button', {
                        duration: 1.5,
                        y: 80,
                        opacity: 0,
                        scale: 0.8,
                        ease: 'back.out(1.7)',
                        stagger: 0.3
                    }, '-=0.5')
                    .from('.hero-gradient .grid.grid-cols-3 > div', {
                        duration: 1.2,
                        scale: 0,
                        opacity: 0,
                        ease: 'back.out(1.7)',
                        stagger: 0.2
                    }, '-=0.5');
                
                // Floating background elements - Continuous movement
                gsap.to('.hero-gradient .absolute.top-20.left-10', {
                    y: -40,
                    rotation: 10,
                    duration: 12,
                    ease: 'power1.inOut',
                    yoyo: true,
                    repeat: -1
                });
                
                gsap.to('.hero-gradient .absolute.bottom-20.right-10', {
                    y: 40,
                    rotation: -10,
                    duration: 15,
                    ease: 'power1.inOut',
                    yoyo: true,
                    repeat: -1
                });
                
                // RETAIL SOLUTIONS SECTION - Enhanced animations
                gsap.from('#retail-solutions h2', {
                    duration: 2.5,
                    y: 150,
                    opacity: 0,
                    ease: 'power4.out',
                    scrollTrigger: {
                        trigger: '#retail-solutions',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                gsap.from('.retail-card', {
                    duration: 2,
                    y: 150,
                    opacity: 0,
                    scale: 0.6,
                    ease: 'back.out(1.7)',
                    stagger: 0.4,
                    scrollTrigger: {
                        trigger: '#retail-solutions',
                        start: 'top 70%',
                        end: 'bottom 30%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // Floating circles in retail section
                gsap.to('.floating-circle', {
                    y: -80,
                    rotation: 720,
                    scale: 1.2,
                    duration: 25,
                    ease: 'power1.inOut',
                    yoyo: true,
                    repeat: -1,
                    stagger: 3
                });
                
                // Retail card icons - Continuous rotation
                gsap.to('.retail-card .w-24', {
                    rotation: 360,
                    scale: 1.15,
                    duration: 8,
                    ease: 'power2.inOut',
                    yoyo: true,
                    repeat: -1,
                    stagger: 1
                });
                
                // CORE VALUES SECTION - Enhanced entrance
                gsap.from('.core-values .group', {
                    duration: 1.5,
                    y: 120,
                    opacity: 0,
                    scale: 0.7,
                    ease: 'back.out(1.7)',
                    stagger: 0.3,
                    scrollTrigger: {
                        trigger: '.core-values',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // PRODUCT SHOWCASE SECTION
                gsap.from('#products', {
                    duration: 2,
                    y: 120,
                    opacity: 0,
                    scale: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#products',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // GLOBAL PRESENCE SECTION
                gsap.from('.bg-gradient-to-br.from-gray-50.to-white .grid > div', {
                    duration: 1.5,
                    y: 80,
                    opacity: 0,
                    scale: 0.8,
                    ease: 'back.out(1.7)',
                    stagger: 0.2,
                    scrollTrigger: {
                        trigger: '.bg-gradient-to-br.from-gray-50.to-white',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // FEATURES SECTION - Enhanced with better triggers
                gsap.from('.premium-card', {
                    duration: 1.8,
                    y: 120,
                    opacity: 0,
                    scale: 0.7,
                    ease: 'back.out(1.7)',
                    stagger: 0.4,
                    scrollTrigger: {
                        trigger: '.bg-gradient-to-br.from-gray-50.to-white',
                        start: 'top 75%',
                        end: 'bottom 25%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // CTA SECTION
                gsap.from('.bg-gradient-to-r.from-blue-600', {
                    duration: 2,
                    y: 150,
                    opacity: 0,
                    scale: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.bg-gradient-to-r.from-blue-600',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // FOOTER SECTION
                gsap.from('footer .grid > div', {
                    duration: 1.5,
                    y: 80,
                    opacity: 0,
                    ease: 'power2.out',
                    stagger: 0.3,
                    scrollTrigger: {
                        trigger: 'footer',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                });
                
                // CONTINUOUS ANIMATIONS - Always running
                // Consultation button pulse effect
                gsap.to('.mesmerizing-btn', {
                    scale: 1.05,
                    duration: 2,
                    ease: 'power2.inOut',
                    yoyo: true,
                    repeat: -1
                });
                
                // Premium cards hover effect
                gsap.to('.premium-card:hover', {
                    scale: 1.02,
                    y: -10,
                    duration: 0.3,
                    ease: 'power2.out'
                });
                
                console.log('All GSAP animations initialized successfully!');
                return true;
            }
            
            // Try to initialize animations immediately
            let animationsInitialized = initializeAnimations();
            
            // If not initialized, wait a bit and try again (for slower loading)
            if (!animationsInitialized) {
                setTimeout(() => {
                    console.log('Retrying animation initialization...');
                    initializeAnimations();
                }, 1000);
            }
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (mobileMenu) {
                        mobileMenu.classList.toggle('hidden');
                    }
                });
            }

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Product Slider Functionality
            let currentSlide = 0;
            const totalSlides = 3;
            const slider = document.getElementById('product-slider');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            const dots = document.querySelectorAll('.slide-dot');

            function updateSlider() {
                if (slider) {
                    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                }
                
                // Update dots
                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.add('active');
                        dot.style.backgroundColor = 'rgba(255, 255, 255, 1)';
                    } else {
                        dot.classList.remove('active');
                        dot.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            // Event listeners for slider controls
            if (nextButton) {
                nextButton.addEventListener('click', nextSlide);
            }
            
            if (prevButton) {
                prevButton.addEventListener('click', prevSlide);
            }

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentSlide = index;
                    updateSlider();
                });
            });

            // Auto-play slider
            let autoPlayInterval = setInterval(nextSlide, 5000);

            // Pause auto-play on hover
            if (slider) {
                slider.addEventListener('mouseenter', () => {
                    clearInterval(autoPlayInterval);
                });
                
                slider.addEventListener('mouseleave', () => {
                    autoPlayInterval = setInterval(nextSlide, 5000);
                });
            }

            // Hero section button functionality
            const heroButtons = document.querySelectorAll('.hero-gradient button');
            heroButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    if (index === 0) {
                        console.log('Start Free Trial clicked');
                        alert('Starting Free Trial...');
                    } else if (index === 1) {
                        console.log('Watch Demo clicked');
                        alert('Opening Demo...');
                    }
                });
            });

            // Retail cards button functionality
            const retailCardButtons = document.querySelectorAll('.retail-card button');
            retailCardButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const cardTitle = this.closest('.retail-card').querySelector('h3').textContent;
                    console.log(`${cardTitle} Learn More clicked`);
                    alert(`Opening details for ${cardTitle}...`);
                });
            });

            // Consultation button functionality
            const consultationButton = document.querySelector('.mesmerizing-btn');
            if (consultationButton) {
                consultationButton.addEventListener('click', function() {
                    console.log('Get Your Free Consultation clicked');
                    alert('Opening consultation form...');
                });
            }

            // Initialize slider
            updateSlider();
            
            // Initialize animations with retry mechanism
            let animationRetries = 0;
            const maxRetries = 3;
            
            function tryInitializeAnimations() {
                if (initializeAnimations()) {
                    console.log('Animations initialized successfully!');
                } else if (animationRetries < maxRetries) {
                    animationRetries++;
                    console.log(`Animation initialization failed, retrying... (${animationRetries}/${maxRetries})`);
                    setTimeout(tryInitializeAnimations, 1000);
                } else {
                    console.error('Failed to initialize animations after maximum retries');
                }
            }
            
            // Try to initialize animations
            tryInitializeAnimations();
            
            console.log('All functionality initialized successfully!');
        });

        // Error handling for console errors
        window.addEventListener('error', function(e) {
            console.log('Error handled:', e.message);
        });
        
        // Additional GSAP error handling
        window.addEventListener('load', function() {
            if (typeof gsap === 'undefined') {
                console.error('GSAP failed to load');
            } else {
                console.log('GSAP loaded successfully:', gsap.version);
            }
        });
    </script>
</body>
</html>

