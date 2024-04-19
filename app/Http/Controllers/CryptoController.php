<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.coincap.io/v2/assets');
        $cryptos = $response->json()['data'];
        return view('homePages.assets', compact('cryptos'));
    }

    public function crypto_details() {
        $id = \request()->id;
        $response = Http::get('https://api.coincap.io/v2/assets/'.$id);
        $crypto = $response->json()['data'];
        return view('homePages.cryptoDetails', compact('crypto'));
    }
}
