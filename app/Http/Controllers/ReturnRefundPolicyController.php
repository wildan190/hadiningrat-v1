<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReturnRefundPolicyController extends Controller
{
    public function index()
    {
        $response = Http::get('https://hadiningratcorp.com/wp-json/wp/v2/pages/3');
        $page = $response->json();

        return view('return-refund-policy', ['page' => $page]);
    }
}
