<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        try {
            $response = Http::get(env('WP_API_URL') . '/pages/3', [
                '_embed' => 1,
            ]);

            if ($response->successful()) {
                $page = $response->json();
                return view('privacy-policy', compact('page'));
            } else {
                // Log the error and return a user-friendly message
                Log::error('Failed to fetch privacy policy from WordPress API. Status code: ' . $response->status());
                return view('privacy-policy', ['error' => 'Failed to load Privacy Policy. Please try again later.']);
            }
        } catch (\Exception $e) {
            // Log the exception and return a user-friendly message
            Log::error('Exception occurred while fetching privacy policy: ' . $e->getMessage());
            return view('privacy-policy', ['error' => 'An error occurred while loading Privacy Policy. Please try again later.']);
        }
    }
}