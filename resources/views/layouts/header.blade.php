<!-- Premium Header -->
<header class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-200/50">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <span class="text-white font-black text-xl">BCS</span>
                    </div>
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
