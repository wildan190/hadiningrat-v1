@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="bg-brand-blue text-white pt-24 pb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold font-title mb-6">
                Privacy Policy
            </h1>
         </div>
    </div>
</div>

<div class="container mx-auto px-4 -mt-8 relative z-10">
    <x-breadcrumb />
</div>

<div class="bg-gray-50">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="prose prose-lg max-w-none">
                    @if(isset($page['content']['rendered']))
                        {!! $page['content']['rendered'] !!}
                    @else
                        <p>Failed to load Privacy Policy content.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: #0A1F44;
        font-weight: 700;
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
