@php
    $metaTitle = trim($__env->yieldContent('title')) ?: 'Jasa Bore Pile & Straus Pile Profesional | Hadiningrat Bor Pile';
    $metaDescription = trim($__env->yieldContent('description')) ?: 'Kami adalah spesialis jasa bore pile dan straus pile yang berpengalaman dan terpercaya di Jawa Tengah dan sekitarnya.';
    $metaImage = trim($__env->yieldContent('og_image')) ?: 'https://hadiningratcorp.com/assets/img/hbp-logo.png';
@endphp

{{-- Meta Tags for Social Media --}}
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:image" content="{{ $metaImage }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Hadiningrat Bor Pile">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $metaImage }}">

@push('schema')
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "url": "https://hadiningratcorp.com",
      "name": "Hadiningrat Bor Pile",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://hadiningratcorp.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "LocalBusiness",
      "name": "Hadiningrat Bor Pile",
      "url": "https://hadiningratcorp.com",
      "logo": "https://hadiningratcorp.com/assets/img/hbp-logo.png",
      "email": "info@hadiningratcorp.com",
      "telephone": "+6281325794818",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Manggihan, RT.02/RW.03, Sambung, Kec. Godong",
        "addressLocality": "Kabupaten Grobogan",
        "addressRegion": "Jawa Tengah",
        "postalCode": "58162",
        "addressCountry": "ID"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+6281325794818",
        "contactType": "customer service"
      }
    }
  ]
}
@endverbatim
</script>
@endpush
