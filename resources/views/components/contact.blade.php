<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h3 class="text-4xl font-bold font-title text-brand-blue">Hubungi Kami</h3>
            <p class="text-gray-600 mt-2">Dapatkan penawaran dan konsultasi gratis untuk proyek Anda.</p>
        </div>
        
        <div class="flex flex-wrap md:flex-nowrap gap-12 justify-center">

            <!-- Kolom Kiri: Form -->
            <div class="w-full md:w-1/2 bg-white rounded-xl shadow-lg p-8 flex flex-col">
                <h4 class="text-2xl font-bold font-title text-brand-blue mb-6">Kirim Pesan</h4>
                <form id="landingContactForm" method="POST" class="flex flex-col flex-grow">
                    <div class="mb-4">
                        <label for="landing_name" class="block text-gray-600 mb-2 font-semibold">Nama</label>
                        <input type="text" id="landing_name" name="name" placeholder="Masukkan nama lengkap Anda" class="w-full bg-gray-100 border border-gray-200 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-brand-orange font-rubik transition">
                    </div>
                    <div class="mb-4">
                        <label for="landing_email" class="block text-gray-600 mb-2 font-semibold">Email</label>
                        <input type="email" id="landing_email" name="email" placeholder="Masukkan alamat email Anda" class="w-full bg-gray-100 border border-gray-200 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-brand-orange font-rubik transition">
                    </div>
                    <div class="mb-6 flex-grow flex flex-col">
                        <label for="landing_message" class="block text-gray-600 mb-2 font-semibold">Pesan</label>
                        <textarea id="landing_message" name="message" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." class="w-full bg-gray-100 border border-gray-200 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-brand-orange font-rubik transition flex-grow"></textarea>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="w-full bg-brand-orange text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition-transform transform hover:scale-105 text-lg font-poppins">Kirim via WhatsApp</button>
                    </div>
                </form>
            </div>

            <!-- Kolom Kanan: Info Kontak & Peta -->
            <div class="w-full md:w-1/2 bg-white rounded-xl shadow-lg p-8 flex flex-col">
                <h4 class="text-2xl font-bold font-title text-brand-blue mb-6">Informasi Kontak</h4>
                <div class="space-y-6 mb-8">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-2xl text-brand-orange mt-1 w-6 text-center"></i>
                        <div class="ml-4">
                            <h5 class="font-poppins font-bold text-lg">Alamat</h5>
                            <p class="text-gray-600">Manggihan, RT.02/RW.03, Sambung, Kec. Godong, Kabupaten Grobogan, Jawa Tengah 58162</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-phone text-2xl text-brand-orange mt-1 w-6 text-center"></i>
                        <div class="ml-4">
                            <h5 class="font-poppins font-bold text-lg">Telepon</h5>
                            <a href="tel:081325794818" class="text-gray-600 hover:text-brand-orange transition">0813-2579-4818</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-envelope text-2xl text-brand-orange mt-1 w-6 text-center"></i>
                        <div class="ml-4">
                            <h5 class="font-poppins font-bold text-lg">Email</h5>
                            <a href="mailto:info@hadiningratcorp.com" class="text-gray-600 hover:text-brand-orange transition">info@hadiningratcorp.com</a>
                        </div>
                    </div>
                </div>
                <div class="flex-grow flex flex-col mt-auto">
                     <div class="h-64 w-full rounded-lg overflow-hidden shadow-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4835.971182386377!2d110.74934999999999!3d-7.0660276999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x490336cdce072b8f%3A0x1f48794632c8ef6e!2sHadiwijaya%20Bore%20Pile%20-%20Jasa%20Bore%20Pile%20dan%20Strauss%20Pile%20Manual!5e1!3m2!1sid!2skr!4v1762041295013!5m2!1sid!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="mt-6 flex space-x-4 justify-center">
                        <a href="#" class="text-gray-400 hover:text-brand-orange transition-transform transform hover:scale-110"><i class="fab fa-facebook-f text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-brand-orange transition-transform transform hover:scale-110"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-brand-orange transition-transform transform hover:scale-110"><i class="fab fa-youtube text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-brand-orange transition-transform transform hover:scale-110"><i class="fab fa-linkedin-in text-2xl"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.getElementById('landingContactForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('landing_name').value;
        const email = document.getElementById('landing_email').value;
        const message = document.getElementById('landing_message').value;

        const template = `Halo, perkenalkan saya ${name}.\nSaya ingin bertanya mengenai layanan Hadiwijaya Bore Pile.\n\n*Pesan:*\n${message}\n\n---\n*Email saya:* ${email}\n`;

        const whatsappUrl = `https://wa.me/6281325794818?text=${encodeURIComponent(template)}`;

        window.open(whatsappUrl, '_blank');
    });
</script>