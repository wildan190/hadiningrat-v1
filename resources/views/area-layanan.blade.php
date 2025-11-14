@extends('layouts.app')

@section('title', 'Area Layanan - Produk Kami')

@section('content')

    {{-- Page Header --}}
    <section class="bg-brand-blue text-white pt-32 pb-16">
        <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <x-breadcrumb />
            </div>
            <h1 class="text-4xl md:text-5xl font-bold font-title">Area Layanan Pondasi Bore Pile</h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Jelajahi layanan dan produk yang kami tawarkan.</p>
        </div>
    </section>

    {{-- Product Grid --}}
    <section class="bg-gray-100">
        <div class="container mx-auto py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            @if (isset($error))
                <div class="text-center text-red-500">
                    <p>{{ $error }}</p>
                </div>
            @elseif(empty($products))
                <div class="text-center text-gray-500">
                    <p>Tidak ada produk yang tersedia saat ini.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach ($products as $product)
                        <div
                            class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                            <a href="{{ route('products.show', ['slug' => $product['slug']]) }}">
                                <div class="relative" style="padding-bottom: 100%;">
                                    @if (!empty($product['images']))
                                        <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['name'] }}"
                                            class="absolute inset-0 w-full h-full object-contain">
                                    @else
                                        <div
                                            class="absolute inset-0 w-full h-full bg-gray-200 flex items-center justify-center">
                                            <span class="text-gray-500">Gambar tidak tersedia</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold font-title text-brand-blue">{{ $product['name'] }}</h3>
                                    <div class="mt-4 text-lg font-bold text-primary">
                                        {!! $product['price_html'] !!}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

@endsection
