<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @hasSection('rank_math')
        @yield('rank_math')
    @else
        {{-- Dynamic Title --}}
        <title>@yield('title', 'Hadiwijaya Bore Pile')</title>

        {{-- Dynamic Description --}}
        <meta name="description"
            content="@yield('description', 'Kami adalah spesialis jasa bore pile dan straus pile yang berpengalaman dan terpercaya di Jawa Tengah dan sekitarnya. Hubungi kami untuk solusi pondasi Anda.')">

        {{-- Canonical --}}
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- SEO & Schema (OpenGraph + Twitter + JSON-LD) --}}
        @include('partials._schema')
    @endif

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Vite (Tailwind, Alpine, JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('schema')

    {{-- Additional Page Styles --}}
    @stack('styles')

    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Floating WhatsApp Button Styles */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s ease-in-out;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* Responsive images & embeds in .prose */
        .prose img,
        .prose iframe,
        .prose table,
        .prose video {
            max-width: 100%;
            width: 100%;
            height: auto;
            display: block;
        }

        @media (max-width: 640px) {

            .prose img,
            .prose figure img {
                max-width: 100%;
                width: auto;
                max-height: 40vh;
                height: auto;
                object-fit: contain;
            }
        }

        .prose {
            overflow-wrap: break-word;
            word-break: break-word;
            hyphens: auto;
        }

        /* Hide scrollbars but allow programmatic scrolling */
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-white text-brand-blue overflow-x-hidden">

    {{-- Header Component --}}
    <x-header />

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Component --}}
    <x-footer />

    {{-- Floating WhatsApp Button --}}
    <a href="https://wa.me/6281325794818" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    {{-- Extra Page Scripts --}}
    @stack('scripts')

</body>

</html>