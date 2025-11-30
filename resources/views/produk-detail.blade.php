@extends('layouts.app')

@section('title', $product['name'] ?? 'Detail Produk')
@section('description', isset($product['description']) ? strip_tags(substr($product['description'], 0, 155)) : '')
@section('og_image', $product['images'][0]['src'] ?? asset('assets/img/hbp-logo.png'))

@php
    // Safe variables
    $prodName = $product['name'] ?? '';
    $prodImage = $product['images'][0]['src'] ?? asset('assets/img/hbp-logo.png');
    $prodDescription = isset($product['description']) ? strip_tags($product['description']) : '';
    $prodSku = $product['sku'] ?? ($product['id'] ?? null);
    $prodPrice = $product['price'] ?? '0';
    $prodUrl = url()->current();

    // Build schema as PHP array (prevents Blade parsing @context/@type)
    $productSchema = [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $prodName,
        "image" => $prodImage,
        "description" => $prodDescription,
        "sku" => $prodSku,
        "offers" => [
            "@type" => "Offer",
            "url" => $prodUrl,
            "priceCurrency" => "IDR",
            "price" => $prodPrice,
            "availability" => "https://schema.org/InStock",
        ],
    ];
@endphp

@push('schema')
<script type="application/ld+json">
{!! json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')

<div x-data="{ 
        bookingModal: false,
        init() {
            window.addEventListener('close-booking-modal', () => {
                this.bookingModal = false;
            });
        }
    }" 
    @keydown.escape.window="bookingModal = false">
    {{-- Page Header --}}
    <section class="bg-brand-blue text-white pt-32 pb-16">
        <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <x-breadcrumb />
            </div>
            <h1 class="text-4xl md:text-5xl font-bold font-title">Detail Produk</h1>
        </div>
    </section>

    {{-- Product Details --}}
    <section class="bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto py-8 md:py-16 px-4 sm:px-6 lg:px-8">
            <!-- Product Gallery and Info -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12 mb-8 lg:mb-12">
                {{-- Product Gallery --}}
                <div class="space-y-4">
                    @if(!empty($product['images']))
                        <div class="relative rounded-2xl overflow-hidden shadow-xl bg-white">
                            <img 
                                src="{{ $product['images'][0]['src'] }}" 
                                alt="{{ $product['name'] ?? 'Produk' }}" 
                                class="w-full object-contain max-h-[600px] mx-auto"
                            >
                        </div>
                        {{-- Thumbnail gallery --}}
                        @if(count($product['images']) > 1)
                            <div class="grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-4">
                                @foreach($product['images'] as $image)
                                    <div class="aspect-square rounded-lg overflow-hidden shadow-md transition-transform hover:scale-105">
                                        <img 
                                            src="{{ $image['src'] }}" 
                                            alt="{{ $product['name'] ?? 'Produk' }}" 
                                            class="w-full h-full object-cover cursor-pointer border-2 border-transparent hover:border-brand-orange"
                                        >
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @else
                        <div class="w-full h-[300px] sm:h-[400px] lg:h-[500px] bg-gray-100 rounded-2xl flex items-center justify-center">
                            <span class="text-gray-400 text-lg">Gambar tidak tersedia</span>
                        </div>
                    @endif
                </div>

                {{-- Product Info --}}
                <div class="lg:sticky lg:top-32">
                    <div class="bg-white p-4 sm:p-6 lg:p-8 rounded-xl sm:rounded-2xl shadow-lg">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-blue mb-4 break-words">{{ $product['name'] ?? '-' }}</h1>
                        
                        <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-brand-orange mb-6">
                            {!! $product['price_html'] ?? ('Rp ' . number_format((float)($product['price'] ?? 0), 0, ',', '.')) !!}
                        </div>

                        @if(!empty($product['categories']))
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-gray-600 font-medium">Kategori:</span>
                                @foreach($product['categories'] as $category)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-gray-100 text-sm font-medium text-gray-800">
                                        {{ $category['name'] }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <div class="space-y-6">
                            <button 
                                @click="bookingModal = true" 
                                type="button" 
                                class="w-full bg-brand-orange hover:bg-opacity-90 text-white font-bold py-4 px-6 rounded-xl text-lg transition-all duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-brand-orange focus:ring-offset-2 shadow-lg hover:shadow-xl flex items-center justify-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Booking Sekarang
                            </button>

                            <a 
                                href="https://wa.me/6281325794818" 
                                target="_blank" 
                                class="w-full bg-white border-2 border-brand-orange text-brand-orange hover:bg-brand-orange hover:text-white font-bold py-4 px-6 rounded-xl text-lg transition-all duration-300 flex items-center justify-center gap-2"
                            >
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
                <h2 class="text-2xl sm:text-3xl font-bold font-title text-brand-blue mb-6 pb-4 border-b">Deskripsi Produk</h2>
                <div class="prose prose-lg max-w-none">
                    <div class="prose-headings:font-bold prose-headings:text-brand-blue prose-h1:text-3xl prose-h2:text-2xl prose-h3:text-xl prose-h4:text-lg prose-p:text-gray-600 prose-strong:text-brand-blue prose-a:text-brand-orange prose-a:no-underline hover:prose-a:underline prose-ul:list-disc prose-ol:list-decimal prose-li:text-gray-600 prose-img:rounded-xl prose-img:shadow-lg">
                        @php
                            // Mengubah H1 dari deskripsi menjadi H2 untuk menjaga struktur SEO,
                            // sambil tetap memberikan styling yang sesuai melalui CSS.
                            $description = isset($product['description']) ? str_replace(['<h1>', '</h1>'], ['<h2>', '</h2>'], $product['description']) : '';
                        @endphp
                        {!! $description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div x-show="bookingModal" 
         x-cloak 
         class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 sm:p-6 md:p-20"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        
        <div @click.away="bookingModal = false" 
             class="bg-white rounded-lg shadow-2xl w-full max-w-md mx-auto transform transition-all"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            
            <div class="px-6 pt-6 pb-4 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h5 class="text-xl sm:text-2xl font-bold font-title text-brand-blue">Formulir Booking</h5>
                    <button @click="bookingModal = false" type="button" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Tutup</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <form id="bookingForm" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent text-base" required>
                    </div>
                    <div>
                        <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
                        <input type="tel" id="whatsapp" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent text-base" required>
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Lokasi Proyek</label>
                        <input type="text" id="location" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent text-base" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan (Opsional)</label>
                        <textarea id="message" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent text-base"></textarea>
                    </div>
                </form>
            </div>

            <div class="bg-gray-50 px-6 py-4 sm:px-8 rounded-b-lg flex flex-col sm:flex-row gap-3 sm:justify-end">
                <button @click="bookingModal = false" type="button" class="w-full sm:w-auto px-6 py-2.5 text-gray-700 font-medium border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    Tutup
                </button>
                <button type="button" id="submitBooking" class="w-full sm:w-auto px-6 py-2.5 bg-brand-orange text-white font-medium rounded-lg hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:ring-offset-2 transition-colors">
                    Kirim via WhatsApp
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('submitBooking');
    if (!btn) return;

    btn.addEventListener('click', function() {
      // Get all form values
      const name = document.getElementById('name').value.trim();
      const whatsapp = document.getElementById('whatsapp').value.trim();
      const location = document.getElementById('location').value.trim();
      const message = document.getElementById('message').value.trim();
      const productName = {!! json_encode($prodName) !!};

      // Validate required fields
      if (!name || !whatsapp || !location) {
        alert('Nama, Nomor WhatsApp, dan Lokasi Proyek tidak boleh kosong.');
        return;
      }

      // Format WhatsApp number (remove any non-numeric characters and ensure it starts with proper format)
      let formattedWhatsApp = whatsapp.replace(/\D/g, '');
      if (formattedWhatsApp.startsWith('0')) {
        formattedWhatsApp = '62' + formattedWhatsApp.substring(1);
      } else if (!formattedWhatsApp.startsWith('62')) {
        formattedWhatsApp = '62' + formattedWhatsApp;
      }

      // Create the WhatsApp message
      const waMessage = `Halo, saya tertarik untuk memesan produk berikut:\n\n` +
                       `*Produk:* ${productName}\n` +
                       `*Nama:* ${name}\n` +
                       `*Nomor WhatsApp:* ${whatsapp}\n` +
                       `*Lokasi Proyek:* ${location}\n` +
                       `*Pesan:* ${message || '-'}\n\n` +
                       `Mohon informasinya lebih lanjut.`;

      // Create WhatsApp URL (using company's WhatsApp number)
      const whatsappUrl = `https://wa.me/6281325794818?text=${encodeURIComponent(waMessage)}`;

      // Close the modal using Alpine's global store
      window.dispatchEvent(new CustomEvent('close-booking-modal'));

      // Open WhatsApp in new tab
      window.open(whatsappUrl, '_blank');
    });
  });
</script>
@endpush

@push('styles')
<style>
    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: #0A1F44;
        font-weight: 700;
    }
    /* Menyesuaikan style H2 di dalam deskripsi agar terlihat seperti H1 di editor */
    .prose h2 {
        font-size: 1.875rem; /* Ukuran font untuk text-3xl */
        line-height: 2.25rem;
    }
    .prose a {
        color: #ED6D31;
        text-decoration: none;
    }
    .prose a:hover {
        text-decoration: underline;
    }
    .prose table {
        width: 100%;
        border-collapse: collapse;
    }
    .prose th, .prose td {
        border: 1px solid #e2e8f0;
        padding: 8px 12px;
    }
    .prose th {
        background-color: #f7fafc;
        font-weight: 600;
    }
    .prose ul {
        list-style-type: disc;
        padding-left: 1.5rem;
    }
     .prose ol {
        list-style-type: decimal;
        padding-left: 1.5rem;
    }
</style>
@endpush
