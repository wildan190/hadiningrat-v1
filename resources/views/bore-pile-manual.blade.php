@extends('layouts.app')

@section('title', 'Bore Pile Manual (Strauss Pile)')

@section('content')
    <style>
        .hero-manual-section {
            background-image: url('https://plus.unsplash.com/premium_photo-1661963955933-f698d284b3e6?q=80&w=1974&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
    </style>

    {{-- Hero Section --}}
    <div class="hero-manual-section relative text-white text-center pt-40 pb-24">
        <div class="absolute inset-0 bg-brand-blue opacity-80"></div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <x-breadcrumb />
            </div>
            <h1 class="text-4xl md:text-5xl font-bold font-title mb-4">Bore Pile Manual & Strauss Pile</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto">Solusi pondasi kuat dan efisien untuk lokasi dengan akses terbatas, dikerjakan oleh tim profesional berpengalaman sejak 2012.</p>
        </div>
    </div>

    {{-- Keunggulan Section --}}
    <div class="bg-white">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-title text-brand-blue">Keunggulan Jasa Bore Pile Manual Kami</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">Kombinasi antara keahlian, pengalaman, dan peralatan berkualitas menjadi jaminan mutu pekerjaan kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $advantages = [
                        ['icon' => 'fa-calendar-alt', 'title' => 'Pengalaman Sejak 2012', 'description' => 'Kami telah melayani ratusan proyek di seluruh Indonesia dengan pengalaman lebih dari 10 tahun.'],
                        ['icon' => 'fa-users-cog', 'title' => 'Tim Ahli Profesional', 'description' => 'Semua pekerjaan ditangani oleh tim ahli yang terlatih dan berpengalaman dalam teknik pengeboran manual.'],
                        ['icon' => 'fa-tools', 'title' => 'Peralatan Berkualitas', 'description' => 'Kami menggunakan peralatan dan material berkualitas tinggi untuk memastikan hasil pondasi yang kokoh.'],
                    ];
                @endphp

                @foreach ($advantages as $advantage)
                    <div class="text-center p-6">
                        <div class="text-primary text-6xl mb-4">
                            <i class="fas {{ $advantage['icon'] }}"></i>
                        </div>
                        <h3 class="text-2xl font-bold font-title mb-2 text-brand-blue">{{ $advantage['title'] }}</h3>
                        <p class="text-gray-600">{{ $advantage['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Jasa Bore Pile Manual Section --}}
    <div class="bg-gray-100">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h2 class="text-4xl font-bold font-title text-brand-blue mb-4">Jasa Bore Pile Manual</h2>
                    <p class="text-gray-600 mb-6">Bore pile manual adalah metode pengeboran tanah yang dilakukan dengan tenaga manusia. Metode ini sangat cocok untuk lokasi dengan akses terbatas atau area padat penduduk karena tidak menimbulkan kebisingan dan getaran berlebih.</p>
                    <h4 class="font-bold text-xl text-brand-blue mb-3">Spesifikasi Teknis:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary w-5 mr-3 mt-1"></i> <strong>Diameter:</strong> 20 cm, 25 cm, 30 cm, 35 cm, 40 cm</li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary w-5 mr-3 mt-1"></i> <strong>Kedalaman:</strong> 6-8 meter (tergantung kondisi tanah)</li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary w-5 mr-3 mt-1"></i> <strong>Material:</strong> Besi tulangan dan beton berkualitas tinggi</li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary w-5 mr-3 mt-1"></i> <strong>Cocok Untuk:</strong> Rumah 1-3 lantai, ruko, gudang, dan bangunan sedang</li>
                    </ul>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=2070&auto=format&fit=crop" alt="Proses pengerjaan bore pile manual" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>

    {{-- Kelebihan & Keterbatasan Section --}}
    <div class="bg-white">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-3xl font-bold font-title text-brand-blue mb-6">Kelebihan Bore Pile Manual</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start"><i class="fas fa-plus-circle text-green-500 w-5 mr-3 mt-1"></i> Tidak menimbulkan kebisingan dan getaran.</li>
                        <li class="flex items-start"><i class="fas fa-plus-circle text-green-500 w-5 mr-3 mt-1"></i> Bisa dikerjakan di lokasi dengan akses terbatas.</li>
                        <li class="flex items-start"><i class="fas fa-plus-circle text-green-500 w-5 mr-3 mt-1"></i> Biaya lebih terjangkau dibanding metode mesin.</li>
                        <li class="flex items-start"><i class="fas fa-plus-circle text-green-500 w-5 mr-3 mt-1"></i> Tidak memerlukan mobilisasi alat berat.</li>
                        <li class="flex items-start"><i class="fas fa-plus-circle text-green-500 w-5 mr-3 mt-1"></i> Cocok untuk proyek skala kecil hingga menengah.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-3xl font-bold font-title text-brand-blue mb-6">Keterbatasan Bore Pile Manual</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start"><i class="fas fa-minus-circle text-red-500 w-5 mr-3 mt-1"></i> Kedalaman terbatas (maksimal sekitar 8 meter).</li>
                        <li class="flex items-start"><i class="fas fa-minus-circle text-red-500 w-5 mr-3 mt-1"></i> Diameter lubang maksimal 40 cm.</li>
                        <li class="flex items-start"><i class="fas fa-minus-circle text-red-500 w-5 mr-3 mt-1"></i> Waktu pengerjaan lebih lama untuk proyek besar.</li>
                        <li class="flex items-start"><i class="fas fa-minus-circle text-red-500 w-5 mr-3 mt-1"></i> Kurang cocok untuk tanah berbatu atau sangat keras.</li>
                        <li class="flex items-start"><i class="fas fa-minus-circle text-red-500 w-5 mr-3 mt-1"></i> Kapasitas beban lebih rendah dibanding bore pile mesin.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Estimasi Harga Section --}}
    <div class="bg-gray-100">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-title text-brand-blue">Estimasi Harga Jasa Bore Pile Manual</h2>
                <p class="text-gray-600 mt-2 max-w-3xl mx-auto">Harga berikut adalah estimasi untuk jasa pengeboran per meter dan dapat bervariasi tergantung kondisi lapangan.</p>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg">
                    <thead class="bg-brand-blue text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Diameter (cm)</th>
                            <th class="py-3 px-6 text-left">Harga Perkiraan (Rp/meter)</th>
                            <th class="py-3 px-6 text-left">Kedalaman Rata-rata</th>
                            <th class="py-3 px-6 text-left">Aplikasi Ideal</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b">
                            <td class="py-3 px-6">20</td>
                            <td class="py-3 px-6">100.000 – 110.000</td>
                            <td class="py-3 px-6">6 meter</td>
                            <td class="py-3 px-6">Rumah 1 lantai</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-6">25</td>
                            <td class="py-3 px-6">110.000 – 120.000</td>
                            <td class="py-3 px-6">6 meter</td>
                            <td class="py-3 px-6">Rumah 1-2 lantai</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-6">30</td>
                            <td class="py-3 px-6">120.000 – 130.000</td>
                            <td class="py-3 px-6">6-7 meter</td>
                            <td class="py-3 px-6">Rumah 2-3 lantai, Ruko</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-6">35</td>
                            <td class="py-3 px-6">130.000 – 140.000</td>
                            <td class="py-3 px-6">6-7 meter</td>
                            <td class="py-3 px-6">Ruko, Gudang</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">40</td>
                            <td class="py-3 px-6">140.000 – 180.000</td>
                            <td class="py-3 px-6">6-8 meter</td>
                            <td class="py-3 px-6">Bangunan 3 lantai, Gudang</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6 text-center text-sm text-gray-600 bg-yellow-100 border-l-4 border-yellow-500 p-4 rounded-md">
                <p><strong>Catatan Penting:</strong> Harga di atas belum termasuk biaya mobilisasi alat, transportasi tenaga kerja, material besi tulangan, dan pengecoran. Hubungi kami untuk mendapatkan penawaran lengkap sesuai kebutuhan proyek Anda.</p>
            </div>
        </div>
    </div>

    {{-- Jasa Strauss Pile Section --}}
    <div class="bg-white">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <img src="https://plus.unsplash.com/premium_photo-1682145930966-772153c95457?q=80&w=2070&auto=format&fit=crop" alt="Proses pengerjaan strauss pile" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
                <div class="text-left order-1 lg:order-2">
                    <h2 class="text-4xl font-bold font-title text-brand-blue mb-4">Jasa Strauss Pile</h2>
                    <p class="text-gray-600 mb-6">Strauss pile adalah jenis pondasi dalam yang dibuat dengan cara mengebor tanah secara manual, kemudian diisi tulangan besi dan dicor beton. Metode ini efektif untuk meningkatkan daya dukung tanah pada bangunan dengan beban sedang.</p>
                    <h4 class="font-bold text-xl text-brand-blue mb-3">Proses Pengerjaan Strauss Pile:</h4>
                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                        <li>Penentuan titik-titik strauss pile sesuai rencana.</li>
                        <li>Pengeboran tanah dengan mata bor auger manual.</li>
                        <li>Pembersihan lubang bor dari sisa tanah.</li>
                        <li>Pemasangan tulangan besi yang sudah difabrikasi.</li>
                        <li>Pengecoran dengan beton (ready mix atau manual).</li>
                        <li>Penyelesaian dan pengecekan kualitas.</li>
                    </ol>
                    <p class="mt-4 text-gray-600 italic">*Sangat ideal sebagai alternatif ekonomis pengganti pondasi cerucuk bambu atau dolken.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-brand-blue py-20">
        <div class="container mx-auto text-center text-white px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold font-title mb-4">Butuh Konsultasi Pondasi Manual?</h2>
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

    {{-- Perbandingan Pondasi Section --}}
    <div class="bg-gray-100">
        <div class="container mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-title text-brand-blue">Perbedaan Jenis Pondasi</h2>
                <p class="text-gray-600 mt-2 max-w-3xl mx-auto">Pilih metode pondasi yang paling sesuai dengan kebutuhan, kondisi lokasi, dan anggaran proyek Anda.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Bore Pile Manual --}}
                <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-primary">
                    <h3 class="font-bold text-2xl text-brand-blue mb-4 font-title">Bore Pile Manual</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Dikerjakan tenaga manusia</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Diameter 20-40 cm</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Kedalaman maks. 8 meter</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Untuk bangunan 1-3 lantai</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Biaya lebih terjangkau</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Tanpa mobilisasi alat berat</li>
                    </ul>
                </div>
                {{-- Strauss Pile --}}
                <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-brand-blue">
                    <h3 class="font-bold text-2xl text-brand-blue mb-4 font-title">Strauss Pile</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Dikerjakan tenaga manusia</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Diameter 20-40 cm</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Kedalaman rata-rata 6 meter</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Ideal untuk rumah & ruko</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Pengganti cerucuk bambu</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Proses lebih cepat</li>
                    </ul>
                </div>
                {{-- Bore Pile Mesin --}}
                <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-gray-700">
                    <h3 class="font-bold text-2xl text-brand-blue mb-4 font-title">Bore Pile Mesin</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Pakai mesin mini crane</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Diameter 30-60 cm</li>
                        <li class="flex items-start	"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Kedalaman hingga 25 meter</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Untuk bangunan bertingkat</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Biaya lebih tinggi</li>
                        <li class="flex items-start"><i class="fas fa-check text-green-500 w-5 mr-3 mt-1"></i> Perlu mobilisasi alat berat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
