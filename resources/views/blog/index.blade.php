@extends('layouts.app')

@inject('rankMath', 'App\Services\RankMathService')

@section('title', 'Blog - Hadiwijaya Bore Pile')

{{-- RankMath Metadata --}}
@php
    $rankMathHead = $rankMath->getHead(url()->current());
@endphp

@if($rankMathHead)
    @section('rank_math')
        {!! $rankMathHead !!}
    @endsection
@endif

@section('content')
    <div>
        {{-- Page Header --}}
        <section class="bg-brand-blue text-white pt-32 pb-16">
            <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <x-breadcrumb />
                </div>
                <h1 class="text-4xl md:text-5xl font-bold font-title">Blog</h1>
                <p class="mt-4 text-lg text-gray-200">Berita dan Informasi Terkini</p>
            </div>
        </section>

        {{-- Blog Posts Grid --}}
        <section class="bg-gray-50 py-12 sm:py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @if(isset($error))
                    <div class="text-center py-12">
                        <p class="text-gray-600">{{ $error }}</p>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                        @foreach($posts as $post)
                            <article
                                class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:-translate-y-1">
                                <a href="{{ route('blog.show', ['slug' => $post['slug']]) }}" class="block">
                                    @if(isset($post['_embedded']['wp:featuredmedia'][0]['source_url']))
                                        <div class="aspect-w-16 aspect-h-9">
                                            <img src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] }}"
                                                alt="{{ $post['title']['rendered'] }}" class="w-full h-full object-cover">
                                        </div>
                                    @endif
                                    <div class="p-6">
                                        <h2 class="text-xl font-bold text-brand-blue mb-3 line-clamp-2">
                                            {!! $post['title']['rendered'] !!}
                                        </h2>
                                        <div class="text-gray-600 line-clamp-3 mb-4">
                                            {!! strip_tags($post['excerpt']['rendered']) !!}
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ \Carbon\Carbon::parse($post['date'])->locale('id')->isoFormat('DD MMMM YYYY') }}
                                        </div>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    </div>
@endsection