<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRIGUARD - Weather-Informed Decision Support for Farmers</title>
    <meta name="description" content="AGRIGUARD helps farmers prepare for heavy rain and floods with weather-informed decision support and risk advisories.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    @include('partials.navigation')

    <!-- Hero Section -->
    <section id="home" class="pt-20 min-h-screen flex items-center relative hero-section" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('/images/background-image.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!-- Background with subtle overlay -->
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <img src="{{ asset('images/agriguard-logo.png') }}" alt="AGRIGUARD" class="h-48 w-auto mx-auto mb-8 hero-logo">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 hero-title">
                    AGRIGUARD: Weather-Informed Decision Support for Farmers
                </h1>
                <p class="text-xl md:text-2xl text-white mb-8">
                    Helping farmers prepare for heavy rain and floods
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/register" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors btn-scale btn-shadow">
                        Get Started →
                    </a>
                    <a href="/login" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition-colors btn-scale btn-shadow">
                        Login →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section group py-20 bg-gradient-to-br from-gray-50 to-green-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 section-title">
                        About AGRIGUARD
                        <span class="section-title-underline"></span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Empowering farmers with weather intelligence to protect crops and secure livelihoods</p>
                </div>

                <!-- Content Grid -->
                <div class="grid md:grid-cols-3 gap-4 mb-12">
                    <!-- Problem Card -->
                    <div class="card-hover-effect group relative bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <!-- Icon Header -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-red-500 to-red-600"></div>
                        <div class="p-10">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mr-4 icon-scale">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">The Problem</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                Crop losses due to unexpected heavy rain and floods continue to impact farmers' livelihoods. Traditional farming methods often lack access to timely weather information and risk assessment.
                            </p>
                        </div>
                    </div>

                    <!-- Solution Card -->
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <!-- Icon Header -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
                        <div class="p-10">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Our Solution</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                AGRIGUARD combines farm data with real-time weather information to provide farmers with accurate risk advisories and preparedness recommendations to protect their crops and secure their harvest.
                            </p>
                        </div>
                    </div>

                    <!-- Benefits Card -->
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <!-- Icon Header -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                        <div class="p-10">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Benefits</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                Farmers receive timely alerts, improve crop management, minimize losses, and make data-driven decisions to enhance their livelihood and prepare for extreme weather events.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works-section group py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 section-title">
                        How It Works
                        <span class="section-title-underline"></span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Simple steps to protect your crops with weather intelligence</p>
                </div>

                <!-- Steps Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- Step 1: Register -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-6 text-center">
                        <!-- Circular Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white text-2xl font-bold">👤</span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-3">Register</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Create your account and set up your profile to get started with personalized weather insights</p>
                    </div>

                    <!-- Step 2: Add Farm Data -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-6 text-center">
                        <!-- Circular Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white text-2xl font-bold">📋</span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-3">Add Farm Data</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Input your farm details, crop information, and location for accurate weather analysis</p>
                    </div>

                    <!-- Step 3: Weather Analysis -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-6 text-center">
                        <!-- Circular Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-sky-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white text-2xl font-bold">🌤️</span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-3">Weather Analysis</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Get real-time weather data and forecasts tailored to your specific farm location</p>
                    </div>

                    <!-- Step 4: Get Advisories -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-6 text-center">
                        <!-- Circular Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white text-2xl font-bold">🔔</span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-3">Get Advisories</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Receive personalized recommendations and alerts to protect your crops effectively</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8 border-t border-gray-800">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Links -->
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#home" class="hover:text-green-400 transition-colors duration-300 text-sm">Home</a>
                        <a href="#about" class="hover:text-green-400 transition-colors duration-300 text-sm">About</a>
                        <a href="/login" class="hover:text-green-400 transition-colors duration-300 text-sm">Login</a>
                    </div>
                    
                    <!-- Copyright -->
                    <p class="text-xs text-gray-500">
                        &copy; {{ date('Y') }} AGRIGUARD
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>