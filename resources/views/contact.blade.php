<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Business Control Systems</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
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
        .nav-link.active::after {
            width: 100%;
        }
        .pos-card, .contact-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        .pos-card:hover, .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        /* Simple CSS animations */
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        .scale-in {
            animation: scaleIn 0.6s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        @keyframes scaleIn {
            from { 
                opacity: 0; 
                transform: scale(0.8); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }
        
        /* Stagger animations */
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
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
                    <a href="/contact" class="nav-link active text-blue-600 font-medium">Contact</a>
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
                    <!-- <a href="/industries" class="text-gray-700 hover:text-blue-600 font-medium py-2">Industries</a> -->
                    <a href="/retail-pos" class="text-gray-700 hover:text-blue-600 font-medium py-2">Retail POS</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium py-2">About</a>
                    <a href="/support" class="text-gray-700 hover:text-blue-600 font-medium py-2">Support</a>
                    <a href="/contact" class="text-blue-600 font-medium py-2">Contact</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-300 mt-2">
                        Get Demo
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 fade-in">
                    Get in <span class="gradient-text">Touch</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-8 slide-up stagger-1">
                    Let's Discuss Your Business Needs
                </h2>
                <p class="text-xl text-gray-600 mb-8 slide-up stagger-2">
                    Ready to transform your business with our POS solutions? Contact our team of experts 
                    for personalized consultation and support.
                </p>
                <div class="inline-flex items-center space-x-2 bg-blue-100 rounded-full px-6 py-3 slide-up stagger-3">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-blue-800 font-medium">We're here to help you succeed</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 fade-in">
                        Contact <span class="gradient-text">Information</span>
                    </h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4 slide-up stagger-1">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                                <p class="text-gray-600 text-lg">(800) 233-5876</p>
                                <p class="text-gray-500 text-sm">Monday - Friday: 8:00 AM - 6:00 PM EST</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 slide-up stagger-2">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                                <p class="text-gray-600 text-lg">info@businesscontrol.com</p>
                                <p class="text-gray-500 text-sm">We'll respond within 24 hours</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 slide-up stagger-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Address</h3>
                                <p class="text-gray-600 text-lg">Business Control Systems</p>
                                <p class="text-gray-500 text-sm">123 Business Drive, Suite 100<br>Business City, BC 12345</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-card rounded-3xl p-8 shadow-xl scale-in stagger-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h3>
                    
                    <form action="/contact" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                            <input type="text" id="company" name="company" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="sales">Sales Information</option>
                                <option value="support">Technical Support</option>
                                <option value="demo">Request Demo</option>
                                <option value="quote">Request Quote</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                      placeholder="Tell us about your business needs and how we can help..."></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-xl font-bold text-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                    Why Choose <span class="gradient-text">Business Control Systems</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                    We're not just another POS company. We're your trusted partner in business success.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center slide-up stagger-2">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">40+ Years Experience</h3>
                    <p class="text-gray-600">Decades of expertise in POS solutions and business management systems.</p>
                </div>
                
                <div class="text-center slide-up stagger-3">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">10,000+ Happy Customers</h3>
                    <p class="text-gray-600">Trusted by businesses worldwide for reliable POS solutions.</p>
                </div>
                
                <div class="text-center slide-up stagger-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock technical support and customer service.</p>
                </div>
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
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-8 fade-in">
                Ready to Get <span class="text-yellow-300">Started</span>?
            </h2>
            <p class="text-xl text-gray-100 mb-12 max-w-3xl mx-auto slide-up stagger-1">
                Don't wait to transform your business. Contact us today for a free consultation 
                and discover how our POS solutions can drive your success.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="tel:800-233-5876" class="bg-white rounded-2xl p-6 text-center scale-in stagger-2">
                    <div class="text-2xl font-bold text-gray-900 mb-2">(800) 233-5876</div>
                    <div class="text-gray-600">Call Now</div>
                </a>
                <a href="#contact-form" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 scale-in stagger-3">
                    Get Free Consultation
                </a>
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
                        Empowering businesses worldwide with enterprise-grade POS solutions since 1976. 
                        Trusted by thousands of businesses across the globe.
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
                        <li><a href="/retail-pos" class="text-gray-400 hover:text-white transition-colors">POS Systems</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Inventory Management</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Analytics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Mobile POS</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">Company</h4>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-16 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Business Control Systems. All rights reserved. | Global POS Solutions</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Contact page loaded successfully!');
            
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
            
            // Smooth scrolling for anchor links
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
            
            // Simple scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
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
            
            // Observe sections for scroll animations
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                observer.observe(section);
            });
            
            // Contact form handling
            const contactForm = document.querySelector('form[action="/contact"]');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const submitButton = this.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;
                    
                    // Show loading state
                    submitButton.textContent = 'Sending...';
                    submitButton.disabled = true;
                    
                    fetch('/contact', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.message);
                            this.reset();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Sorry, there was an error sending your message. Please try again.');
                    })
                    .finally(() => {
                        // Reset button state
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                    });
                });
            }
            
            console.log('Contact page animations initialized successfully!');
        });
    </script>
</body>
</html>
