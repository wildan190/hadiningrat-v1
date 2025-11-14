<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        try {
            $response = Http::get(env('WP_API_URL') . '/posts', [
                'per_page' => 12,
                '_embed' => 1
            ]);

            if ($response->successful()) {
                $posts = $response->json();
                return view('blog.index', compact('posts'));
            }

            return view('blog.index', ['posts' => [], 'error' => 'Tidak dapat memuat artikel.']);
        } catch (\Exception $e) {
            return view('blog.index', ['posts' => [], 'error' => 'Terjadi kesalahan saat memuat artikel.']);
        }
    }

    public function show($slug)
    {
        try {
            $response = Http::get(env('WP_API_URL') . '/posts', [
                'slug' => $slug,
                '_embed' => 1
            ]);

            if ($response->successful() && !empty($response->json())) {
                $post = $response->json()[0];
                return view('blog.show', compact('post'));
            }

            return redirect()->route('blog.index')->with('error', 'Artikel tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('blog.index')->with('error', 'Terjadi kesalahan saat memuat artikel.');
        }
    }
}