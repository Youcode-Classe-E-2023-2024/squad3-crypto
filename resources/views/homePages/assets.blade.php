@extends('layouts.homeLayout')

@section('title')
    Crypto
@endsection

@section('content')
    <div style="display: flex; justify-items: center; align-items: center">
        <div class="input-group search-area">
            <input id="search-bar" type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text">
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <!-- SVG icon code -->
                </svg>
            </a>
        </span>
        </div>
        <select id="filter-select">
            <option value="name">Filter by Name</option>
            <option value="price">Filter by USD Price</option>
        </select>
    </div>


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
                            <div class="cardContainer col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="card pull-up">
                                    <div class="card-body align-items-center flex-wrap">
                                        <div class="d-flex align-items-center mb-4">
                                            <a href="/cryptoDetails" class="ico-icon">
                                                <img src="assets/images/svg/{{getRandomName($arr)}}.svg" alt="">
                                            </a>
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


    <script>
        const searchBar = document.getElementById('search-bar');
        const filterSelect = document.getElementById('filter-select');
        const cards = document.querySelectorAll('.card.pull-up');

        searchBar.addEventListener('input', function() {
            const searchQuery = searchBar.value.toLowerCase();
            const filterOption = filterSelect.value;

            cards.forEach(card => {
                let cryptoInfo;
                if (filterOption === 'name') {
                    cryptoInfo = card.querySelector('.card-title').textContent.toLowerCase();
                } else if (filterOption === 'price') {
                    cryptoInfo = card.querySelector('.fs-14.text-dark.font-w600').textContent.toLowerCase();
                }

                if (cryptoInfo.includes(searchQuery) || searchQuery === '') {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

    </script>
@endsection
