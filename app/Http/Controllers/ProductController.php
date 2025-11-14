<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $apiUrl = env('WC_API_URL');

        try {
            $response = Http::withBasicAuth($consumerKey, $consumerSecret)
                ->get($apiUrl, [
                    'per_page' => 100,
                    'status' => 'publish'
                ]);

            if ($response->successful()) {
                $products = $response->json();
                return view('area-layanan', ['products' => $products]);
            } else {
                Log::error('WooCommerce API Error: ' . $response->body());
                return view('area-layanan', [
                    'products' => [],
                    'error' => 'Tidak dapat memuat produk saat ini. Silakan coba lagi nanti.'
                ]);
            }
        } catch (\Exception $e) {
            Log::error('WooCommerce API Exception: ' . $e->getMessage());
            return view('area-layanan', [
                'products' => [],
                'error' => 'Terjadi kesalahan saat memuat produk. Silakan coba lagi nanti.'
            ]);
        }


        /* KODE ASLI YANG MENGHUBUNGI WOOCOMMERCE - SEMENTARA DINONAKTIFKAN
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $url = env('WC_API_URL');

        $response = Http::withOptions(['verify' => false])->get($url, [
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
            'per_page' => 20
        ]);

        if ($response->failed()) {
            return view('area-layanan', ['error' => 'Tidak dapat mengambil data produk.']);
        }

        $products = $response->json();

        return view('area-layanan', ['products' => $products]);
        */
    }

    public function show($slug)
    {
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $apiUrl = env('WC_API_URL');

        try {
            $response = Http::withBasicAuth($consumerKey, $consumerSecret)
                ->get($apiUrl, [
                    'slug' => $slug
                ]);

            if ($response->successful()) {
                $products = $response->json();
                
                if (empty($products)) {
                    abort(404, 'Produk tidak ditemukan');
                }

                // WooCommerce returns an array, but we need the first product with matching slug
                $product = $products[0];
                return view('produk-detail', ['product' => $product]);
            } else {
                Log::error('WooCommerce API Error: ' . $response->body());
                abort(404, 'Produk tidak ditemukan');
            }
        } catch (\Exception $e) {
            Log::error('WooCommerce API Exception: ' . $e->getMessage());
            abort(500, 'Terjadi kesalahan saat memuat produk');
        }

        /* KODE ASLI - SEMENTARA DINONAKTIFKAN
        $consumerKey = env('WC_CONSUMER_KEY');
        $consumerSecret = env('WC_CONSUMER_SECRET');
        $url = env('WC_API_URL');

        $response = Http::withOptions(['verify' => false])->get($url, [
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
            'slug' => $slug
        ]);

        if ($response->failed() || empty($response->json())) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $product = $response->json()[0];

        return view('produk-detail', ['product' => $product]);
        */
    }
}
