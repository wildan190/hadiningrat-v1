@extends('layouts.app')

@section('title', 'Bore Pile Hydraulic Drilling Rig')

@section('content')
    <style>
        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1571012382159-922572f2d373?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        /* Timeline styles only for desktop (md and up) */
        @media (min-width: 768px) {
            .timeline-path {
                position: absolute;
                width: 4px;
                background-color: #E0632B; /* primary */
                top: 0;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: #E0632B; /* primary */
                left: 50%;
                transform: translateX(-50%);
                top: 1.5rem; /* Adjust to center with the card padding */
                z-index: 10;
                border: 4px solid #0A1F44; /* brand-blue */
            }
        }
    </style>

    {{-- Hero Section --}}
    <div class="hero-section relative text-white text-center py-32">
        <div class="absolute inset-0 bg-brand-blue opacity-70"></div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <x-breadcrumb />
            </div>
            <h1 class="text-4xl md:text-5xl font-bold font-title mb-4">Bore Pile Hydraulic Drilling Rig</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Solusi pondasi kokoh, modern, dan efisien untuk menjamin kesuksesan proyek konstruksi Anda.</p>
        </div>
    </div>

    {{-- Advantages Section --}}
    <div class="bg-gray-100">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-title text-brand-blue">Keunggulan Jasa Kami</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">Dengan teknologi terkini dan tim ahli, kami memberikan hasil terbaik yang membedakan kami dari kompetitor.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $advantages = [
                        ['icon' => 'fa-hard-hat', 'title' => 'Tenaga Ahli', 'description' => 'Tim teknisi bersertifikasi dengan pengalaman lebih dari 10 tahun.'],
                        ['icon' => 'fa-cogs', 'title' => 'Peralatan Modern', 'description' => 'Menggunakan mesin hydraulic drilling rig terbaru dan teknologi canggih.'],
                        ['icon' => 'fa-shipping-fast', 'title' => 'Metode Efisien', 'description' => 'Proses pengeboran yang cepat, efisien, dengan hasil presisi tinggi.'],
                        ['icon' => 'fa-globe-americas', 'title' => 'Jangkauan Luas', 'description' => 'Melayani seluruh wilayah Indonesia dengan mobilisasi peralatan yang cepat.'],
                        ['icon' => 'fa-file-alt', 'title' => 'Dokumentasi Lengkap', 'description' => 'Menyediakan laporan teknis dan dokumentasi lengkap proses pengerjaan.'],
                        ['icon' => 'fa-tags', 'title' => 'Harga Kompetitif', 'description' => 'Penawaran harga terbaik dengan jaminan kualitas pekerjaan premium.'],
                    ];
                @endphp

                @foreach ($advantages as $advantage)
                    <div class="bg-white transform transition-transform duration-300 hover:-translate-y-2 rounded-lg shadow-lg">
                        <div class="bg-primary text-white text-5xl text-center py-5 rounded-t-lg">
                            <i class="fas {{ $advantage['icon'] }}"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold font-title mb-2 text-brand-blue">{{ $advantage['title'] }}</h3>
                            <p class="text-gray-600">{{ $advantage['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Work Process Section --}}
    <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold font-title text-brand-blue">Proses Pengerjaan Kami</h2>
            <p class="text-gray-600 mt-2 max-w-2xl mx-auto">Setiap tahap dikerjakan oleh tenaga ahli dengan pengawasan ketat untuk hasil pondasi yang kokoh dan sesuai standar.</p>
        </div>

        <div class="relative max-w-lg md:max-w-4xl mx-auto">
            <div class="timeline-path hidden md:block"></div>
            @php
                $processes = [
                    ['title' => 'Persiapan Lokasi', 'description' => 'Survei lokasi, penentuan titik bor, dan persiapan akses untuk mobilisasi alat berat.'],
                    ['title' => 'Pengeboran', 'description' => 'Proses pengeboran presisi menggunakan mesin hidrolik dengan metode yang disesuaikan kondisi tanah.'],
                    ['title' => 'Pemasangan Tulangan', 'description' => 'Instalasi kerangka tulangan besi yang telah dirakit sesuai spesifikasi teknis ke dalam lubang bor.'],
                    ['title' => 'Pengecoran', 'description' => 'Pengecoran beton mutu tinggi ke dalam lubang bor menggunakan metode tremie untuk kepadatan maksimal.'],
                    ['title' => 'Pengujian Kualitas', 'description' => 'Melakukan pengujian seperti PDA test atau loading test untuk memastikan daya dukung pondasi.'],
                    ['title' => 'Finalisasi Proyek', 'description' => 'Pembersihan lokasi kerja dan serah terima proyek beserta laporan teknis lengkap.'],
                ];
            @endphp

            @foreach ($processes as $index => $process)
                <div class="relative timeline-item mb-8">
                     <div class="md:flex items-center {{ $loop->odd ? 'md:justify-end' : '' }}">
                        <div class="md:w-1/2 w-full {{ $loop->odd ? 'md:pl-10' : 'md:pr-10' }}">
                            <div class="bg-white p-6 rounded-lg border-2 border-gray-200 shadow-lg">
                                <h3 class="font-bold text-primary text-xl font-title">{{ $loop->iteration }}. {{ $process['title'] }}</h3>
                                <p class="text-gray-600">{{ $process['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-brand-blue py-20">
        <div class="container mx-auto text-center text-white px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold font-title mb-4">Butuh Konsultasi Jasa Bore Pile Hydraulic?</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis untuk proyek konstruksi Anda!</p>
            <div class="flex flex-col sm:flex-row sm:justify-center items-center gap-4">
                <a href="tel:081325794818" class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 w-full sm:w-auto">
                    <i class="fas fa-phone-alt mr-2"></i> 0813-2579-4818
                </a>
                <a href="mailto:info@hadijayaborepile.com" class="bg-transparent border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 w-full sm:w-auto">
                    <i class="fas fa-envelope mr-2"></i> Email Kami
                </a>
            </div>
        </div>
    </div>

    {{-- Service Area Section --}}
    <div class="bg-gray-100">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-title text-brand-blue">Area Layanan Kami</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">Kami siap melayani kebutuhan bore pile Anda di seluruh penjuru Indonesia, dari kota besar hingga daerah terpencil.</p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                    <div>
                        <h3 class="text-2xl font-bold font-title text-primary mb-4">Pulau Jawa</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Jakarta</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Bandung</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Surabaya</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Semarang</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Yogyakarta</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold font-title text-primary mb-4">Pulau Sumatera</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Medan</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Palembang</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Padang</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Pekanbaru</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Lampung</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold font-title text-primary mb-4">Wilayah Lainnya</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Bali</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Kalimantan</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Sulawesi</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Papua</li>
                            <li class="flex items-center"><i class="fas fa-map-marker-alt text-brand-blue w-5 mr-2"></i> Nusa Tenggara</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
