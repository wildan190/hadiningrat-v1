<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }

    public function borePileHydraulic()
    {
        return view('bore-pile-hydraulic');
    }

    public function borePileManual()
    {
        return view('bore-pile-manual');
    }

    public function borePileMiniCrane()
    {
        return view('bore-pile-mini-crane');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
}
