<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-brand-blue font-title mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h2>
            <p class="text-gray-600 font-poppins mb-12">Temukan jawaban atas pertanyaan umum tentang layanan kami.</p>
        </div>

        <div class="max-w-3xl mx-auto" x-data="{ open: null }">
            
            <!-- FAQ Item 1 -->
            <div class="border-b">
                <button @click="open = open === 1 ? null : 1" class="w-full text-left py-6 px-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800 font-poppins">Apa itu pondasi bore pile?</span>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 1 }"></i>
                    </div>
                </button>
                <div x-show.transition.opacity.duration.300ms="open === 1" class="px-4 pb-6">
                    <p class="text-gray-600 font-poppins">Pondasi bore pile adalah jenis pondasi dalam yang dibentuk dengan cara mengebor tanah hingga kedalaman tertentu, kemudian diisi dengan tulangan baja dan adukan beton. Metode ini cocok untuk struktur bangunan besar atau kondisi tanah yang tidak stabil.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border-b">
                <button @click="open = open === 2 ? null : 2" class="w-full text-left py-6 px-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800 font-poppins">Berapa lama proses pengerjaan bore pile?</span>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 2 }"></i>
                    </div>
                </button>
                <div x-show.transition.opacity.duration.300ms="open === 2" class="px-4 pb-6">
                    <p class="text-gray-600 font-poppins">Durasi pengerjaan sangat bervariasi tergantung pada jumlah titik, kedalaman, diameter bore pile, dan kondisi lokasi proyek. Setelah survei, kami akan memberikan estimasi waktu yang lebih akurat.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border-b">
                <button @click="open = open === 3 ? null : 3" class="w-full text-left py-6 px-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800 font-poppins">Apa perbedaan antara metode basah dan kering?</span>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 3 }"></i>
                    </div>
                </button>
                <div x-show.transition.opacity.duration.300ms="open === 3" class="px-4 pb-6">
                    <p class="text-gray-600 font-poppins">Metode kering digunakan untuk tanah yang stabil dan tidak mudah longsor. Sedangkan metode basah menggunakan sirkulasi air atau bentonite untuk menahan dinding lubang bor pada tanah yang cenderung runtuh.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border-b">
                <button @click="open = open === 4 ? null : 4" class="w-full text-left py-6 px-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800 font-poppins">Area mana saja yang dilayani oleh Hadiwijaya Bore Pile?</span>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 4 }"></i>
                    </div>
                </button>
                <div x-show.transition.opacity.duration.300ms="open === 4" class="px-4 pb-6">
                    <p class="text-gray-600 font-poppins">Kami melayani proyek di seluruh wilayah Jabodetabek dan sekitarnya. Untuk proyek di luar area tersebut, silakan hubungi kami untuk mendiskusikan kemungkinan kerja sama.</p>
                </div>
            </div>

        </div>
    </div>
</section>
