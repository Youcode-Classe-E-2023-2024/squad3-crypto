@extends('layouts.homeLayout')

@section('title')
    Crypto
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <!-- Row -->
                    <section class="row">
                        @php
                            $arr = [
                                'bitcoin-1',
                                'btc',
                                'btc1',
                                'check',
                                'dash',
                                'dash-pink',
                                'eth',
                                'eth2',
                                'ethereum-1' ,
                                'lit3',
                                'litecoin-1',
                                'ltc',
                                'monero',
                                'ripple-1',
                            ];
                            function getRandomName($arr) {
                                $randomIndex = array_rand($arr);
                                return $arr[$randomIndex];
                            }
                        @endphp
                        @foreach($cryptos as $crypto)
                            <!-- column -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="card pull-up">
                                    <div class="card-body align-items-center flex-wrap">
                                        <div class="d-flex align-items-center mb-4">
                                            <a href="/cryptoDetails" class="ico-icon">
                                                <img src="assets/images/svg/{{getRandomName($arr)}}.svg" alt="">
                                            </a>
{{--                                            <div style="height: 30px; width: 30px; background-color:yellow; border-radius: 9999px; font-weight: bold; font-size: 16px; color: white; display: flex; justify-content: center; align-items: center">{{ substr($crypto['name'], 0, 1) }}</div>--}}
                                            <form method="POST" action="{{ route('crypto_details') }}" class="ms-3">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $crypto['id'] }}">
                                                <button type="submit" style="border: none; background: transparent">
                                                    <h4 class="card-title mb-0">{{ $crypto['name'] }}</h4>
                                                </button>
                                                <span>Finance</span>
                                            </form>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fs-14 text-dark font-w600">{{ substr($crypto['priceUsd'], 0, 10) }}</p>
                                                <span class="fs-12">priceUsd</span>
                                            </div>
                                            <div>
                                                <p class="mb-0 fs-14 text-success font-w600">{{ substr($crypto['changePercent24Hr'], 0, 10) }}</p>
                                                <span class="fs-12">changePercent24Hr</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /column -->
                        @endforeach



                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
