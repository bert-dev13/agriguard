<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AGRIGUARD</title>
    <meta name="description" content="AGRIGUARD Dashboard - Weather-Informed Decision Support for Farmers">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <!-- Dashboard Section -->
    <section class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <img src="{{ asset('images/agriguard-logo.png') }}" alt="AGRIGUARD" class="h-20 w-auto mx-auto mb-6">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">
                    Welcome to Your Dashboard
                </h1>
                <p class="text-xl text-gray-600">
                    Hello, {{ Auth::user()->name }}! Manage your farm and get weather insights.
                </p>
            </div>

            @if (session('success'))
                <div class="mb-8 p-4 bg-green-50 border border-green-200 rounded-lg max-w-2xl mx-auto">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <!-- Dashboard Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- Weather Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Weather</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Get real-time weather data and forecasts for your farm location.</p>
                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        View Weather
                    </button>
                </div>

                <!-- Farm Data Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Farm Data</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Manage your farm information, crop details, and field locations.</p>
                    <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors duration-200">
                        Manage Farm
                    </button>
                </div>

                <!-- Advisories Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Advisories</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Receive personalized recommendations and weather alerts.</p>
                    <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors duration-200">
                        View Advisories
                    </button>
                </div>
            </div>

            <!-- User Info Section -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 max-w-2xl mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Account Information</h2>
                <div class="space-y-3">
                    <div class="flex justify-between py-2 border-b border-gray-100">
                        <span class="text-gray-600">Name:</span>
                        <span class="font-medium text-gray-800">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-gray-100">
                        <span class="text-gray-600">Email:</span>
                        <span class="font-medium text-gray-800">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Member Since:</span>
                        <span class="font-medium text-gray-800">{{ Auth::user()->created_at->format('F j, Y') }}</span>
                    </div>
                </div>
                
                <div class="mt-6 flex gap-3">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition-colors duration-200">
                            Logout
                        </button>
                    </form>
                    <a href="/" class="bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors duration-200 inline-block text-center">
                        Back to Home
                    </a>
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
                        <a href="/" class="hover:text-green-400 transition-colors duration-300 text-sm">Home</a>
                        <a href="#about" class="hover:text-green-400 transition-colors duration-300 text-sm">About</a>
                        <a href="#how-it-works" class="hover:text-green-400 transition-colors duration-300 text-sm">How It Works</a>
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
