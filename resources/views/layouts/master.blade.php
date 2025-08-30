<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Business Control Systems - Global POS Solutions Since 1983')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @yield('styles')
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
                    <a href="/" class="nav-link text-gray-700 hover:text-blue-600 font-medium {{ request()->is('/') ? 'active text-blue-600' : '' }}">Home</a>
                    <!-- <a href="/products" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Solutions</a> -->
                    <!-- <a href="/industries" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Industries</a> -->
                    <a href="/retail-pos" class="nav-link text-gray-700 hover:text-blue-600 font-medium {{ request()->is('retail-pos*') ? 'active text-blue-600' : '' }}">Retail POS</a>
                    <a href="/about" class="nav-link text-gray-700 hover:text-blue-600 font-medium {{ request()->is('about*') ? 'active text-blue-600' : '' }}">About</a>
                    <a href="/support" class="nav-link text-gray-700 hover:text-blue-600 font-medium {{ request()->is('support*') ? 'active text-blue-600' : '' }}">Support</a>
                    <a href="/contact" class="nav-link text-gray-700 hover:text-blue-600 font-medium {{ request()->is('contact*') ? 'active text-blue-600' : '' }}">Contact</a>
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
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->is('/') ? 'text-blue-600' : '' }}">Home</a>
                    <!-- <a href="/products" class="text-gray-700 hover:text-blue-600 font-medium py-2">Solutions</a> -->
                    <!-- <a href="/industries" class="text-gray-700 hover:text-blue-600 font-medium py-2">Industries</a> -->
                    <a href="/retail-pos" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->is('retail-pos*') ? 'text-blue-600' : '' }}">Retail POS</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->is('about*') ? 'text-blue-600' : '' }}">About</a>
                    <a href="/support" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->is('support*') ? 'text-blue-600' : '' }}">Support</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->is('contact*') ? 'text-blue-600' : '' }}">Contact</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-300 mt-2">
                        Get Demo
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

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

    @yield('scripts')
</body>
</html>
