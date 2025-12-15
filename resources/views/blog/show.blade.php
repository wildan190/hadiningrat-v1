@extends('layouts.app')

@inject('rankMath', 'App\Services\RankMathService')

{{-- TITLE --}}
@section('title')
    {{ strip_tags($post['title']['rendered']) }} - Hadiningrat Bor Pile
@endsection

{{-- DESCRIPTION --}}
@section('description')
    {{ strip_tags(substr($post['content']['rendered'], 0, 155)) }}
@endsection

{{-- OG IMAGE --}}
@isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])
@section('og_image', $post['_embedded']['wp:featuredmedia'][0]['source_url'])
@endisset

{{-- RankMath Metadata from dedicated endpoint --}}
@php
    $postUrl = $post['link'] ?? url()->current();
    $rankMathHead = $rankMath->getHead($postUrl);
@endphp

@if($rankMathHead)
    @section('rank_math')
        {!! $rankMathHead !!}
    @endsection
@endif

{{-- SCHEMA ARTICLE (Handled by RankMath) --}}
{{--
@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@@context' => 'https://schema.org',
    '@@type' => 'Article',
    'mainEntityOfPage' => [
        '@@type' => 'WebPage',
        '@id' => url()->current(),
    ],
        "headline" => strip_tags($post['title']['rendered']),
        "description" => strip_tags(substr($post['content']['rendered'], 0, 155)),
        "image" => $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/hbp-logo.png'),
        "author" => [
            '@@type' => 'Organization',
                "name" => "Hadiningrat Bor Pile",
                "url" => config('app.url'),
        ],
        "publisher" => [
            '@@type' => 'Organization',
                "name" => "Hadiningrat Bor Pile",
                "logo" => [
                '@@type' => 'ImageObject',
                        "url" => asset('assets/img/hbp-logo.png'),
                ],
        ],
        "datePublished" => \Carbon\Carbon::parse($post['date_gmt'])->toIso8601String(),
        "dateModified" => \Carbon\Carbon::parse($post['modified_gmt'])->toIso8601String(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
--}}

@section('content')
    <article>

        {{-- HEADER --}}
        <header class="bg-brand-blue text-white pt-32 pb-24">
            <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl md:text-5xl font-bold font-title">
                    {!! $post['title']['rendered'] !!}
                </h1>
            </div>
        </header>

        {{-- ARTICLE WRAPPER --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 lg:p-10 -mt-16 relative z-10">

                {{-- BREADCRUMB --}}
                <div class="mb-6">
                    <x-breadcrumb />
                </div>

                {{-- FEATURED IMAGE --}}
                @if(isset($post['_embedded']['wp:featuredmedia'][0]['source_url']))
                    <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] }}"
                                alt="{{ strip_tags($post['title']['rendered']) }}" loading="lazy"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                @endif

                {{-- CONTENT --}}
                <div class="prose prose-lg max-w-none mb-8">
                    {!! $post['content']['rendered'] !!}
                </div>

                {{-- BACK TO BLOG --}}
                <a href="{{ route('blog.index') }}"
                    class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Blog
                </a>

            </div>
        </div>

    </article>
@endsection