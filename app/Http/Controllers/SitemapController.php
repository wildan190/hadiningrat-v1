<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function generate()
    {
        $urls = [];

        // Static pages
        $staticRoutes = [
            'home',
            'about',
            'bore-pile-hydraulic',
            'bore-pile-manual',
            'bore-pile-mini-crane',
            'contact',
            'products.index',
            'blog.index',
        ];

        foreach ($staticRoutes as $routeName) {
            $urls[] = route($routeName);
        }

        // Products from WooCommerce
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $apiUrl = env('WC_API_URL');

        try {
            $response = Http::withBasicAuth($consumerKey, $consumerSecret)
                ->get($apiUrl, ['per_page' => 100, 'status' => 'publish']);

            if ($response->successful()) {
                $products = $response->json();
                foreach ($products as $product) {
                    $urls[] = route('products.show', ['slug' => $product['slug']]);
                }
            }
        } catch (\Exception $e) {
            // Log error but continue generating sitemap
        }

        // Posts from WordPress
        $wpApiUrl = env('WP_API_URL') . '/posts';
        try {
            $response = Http::get($wpApiUrl, ['per_page' => 100, '_embed' => 1]);
            if ($response->successful()) {
                $posts = $response->json();
                foreach ($posts as $post) {
                    $urls[] = route('blog.show', ['slug' => $post['slug']]);
                }
            }
        } catch (\Exception $e) {
            // Log error but continue generating sitemap
        }

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . htmlspecialchars($url) . '</loc>';
            $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>daily</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return Response::make($sitemap, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
