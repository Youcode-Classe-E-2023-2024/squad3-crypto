<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarketController extends Controller
{
    function index()
    {
        $response = Http::get('https://api.coincap.io/v2/assets');
        $cryptos = $response->json()['data'];

        $markets = Http::get('api.coincap.io/v2/markets')->json();
        $marketsCollection = collect($markets['data']);
        $marketsData = $markets['data'];
        return view('homePages.market', compact('marketsData','cryptos'));
    }
}
