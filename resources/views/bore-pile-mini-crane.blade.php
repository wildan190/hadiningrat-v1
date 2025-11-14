@extends('layouts.app')

@section('title', 'Bore Pile Mesin Mini Crane & Gawangan')

@section('content')
<style>
    .hero-mini-crane-section {
        background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
    }
</style>

{{-- Hero Section --}}
<section class="hero-mini-crane-section relative text-white text-center pt-40 pb-24">
    <div class="absolute inset-0 bg-brand-blue bg-opacity-80"></div>
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <x-breadcrumb />
        </div>
        <h1 class="text-4xl md:text-5xl font-bold font-title mb-4">Bore Pile Mesin Mini Crane & Gawangan</h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto">Solusi pondasi kokoh untuk lokasi sempit atau sulit dijangkau. Berpengalaman sejak 2012 dengan teknologi terkini untuk proyek Anda.</p>
    </div>
</section>

{{-- Definisi Bore Pile Mini Crane --}}
<section class="bg-white">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue mb-6">Apa Itu Bore Pile Mesin Mini Crane / Gawangan?</h2>
                <div class="space-y-4 text-gray-600 text-base lg:text-lg">
                    <p>Bore pile adalah teknik pembuatan pondasi dalam yang dilakukan dengan cara mengebor tanah, lalu memasukkan rangkaian besi tulangan dan mengisinya dengan beton. Teknik ini sangat efektif untuk memastikan bangunan berdiri kokoh, terutama di area dengan kondisi tanah yang kurang stabil.</p>
                    <p>Yang membuat bore pile mesin mini crane atau gawangan ini spesial adalah kemampuannya untuk bekerja di lokasi sempit atau sulit dijangkau alat berat. Mini crane punya ukuran yang lebih kecil tapi tetap tangguh, sementara gawangan adalah alat bantu manual berbentuk rangka besi yang jadi penyangga untuk proses pengeboran.</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/img/minicrane/minicrane3.webp')}}" alt="Ilustrasi Bore Pile Mesin Mini Crane" class="rounded-lg shadow-xl w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="bg-gray-100 py-16 md:py-20">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue mb-4">Butuh Konsultasi Pondasi untuk Proyek Anda?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto text-base lg:text-lg">Hubungi kami sekarang untuk konsultasi GRATIS dan penawaran harga terbaik!</p>
        <a href="https://wa.me/6281325794818" target="_blank" class="inline-block bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-2"></i> Konsultasi via WhatsApp
        </a>
    </div>
</section>

{{-- Layanan Kami --}}
<section class="bg-white">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue">Layanan Unggulan Kami</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-b-4 border-primary">
                <img src="{{ asset('assets/img/minicrane/minicrane1.webp') }}" alt="Layanan Bore Pile Mini Crane" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-2xl font-bold font-title text-brand-blue mb-3">Bore Pile Mini Crane</h3>
                <p class="text-gray-600">Solusi ideal untuk area perumahan dan lahan terbatas dengan minim getaran. Cocok untuk proyek di kawasan padat penduduk.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-b-4 border-brand-blue">
                <img src="{{ asset('assets/img/minicrane/minicrane2.webp') }}" alt="Layanan Bore Pile Gawangan" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-2xl font-bold font-title text-brand-blue mb-3">Bore Pile Gawangan</h3>
                <p class="text-gray-600">Mampu membuat lubang dengan diameter lebih besar. Ideal untuk area pedalaman dan lahan sempit dengan sistem pengaman.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-b-4 border-gray-700">
                <img src="{{ asset('assets/img/minicrane/minicrane3.webp') }}" alt="Layanan Konsultasi & Survei" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-2xl font-bold font-title text-brand-blue mb-3">Konsultasi & Survei</h3>
                <p class="text-gray-600">Tim ahli kami memberikan rekomendasi teknis berdasarkan kondisi tanah dan kebutuhan bangunan Anda.</p>
            </div>
        </div>
    </div>
</section>

{{-- Proses Pengerjaan --}}
<section class="bg-gray-100">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue">Proses Pengerjaan Terstruktur</h2>
            <p class="text-gray-600 mt-3 max-w-3xl mx-auto text-base lg:text-lg">Kami mengutamakan kualitas, keamanan, dan ketepatan waktu dalam setiap proyek dengan tahapan yang transparan.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $steps = [
                    ['icon' => 'fa-search-location', 'title' => 'Survei & Perencanaan'],
                    ['icon' => 'fa-hard-hat', 'title' => 'Persiapan Lokasi'],
                    ['icon' => 'fa-cogs', 'title' => 'Pengeboran'],
                    ['icon' => 'fa-drafting-compass', 'title' => 'Pemasangan Tulangan'],
                    ['icon' => 'fa-fill-drip', 'title' => 'Pengecoran Beton'],
                    ['icon' => 'fa-broom', 'title' => 'Finishing & Pembersihan'],
                ];
            @endphp

            @foreach($steps as $step)
            <div class="flex items-start space-x-4 p-4">
                <div class="flex-shrink-0">
                    <div class="bg-primary text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl">
                        <i class="fas {{ $step['icon'] }}"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold font-title text-brand-blue">{{ $step['title'] }}</h3>
                    <p class="text-gray-600 mt-1">Tahapan detail untuk memastikan hasil yang presisi dan berkualitas.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Keunggulan Section --}}
<section class="bg-white">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
             <div class="order-2 lg:order-1">
                <img src="{{ asset('assets/img/minicrane/minicrane4.webp') }}" alt="Keunggulan Bore Pile Mini Crane" class="rounded-lg shadow-xl w-full h-auto object-cover">
            </div>
            <div class="text-left order-1 lg:order-2">
                <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue mb-6">Keunggulan Metode Mini Crane</h2>
                <ul class="space-y-4 text-gray-700 text-base lg:text-lg">
                    <li class="flex items-start"><i class="fas fa-check-circle text-primary text-xl mr-3 mt-1"></i><div><strong>Akses Lokasi Sempit:</strong> Ideal untuk area yang sulit dijangkau alat berat konvensional.</div></li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-primary text-xl mr-3 mt-1"></i><div><strong>Minim Getaran:</strong> Aman untuk bangunan di sekitar dan tidak mengganggu lingkungan.</div></li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-primary text-xl mr-3 mt-1"></i><div><strong>Fleksibel & Presisi:</strong> Diameter dan kedalaman tiang dapat disesuaikan dengan kebutuhan struktur.</div></li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-primary text-xl mr-3 mt-1"></i><div><strong>Kualitas Terjamin:</strong> Menghasilkan pondasi kokoh dan tahan lama untuk berbagai jenis bangunan.</div></li>
                    <li class="flex items-start"><i class="fas fa-check-circle text-primary text-xl mr-3 mt-1"></i><div><strong>Efisiensi Waktu:</strong> Proses pengerjaan yang relatif lebih cepat dibanding metode manual.</div></li>
                </ul>
                <div class="mt-8 bg-blue-50 border-l-4 border-brand-blue text-brand-blue p-6 rounded-r-lg">
                    <p class="font-semibold italic">"Penggunaan bore pile mini crane dapat mengurangi getaran hingga 60% dibandingkan metode tiang pancang, sangat cocok untuk area padat penduduk."</p>
                    <p class="text-right text-sm mt-2 font-medium">– Jurnal Teknik Sipil UI, 2020</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Aplikasi Section --}}
<section class="bg-gray-100">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue">Aplikasi Pondasi Bore Pile</h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto text-base lg:text-lg">Telah menangani berbagai proyek dari skala kecil hingga besar, memastikan setiap bangunan memiliki pondasi yang handal.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <div class="w-full h-56 flex items-center justify-center bg-gray-500">
                    <i class="fa-solid fa-house text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-title text-brand-blue">Rumah Tinggal</h3>
                    <p class="text-gray-600 mt-2">Solusi pondasi kokoh untuk rumah tinggal di berbagai kondisi tanah, termasuk area rawan longsor atau tanah lunak.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <div class="w-full h-56 flex items-center justify-center bg-brand-blue">
                    <i class="fas fa-building text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-title text-brand-blue">Gedung Bertingkat</h3>
                    <p class="text-gray-600 mt-2">Pondasi kuat untuk gedung dengan beban struktur berat yang membutuhkan daya dukung optimal.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <div class="w-full h-56 flex items-center justify-center bg-gray-400">
                    <i class="fas fa-road-bridge text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-title text-brand-blue">Infrastruktur</h3>
                    <p class="text-gray-600 mt-2">Mendukung proyek infrastruktur seperti jembatan, tanggul, atau menara di area dengan akses terbatas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Perbandingan Metode --}}
<section class="bg-white">
    <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold font-title text-brand-blue">Perbandingan Metode Bore Pile</h2>
            <p class="text-gray-600 mt-3 max-w-3xl mx-auto text-base lg:text-lg">Tim ahli kami akan merekomendasikan metode terbaik sesuai dengan kondisi tanah dan kebutuhan proyek Anda.</p>
        </div>
        <div class="overflow-x-auto shadow-xl rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-brand-blue text-white">
                    <tr>
                        <th class="py-4 px-6 text-left font-bold text-base">Fitur</th>
                        <th class="py-4 px-6 text-left font-bold text-base">Bore Pile Mini Crane</th>
                        <th class="py-4 px-6 text-left font-bold text-base">Bore Pile Gawangan</th>
                        <th class="py-4 px-6 text-left font-bold text-base">Strauss Pile (Manual)</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Diameter Lubang</td>
                        <td class="py-4 px-6">30-80 cm</td>
                        <td class="py-4 px-6">40-100 cm</td>
                        <td class="py-4 px-6">20-30 cm</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Kedalaman Maksimal</td>
                        <td class="py-4 px-6">40 meter</td>
                        <td class="py-4 px-6">30 meter</td>
                        <td class="py-4 px-6">8 meter</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Metode Pengeboran</td>
                        <td class="py-4 px-6">Bor Basah</td>
                        <td class="py-4 px-6">Bor Basah</td>
                        <td class="py-4 px-6">Bor Kering</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Cocok untuk Area</td>
                        <td class="py-4 px-6">Perumahan, lahan terbatas</td>
                        <td class="py-4 px-6">Pedalaman, lahan sempit</td>
                        <td class="py-4 px-6">Proyek kecil, akses sangat terbatas</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Tingkat Getaran</td>
                        <td class="py-4 px-6">Sangat rendah</td>
                        <td class="py-4 px-6">Rendah</td>
                        <td class="py-4 px-6">Minimal</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6 font-bold">Kecepatan Pengerjaan</td>
                        <td class="py-4 px-6">Cepat</td>
                        <td class="py-4 px-6">Sedang</td>
                        <td class="py-4 px-6">Lambat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
