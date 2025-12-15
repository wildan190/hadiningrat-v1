<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class RankMathService
{
    /**
     * Fetch the head content from RankMath endpoint.
     *
     * @param string $url
     * @return string
     */
    public function getHead(string $url): string
    {
        $cacheKey = 'rankmath_head_' . md5($url);

        return Cache::remember($cacheKey, 3600, function () use ($url) {
            try {
                $response = Http::get('https://hadiningratcorp.com/wp-json/rankmath/v1/getHead', [
                    'url' => $url,
                ]);

                if ($response->successful()) {
                    $data = $response->json();
                    return $data['head'] ?? '';
                }

                Log::warning("RankMath API failed for URL: {$url}", [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return '';
            } catch (\Exception $e) {
                Log::error("RankMath Service Error: " . $e->getMessage());
                return '';
            }
        });
    }
}
