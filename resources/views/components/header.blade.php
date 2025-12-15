<div class="fixed top-0 left-0 right-0 z-50 px-4 sm:px-0">
    <header x-data="{ open: false, servicesOpen: false, mobileServicesOpen: false }"
        class="bg-white/90 backdrop-blur-sm shadow-md rounded-2xl mx-auto mt-2 sm:mt-4 z-50 max-w-7xl">
        <nav class="px-4 sm:px-6 lg:px-8 flex justify-between items-center py-2 sm:py-3">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2" aria-label="Hadiwijaya Bore Pile - Home">
                <img src="{{ asset('assets/img/hbp-logo.png') }}" alt="Hadiwijaya Bore Pile" class="h-7 sm:h-9">
                <span class="text-xl sm:text-2xl font-bold font-title">
                    <span class="text-blue-700">Hadiwijaya</span>
                    <span class="text-[rgb(213,104,62)]">&nbsp;Bore Pile</span>
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">

                <!-- Beranda -->
                <a href="{{ route('home') }}"
                    class="font-poppins transition-colors duration-200 
                   {{ request()->routeIs('home') ? 'text-[rgb(213,104,62)]' : 'text-gray-600 hover:text-[rgb(213,104,62)]' }}">
                    Beranda
                </a>

                <!-- Services Dropdown -->
                <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen"
                        class="font-poppins flex items-center transition-colors duration-200 
                        {{ request()->is('bore-pile-*') || request()->routeIs('products.index') ? 'text-[rgb(213,104,62)]' : 'text-gray-600 hover:text-[rgb(213,104,62)]' }}">
                        Layanan
                        <i class="fas fa-chevron-down text-xs ml-2"></i>
                    </button>
                    <div x-show="servicesOpen" x-cloak x-transition.origin.top.left
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <a href="{{ route('bore-pile-hydraulic')}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[rgb(213,104,62)] transition-colors duration-200">Bore
                                Pile Hydraulic</a>
                            <a href="{{ route('bore-pile-manual') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[rgb(213,104,62)] transition-colors duration-200">Bore
                                Pile Manual</a>
                            <a href="{{ route('bore-pile-mini-crane') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[rgb(213,104,62)] transition-colors duration-200">Bore
                                Pile Mini Crane</a>
                            <a href="{{ route('products.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[rgb(213,104,62)] transition-colors duration-200">Area
                                Layanan</a>
                        </div>
                    </div>
                </div>

                <!-- Tentang Kami -->
                <a href="{{ route('about') }}"
                    class="font-poppins transition-colors duration-200 
                   {{ request()->routeIs('about') ? 'text-[rgb(213,104,62)]' : 'text-gray-600 hover:text-[rgb(213,104,62)]' }}">
                    Tentang Kami
                </a>

                <!-- Tombol Kontak -->
                <a href="{{ route('contact') }}"
                    class="font-poppins bg-[rgb(213,104,62)] text-white font-bold py-2 px-6 rounded-full border-2 border-[rgb(213,104,62)] hover:bg-transparent hover:text-[rgb(213,104,62)] transition-colors duration-200">
                    Kontak
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-blue-700 focus:outline-none">
                    <i class="fas fa-bars text-xl sm:text-2xl"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div x-show="open" x-cloak class="md:hidden bg-white border-t rounded-b-2xl overflow-hidden">
            <div class="px-4 sm:px-6 lg:px-8">

                <!-- Beranda -->
                <a href="{{ route('home') }}" @click="open = false" class="block py-2 text-gray-600 hover:bg-gray-50 hover:text-[rgb(213,104,62)] font-poppins transition-colors duration-200 text-sm sm:text-base 
                   {{ request()->routeIs('home') ? 'text-[rgb(213,104,62)]' : '' }}">
                    Beranda
                </a>

                <!-- Mobile Services Accordion -->
                <div>
                    <button @click="mobileServicesOpen = !mobileServicesOpen"
                        class="w-full flex justify-between items-center py-2 px-4 text-gray-600 hover:bg-gray-50 hover:text-[rgb(213,104,62)] font-poppins transition-colors duration-200 text-sm sm:text-base">
                        <span>Layanan</span>
                        <i class="fas fa-chevron-down text-xs transition-transform"
                            :class="{ 'rotate-180': mobileServicesOpen }"></i>
                    </button>
                    <div x-show="mobileServicesOpen" x-cloak
                        class="bg-gray-50 pl-4 border-l-2 border-[rgb(213,104,62)]">
                        <a href="{{ route('bore-pile-hydraulic')}}" @click="open = false"
                            class="block py-1.5 px-4 text-gray-600 hover:text-[rgb(213,104,62)] transition-colors duration-200 text-sm sm:text-base">Bore
                            Pile Hydraulic</a>
                        <a href="{{ route('bore-pile-manual') }}" @click="open = false"
                            class="block py-1.5 px-4 text-gray-600 hover:text-[rgb(213,104,62)] transition-colors duration-200 text-sm sm:text-base">Bore
                            Pile Manual</a>
                        <a href="{{ route('bore-pile-mini-crane') }}" @click="open = false"
                            class="block py-1.5 px-4 text-gray-600 hover:text-[rgb(213,104,62)] transition-colors duration-200 text-sm sm:text-base">Bore
                            Pile Mini Crane</a>
                        <a href="{{ route('products.index') }}" @click="open = false"
                            class="block py-1.5 px-4 text-gray-600 hover:text-[rgb(213,104,62)] transition-colors duration-200 text-sm sm:text-base">Area
                            Layanan</a>
                    </div>
                </div>

                <!-- Tentang Kami -->
                <a href="{{ route('about') }}" @click="open = false" class="block py-2 px-4 text-gray-600 hover:bg-gray-50 hover:text-[rgb(213,104,62)] font-poppins transition-colors duration-200 text-sm sm:text-base 
                   {{ request()->routeIs('about') ? 'text-[rgb(213,104,62)]' : '' }}">
                    Tentang Kami
                </a>

                <!-- Tombol Kontak -->
                <div class="p-3">
                    <a href="{{ route('contact') }}" @click="open = false"
                        class="block text-center font-poppins bg-[rgb(213,104,62)] text-white font-bold py-2 px-6 rounded-full border-2 border-[rgb(213,104,62)] hover:bg-transparent hover:text-[rgb(213,104,62)] transition-colors duration-200 text-sm sm:text-base">
                        Kontak
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>