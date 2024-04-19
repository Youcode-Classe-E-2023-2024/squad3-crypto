<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class ExchangeController extends Controller
{
    function index()
    {
        $exchanges = Http::get('https://api.coincap.io/v2/exchanges')->json();
        $exchangesCollection = collect($exchanges['data']);
        $exchangesData = $exchanges['data'];
        return view('homePages.exchanges', compact('exchangesData'));
    }

    function show($slug) {
        $exchangeData = Http::get("https://api.coincap.io/v2/exchanges/$slug")->json();
        $exchange = $exchangeData['data'];
        return view('homePages.exchangeDetails', compact('exchange'));
    }


}
