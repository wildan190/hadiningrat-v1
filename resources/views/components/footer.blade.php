<footer class="bg-[#0A1F44] text-white font-poppins">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- About Section -->
            <div class="md:col-span-2">
                <div class="flex items-center mb-4">
                    <img 
                        src="{{ asset('assets/img/hbp-logo.png') }}" 
                        alt="Hadiwijaya Bore Pile Logo" 
                        class="h-10 w-auto mr-3 drop-shadow-[0_0_6px_rgba(255,255,255,0.8)]"
                    >
                    <h3 class="text-2xl font-bold font-title text-white">Hadiwijaya Bore Pile</h3>
                </div>
                <p class="text-gray-300">
                    Mitra terpercaya Anda untuk pondasi bore pile dan strauss pile yang kokoh dan terjangkau. 
                    Kami berkomitmen pada kualitas, integritas, dan kepuasan klien.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-white">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-gray-300 hover:text-white transition">Layanan</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-white transition">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="text-gray-300 hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="{{ route('return-refund-policy') }}" class="text-gray-300 hover:text-white transition">Return & Refund Policy</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-white">Hubungi Kami</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary"></i>
                        <span class="text-gray-300">
                            Manggihan, RT.02/RW.03, Sambung, Kec. Godong, Kabupaten Grobogan, Jawa Tengah 58162
                        </span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-primary"></i>
                        <span class="text-gray-300">+62 813-2579-4818</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-primary"></i>
                        <span class="text-gray-300">info@hadiningratcorp.com</span>
                    </li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-300 hover:text-primary text-xl transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-300 hover:text-primary text-xl transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-primary text-xl transition"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-[#081A37] py-4">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} Hadiwijaya Bore Pile. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>
