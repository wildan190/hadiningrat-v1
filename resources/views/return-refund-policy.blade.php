@extends('layouts.app')

@section('title', 'Return & Refund Policy')

@section('content')
<!-- Hero Section -->
<section class="bg-brand-blue text-white pt-32 pb-16">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <x-breadcrumb />
        </div>
        <h1 class="text-4xl md:text-5xl font-bold font-title">Return & Refund Policy</h1>
        <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Kebijakan Pengembalian dan Pengembalian Dana</p>
    </div>
</section>

<div class="bg-gray-50">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="prose max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            {!! $page['content']['rendered'] !!}
        </div>
    </div>
</div>
@endsection
