@extends('layouts.app')

@section('title', 'Tentang Kami - Hadiwijaya Bore Pile')

@section('content')
<!-- Hero Section -->
<section class="bg-cover bg-center bg-no-repeat text-white" style="background-image: url('https://i.ibb.co/3m4pYKV/construction-silhouette.jpg');">
    <div class="bg-black bg-opacity-50">
        <div class="container mx-auto px-4 py-32 text-center">
        <div class="mb-8">
                <x-breadcrumb />
            </div>
            <h1 class="text-5xl font-extrabold font-title drop-shadow-lg">Tentang Kami</h1>
            <p class="mt-4 text-xl font-poppins drop-shadow-md">Mengenal lebih jauh tentang dedikasi dan profesionalisme kami.</p>
        </div>
    </div>
</section>

<div class="bg-gray-50">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            
            <!-- Siapa Kami Section -->
            <section class="mb-16 bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 font-poppins mb-4">Siapa Kami?</h2>
                <p class="text-gray-600 font-poppins mb-4">Tim Hadiwijaya Bore Pile mengoperasikan situs web www.hadiningratcorp.com, situs perusahaan konstruksi spesialis pondasi bore pile.</p>
                <p class="text-gray-600 font-poppins mb-4">Hadiwijaya Bore Pile adalah perusahaan konstruksi penyedia layanan <b>jasa bore pile</b> yang berdedikasi untuk memberikan solusi fondasi yang kokoh, stabil, dan andal untuk berbagai jenis proyek konstruksi. Dengan pengalaman bertahun-tahun di industri ini, kami telah menjadi mitra tepercaya bagi banyak klien, mulai dari pembangunan infrastruktur skala besar hingga proyek komersial dan residensial.</p>
            </section>

            <!-- Founder's Intro -->
            <section class="mb-16 bg-white p-8 rounded-lg shadow-lg flex items-center">
                <div class="flex-1">
                    <h2 class="text-2xl font-bold text-gray-800 font-poppins mb-4">Pengantar oleh Founder</h2>
                    <p class="text-gray-600 font-poppins mb-6">Hadiwijaya Bore Pile hadir sebagai mitra terpercaya Anda dalam setiap kebutuhan pondasi bore pile. Kami memahami pentingnya integritas dan ketepatan waktu, sehingga setiap proyek kami kerjakan dengan profesionalisme tinggi dan komitmen penuh untuk kepuasan klien.</p>
                    <p class="font-bold text-gray-800 font-poppins">Achmad Fikri Ibnu Hadi</p>
                    <p class="text-sm text-primary font-poppins">Founder</p>
                </div>
                <div class="ml-8">
                    <img src="{{ asset('assets/img/about/Fikri-scaled.jpeg') }}" alt="Achmad Fikri Ibnu Hadi" class="w-40 h-40 rounded-full object-cover border-4 border-primary shadow-md">
                </div>
            </section>

            <!-- Vision & Mission -->
            <section class="mb-16">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-brand-blue font-title">Visi & Misi Kami</h2>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <blockquote class="text-center text-2xl font-semibold text-primary italic border-l-4 border-primary pl-4 mb-8">
                        “Pondasi Bore Pile dan Strauss Pile untuk Semua Kalangan”
                    </blockquote>
                    <p class="text-gray-600 font-poppins mb-6">Hadiwijaya Bore Pile didirikan dengan satu tujuan: mengatasi kebutuhan pondasi yang kuat dan stabil dengan biaya yang murah. Berawal dari keyakinan pada prinsip rekayasa pondasi, keahlian, kompetensi, dan kerja keras. Kami telah tumbuh menjadi penyedia layanan bore pile ternama, dengan rekam jejak proyek yang sukses dan klien yang puas. Setiap proyek adalah bukti komitmen kami untuk membangun masa depan yang lebih baik.</p>
                    
                    <div class="grid md:grid-cols-2 gap-8 mt-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 font-poppins mb-2"><i class="fas fa-eye mr-2 text-brand-blue"></i>Visi Kami</h3>
                            <p class="text-gray-600 font-poppins">Menjadi perusahaan pondasi bore pile terdepan di Indonesia, dikenal atas keunggulan kualitas, keandalan, dan komitmen terhadap inovasi serta kepuasan pelanggan. Kami bercita-cita untuk berkontribusi pada pembangunan infrastruktur yang lebih kuat dan aman di seluruh negeri.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 font-poppins mb-2"><i class="fas fa-bullseye mr-2 text-brand-blue"></i>Misi Kami</h3>
                            <p class="text-gray-600 font-poppins">Menyediakan layanan pondasi bore pile yang inovatif, efisien, dan aman, memastikan setiap struktur berdiri di atas dasar yang kokoh dan berkelanjutan. Kami berkomitmen untuk memberikan hasil yang melebihi ekspektasi klien melalui keahlian teknis dan integritas profesional.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Strengths -->
            <section>
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-brand-blue font-title">Kekuatan Kami</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4">
                            <i class="fas fa-users-cog text-4xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold font-poppins text-gray-800 mb-2">Tenaga Ahli dan Kompeten</h3>
                        <p class="text-gray-600 font-poppins">Tim kami terdiri dari para insinyur dan teknisi berpengalaman dan bersertifikasi, memastikan setiap proyek ditangani dengan keahlian dan presisi tertinggi.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4">
                            <i class="fas fa-award text-4xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold font-poppins text-gray-800 mb-2">Berpengalaman</h3>
                        <p class="text-gray-600 font-poppins">Dengan rekam jejak proyek yang beragam, kami terbukti andal dalam memberikan solusi pondasi yang kokoh di berbagai kondisi.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4">
                            <i class="fas fa-hand-holding-usd text-4xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold font-poppins text-gray-800 mb-2">Termurah</h3>
                        <p class="text-gray-600 font-poppins">Kami menawarkan harga paling kompetitif tanpa mengurangi kualitas, membuat pondasi berkualitas tinggi dapat diakses semua kalangan.</p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
