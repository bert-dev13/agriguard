<!-- Header Navigation -->
<header class="fixed top-0 w-full bg-white/95 backdrop-blur-md shadow-sm z-50 border-b border-gray-100">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2 group">
                <img src="{{ asset('images/agriguard-logo.png') }}" alt="AGRIGUARD" class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">
                <span class="text-xl font-bold flex items-center">
                    <span class="text-green-600 transition-colors duration-300 group-hover:text-green-700">AGRI</span><span class="text-blue-600 transition-colors duration-300 group-hover:text-blue-700">GUARD</span>
                </span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link text-gray-600 hover:text-green-600 font-medium transition-all duration-300 relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#about" class="nav-link text-gray-600 hover:text-green-600 font-medium transition-all duration-300 relative group">
                    About
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#how-it-works" class="nav-link text-gray-600 hover:text-green-600 font-medium transition-all duration-300 relative group">
                    How It Works
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            
            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="/login" class="px-4 py-2 text-green-600 border border-green-600 rounded-lg font-medium hover:bg-green-50 transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                    Login
                </a>
                <a href="/register" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                    Get Started
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:text-gray-900 hover:bg-gray-100 transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-gray-100">
            <div class="flex flex-col space-y-3">
                <a href="/" class="mobile-nav-link px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-lg font-medium transition-all duration-300">
                    Home
                </a>
                <a href="#about" class="mobile-nav-link px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-lg font-medium transition-all duration-300">
                    About
                </a>
                <a href="#how-it-works" class="mobile-nav-link px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-lg font-medium transition-all duration-300">
                    How It Works
                </a>
                <div class="pt-3 border-t border-gray-100 space-y-2">
                    <a href="/login" class="block w-full px-4 py-2 text-center text-green-600 border border-green-600 rounded-lg font-medium hover:bg-green-50 transition-all duration-300">
                        Login
                    </a>
                    <a href="/register" class="block w-full px-4 py-2 text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
