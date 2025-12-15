<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $apiUrl = env('WC_API_URL');

        try {
            // Cache for 60 minutes (3600 seconds)
            $products = Cache::remember('wc_products_all', 3600, function () use ($consumerKey, $consumerSecret, $apiUrl) {
                $response = Http::withBasicAuth($consumerKey, $consumerSecret)
                    ->get($apiUrl, [
                        'per_page' => 100,
                        'status' => 'publish'
                    ]);

                if ($response->successful()) {
                    return $response->json();
                }

                throw new \Exception('WooCommerce API Error: ' . $response->body());
            });

            return view('area-layanan', ['products' => $products]);

        } catch (\Exception $e) {
            Log::error('WooCommerce API Exception: ' . $e->getMessage());
            // Attempt to return cached data even if expired if API fails, or empty array
            $products = Cache::get('wc_products_all', []);

            return view('area-layanan', [
                'products' => $products,
                'error' => empty($products) ? 'Terjadi kesalahan saat memuat produk. Silakan coba lagi nanti.' : null
            ]);
        }
    }



    public function show($slug, \App\Services\RankMathService $rankMathService)
    {
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $apiUrl = env('WC_API_URL');

        try {
            // Cache for 60 minutes
            $product = Cache::remember('wc_product_' . $slug, 3600, function () use ($consumerKey, $consumerSecret, $apiUrl, $slug) {
                $response = Http::withBasicAuth($consumerKey, $consumerSecret)
                    ->get($apiUrl, [
                        'slug' => $slug
                    ]);

                if ($response->successful()) {
                    $products = $response->json();
                    if (empty($products)) {
                        return null;
                    }
                    return $products[0];
                }

                throw new \Exception('WooCommerce API Error: ' . $response->body());
            });

            if (!$product) {
                abort(404, 'Produk tidak ditemukan');
            }

            // Fetch RankMath Head
            $rankMathHead = $rankMathService->getHead($product['permalink'] ?? url()->current());

            return view('produk-detail', [
                'product' => $product,
                'rankMathHead' => $rankMathHead
            ]);

        } catch (\Exception $e) {
            Log::error('WooCommerce API Exception: ' . $e->getMessage());
            abort(500, 'Terjadi kesalahan saat memuat produk');
        }
    }
}
