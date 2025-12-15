<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index()
    {
        try {
            // Cache for 60 minutes
            $posts = Cache::remember('wp_posts_index', 3600, function () {
                $response = Http::get(env('WP_API_URL') . '/posts', [
                    'per_page' => 12,
                    '_embed' => 1
                ]);

                if ($response->successful()) {
                    return $response->json();
                }
                throw new \Exception('WP API Error');
            });

            return view('blog.index', compact('posts'));
        } catch (\Exception $e) {
            // Fallback to empty info if cache fails or API error
            $posts = Cache::get('wp_posts_index', []);
            return view('blog.index', ['posts' => $posts, 'error' => empty($posts) ? 'Terjadi kesalahan saat memuat artikel.' : null]);
        }
    }

    public function show($slug)
    {
        try {
            // Cache for 60 minutes
            $post = Cache::remember('wp_post_' . $slug, 3600, function () use ($slug) {
                $response = Http::get(env('WP_API_URL') . '/posts', [
                    'slug' => $slug,
                    '_embed' => 1
                ]);

                if ($response->successful() && !empty($response->json())) {
                    return $response->json()[0];
                }
                return null;
            });

            if ($post) {
                return view('blog.show', compact('post'));
            }

            return redirect()->route('blog.index')->with('error', 'Artikel tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('blog.index')->with('error', 'Terjadi kesalahan saat memuat artikel.');
        }
    }
}