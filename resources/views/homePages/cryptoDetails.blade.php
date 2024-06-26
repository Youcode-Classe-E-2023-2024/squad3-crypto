@extends('layouts.homeLayout')

@section('title')
    Crypto Details
@endsection

@section('content')
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
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="coin-warpper d-flex align-items-center justify-content-between flex-wrap">
                        <div>
                            <ul class="nav nav-pills">
                                <li class=" nav-item">
                                    <button class="nav-link active bitcoin ms-0" id="nav-bitcoin-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-bitcoin" type="button"><svg width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                        {{ $crypto['symbol'] }}
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="input-group search-area w-auto coin-tab-search mt-xl-0 mt-2">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <span class="input-group-text"><a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="var(--text-dark)" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-bitcoin" role="tabpanel"
                            aria-labelledby="nav-bitcoin-tab">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card coin-content">
                                        <div class="card-header border-0 flex-wrap pb-0">
                                            <div class="mb-xl-0 mb-2">
                                                <h4 class="card-title">Coin Chart</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                            <div class="guest-calendar d-flex align-items-center">
                                                <span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14 2V1C14 0.448 14.448 0 15 0C15.552 0 16 0.448 16 1V2H17C17.796 2 18.559 2.316 19.121 2.879C19.684 3.441 20 4.204 20 5V17C20 17.796 19.684 18.559 19.121 19.121C18.559 19.684 17.796 20 17 20C13.537 20 6.463 20 3 20C2.204 20 1.441 19.684 0.878998 19.121C0.315998 18.559 0 17.796 0 17C0 13.926 0 8.074 0 5C0 4.204 0.315998 3.441 0.878998 2.879C1.441 2.316 2.204 2 3 2H4V1C4 0.448 4.448 0 5 0C5.552 0 6 0.448 6 1V2H14ZM18 8H2V17C2 17.265 2.105 17.52 2.293 17.707C2.48 17.895 2.735 18 3 18H17C17.265 18 17.52 17.895 17.707 17.707C17.895 17.52 18 17.265 18 17V8ZM8 16H15C15.552 16 16 15.552 16 15C16 14.448 15.552 14 15 14H8C7.448 14 7 14.448 7 15C7 15.552 7.448 16 8 16ZM5 12H12C12.552 12 13 11.552 13 11C13 10.448 12.552 10 12 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM17 4H3C2.735 4 2.48 4.105 2.293 4.293C2.105 4.48 2 4.735 2 5V6H18V5C18 4.735 17.895 4.48 17.707 4.293C17.52 4.105 17.265 4 17 4Z"
                                                            fill="var(--text-dark)" />
                                                    </svg>
                                                </span>
                                                <div id="reportrange" class="pull-right reportrange" style="width: 100%">
                                                    <span></span><b class="caret"></b>
                                                    <i class="fas fa-chevron-down ms-sm-3 ms-0"></i>
                                                </div>
                                            </div>
                                            <select class="default-select" aria-label="Default">
                                                <option selected>USD ($ US Dollar)</option>
                                                <option value="1">BTC ($ US Dollar)</option>
                                                <option value="2">USD ($ US Dollar)</option>
                                            </select>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">
                                                <svg class="me-2" width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24 22.5C24 23.3284 23.3284 24 22.5 24H1.5C0.671578 24 0 23.3284 0 22.5C0 21.6716 0.671578 21 1.5 21H22.5C23.3284 21 24 21.6716 24 22.5ZM10.9394 17.7482C11.2323 18.0411 11.6161 18.1875 12 18.1875C12.3838 18.1875 12.7678 18.0411 13.0606 17.7482L18.3752 12.4336C18.961 11.8478 18.961 10.8981 18.3752 10.3123C17.7894 9.72652 16.8397 9.72652 16.2539 10.3123L13.5 13.0662V1.5C13.5 0.671578 12.8284 0 12 0C11.1716 0 10.5 0.671578 10.5 1.5V13.0662L7.74609 10.3123C7.1603 9.72652 6.21056 9.72652 5.62477 10.3123C5.03897 10.8981 5.03897 11.8478 5.62477 12.4336L10.9394 17.7482Z"
                                                        fill="#ffff"></path>
                                                </svg>
                                                Get Report</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="">
                                                    <div class="price-content">
                                                        <span class="d-block mb-2">supply</span>
                                                        <h4 class="fs-20 font-w600 mb-0">{{ $crypto['supply'] }}</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">maxSupply</span>
                                                        <h4 class="font-w600 text-success mb-0">{{ $crypto['maxSupply'] }}<i
                                                                class="fa-solid fa-caret-up ms-1 text-success"></i></h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">vwap24Hr</span>
                                                        <h4 class="font-w600 mb-0">{{ $crypto['vwap24Hr'] }}</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">price USD</span>
                                                        <h4 class="font-w600 mb-0">{{ $crypto['priceUsd'] }}</h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="me-4 font-w600 mb-0"><span
                                                            class="text-success me-2">BUY</span> $5,673</h4>
                                                    <h4 class="font-w600 mb-0"><span class="text-danger me-2">SELL</span>
                                                        $5,982</h4>
                                                </div>
                                            </div>
                                            <div id="bitcoinhChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <div class="card  digital-cash">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">About</h4>
                                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                                <div class="btn sharp tp-btn" data-bs-toggle="dropdown"
                                                    aria-expanded="false" role="button">
                                                    <svg width="25" height="24" viewBox="0 0 25 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                            stroke="var(--text-dark
															)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                            stroke="var(--text-dark
															)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                            stroke="var(--text-dark
															)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body py-0">
                                            <div class="text-center">
                                                <div class="media d-block">
                                                    <img src="assets/images/svg/{{getRandomName($arr)}}.svg" alt="">
                                                    <div class="media-content">
                                                        <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">Digital
                                                            Cash</h4>
                                                        <span class="font-w600 text-dark">{{ $crypto['name'] }}</span>
                                                        <span class="my-4 fs-16 font-w600 d-block">1 {{ $crypto['id'] }} = {{ $crypto['priceUsd'] }}
                                                            USD</span>
                                                        <p class="text-start">{{ $crypto['name'] }} is an open source cryptocurrency. It is
                                                            an altcoin that was forked from the Bitcoin protocol. It is also
                                                            a decentralized autonomous organization (DAO)...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 h-[600px] w-screen" style="border: 1px solid black" >
                                    <!DOCTYPE html>
                                    <html>
                                    <head>
                                        <title>Live Visualization of  Cryptocurrency.</title>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

                                    </head>
                                    <body>
                                    <h1 class="text-xl text-center text-red-500">{{ $crypto['id'] }}</h1>
                                    <canvas id="myChart"></canvas>
                                    <input type="hidden" id="currentAsset" value="{{ $crypto['id'] }}">

                                    <script>
                                        const ctx = document.getElementById('myChart').getContext('2d');
                                        const chart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: [],
                                                datasets: [{
                                                    label: 'Live Price',
                                                    data: [],
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    fill: false
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: 'Real-Time Cryptocurrency Live Prices'
                                                }
                                            }
                                        });

                                        const currentAsset = document.querySelector('#currentAsset');
                                        const tradeWs = new WebSocket(`wss://ws.coincap.io/prices?assets=${currentAsset.value}`);

                                        tradeWs.onmessage = function (msg) {
                                            let data = JSON.parse(msg.data);
                                            chart.data.labels.push(new Date());

                                            if (!chart.data.datasets[0].data) {
                                                chart.data.datasets[0].data = [];
                                            }

                                            chart.data.datasets[0].data.push(data[`${currentAsset.value}`]);

                                            chart.update();
                                        }

                                        tradeWs.onerror = function (error) {
                                            console.log(`WebSocket error: ${error}`);
                                        };


                                    </script>
                                    </body>
                                    </html>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade show " id="nav-etherum" role="tabpanel"
                            aria-labelledby="nav-etherum-tab">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card coin-content">
                                        <div class="card-header border-0 flex-wrap pb-0">
                                            <div class="mb-xl-0 mb-2">
                                                <h4 class="card-title">Coin Chart</h4>
                                                <span class="fs-12">Informations about {{ $crypto['name'] }} coin</span>
                                            </div>
                                            <div class="guest-calendar d-flex align-items-center">
                                                <span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14 2V1C14 0.448 14.448 0 15 0C15.552 0 16 0.448 16 1V2H17C17.796 2 18.559 2.316 19.121 2.879C19.684 3.441 20 4.204 20 5V17C20 17.796 19.684 18.559 19.121 19.121C18.559 19.684 17.796 20 17 20C13.537 20 6.463 20 3 20C2.204 20 1.441 19.684 0.878998 19.121C0.315998 18.559 0 17.796 0 17C0 13.926 0 8.074 0 5C0 4.204 0.315998 3.441 0.878998 2.879C1.441 2.316 2.204 2 3 2H4V1C4 0.448 4.448 0 5 0C5.552 0 6 0.448 6 1V2H14ZM18 8H2V17C2 17.265 2.105 17.52 2.293 17.707C2.48 17.895 2.735 18 3 18H17C17.265 18 17.52 17.895 17.707 17.707C17.895 17.52 18 17.265 18 17V8ZM8 16H15C15.552 16 16 15.552 16 15C16 14.448 15.552 14 15 14H8C7.448 14 7 14.448 7 15C7 15.552 7.448 16 8 16ZM5 12H12C12.552 12 13 11.552 13 11C13 10.448 12.552 10 12 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM17 4H3C2.735 4 2.48 4.105 2.293 4.293C2.105 4.48 2 4.735 2 5V6H18V5C18 4.735 17.895 4.48 17.707 4.293C17.52 4.105 17.265 4 17 4Z"
                                                            fill="var(--text-dark)" />
                                                    </svg>
                                                </span>
                                                <div id="reportrange1" class="pull-right reportrange"
                                                    style="width: 100%">
                                                    <span></span><b class="caret"></b>
                                                    <i class="fas fa-chevron-down ms-sm-3 ms-0"></i>
                                                </div>
                                            </div>
                                            <select class="default-select" aria-label="Default">
                                                <option selected>USD ($ US Dollar)</option>
                                                <option value="1">BTC ($ US Dollar)</option>
                                                <option value="2">USD ($ US Dollar)</option>
                                            </select>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">
                                                <svg class="me-2" width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24 22.5C24 23.3284 23.3284 24 22.5 24H1.5C0.671578 24 0 23.3284 0 22.5C0 21.6716 0.671578 21 1.5 21H22.5C23.3284 21 24 21.6716 24 22.5ZM10.9394 17.7482C11.2323 18.0411 11.6161 18.1875 12 18.1875C12.3838 18.1875 12.7678 18.0411 13.0606 17.7482L18.3752 12.4336C18.961 11.8478 18.961 10.8981 18.3752 10.3123C17.7894 9.72652 16.8397 9.72652 16.2539 10.3123L13.5 13.0662V1.5C13.5 0.671578 12.8284 0 12 0C11.1716 0 10.5 0.671578 10.5 1.5V13.0662L7.74609 10.3123C7.1603 9.72652 6.21056 9.72652 5.62477 10.3123C5.03897 10.8981 5.03897 11.8478 5.62477 12.4336L10.9394 17.7482Z"
                                                        fill="#ffff"></path>
                                                </svg>
                                                Get Report</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                    <div class="price-content">
                                                        <span class="d-block mb-2">Price</span>
                                                        <h4 class="fs-20 font-w600 mb-0">$9,542.39</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">24h% change</span>
                                                        <h4 class="font-w600 text-success mb-0">1.64%<i
                                                                class="fa-solid fa-caret-up ms-1 text-success"></i></h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">Volume (24h)</span>
                                                        <h4 class="font-w600 mb-0">$47.22B</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">priceUsd</span>
                                                        <h4 class="font-w600 mb-0">{{ $crypto['priceUsd'] }}</h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="me-4 font-w600 mb-0"><span
                                                            class="text-success me-2">BUY</span> $5,673</h4>
                                                    <h4 class="font-w600 mb-0"><span class="text-danger me-2">SELL</span>
                                                        $5,982</h4>
                                                </div>
                                            </div>
                                            <div id="ethChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <div class="card  digital-cash">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">About</h4>
                                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                                <div class="btn sharp tp-btn" data-bs-toggle="dropdown"
                                                    aria-expanded="false" role="button">
                                                    <svg width="25" height="24" viewBox="0 0 25 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body py-0">
                                            <div class="text-center">
                                                <div class="media d-block">
                                                    <svg width="80" height="80" viewBox="0 0 126 126"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M64.9961 72.8351C63.7146 73.2618 62.2869 73.2618 61.0053 72.8351L47.2507 68.25L63.0007 94.5L78.7507 68.25L64.9961 72.8351Z"
                                                            fill="#00ADA3"></path>
                                                        <path
                                                            d="M63.0007 63L78.7507 56.7003L63.0007 31.5L47.2507 56.7003L63.0007 63Z"
                                                            fill="#00ADA3"></path>
                                                        <path
                                                            d="M63.0004 0C28.2065 0 0.000366211 28.2061 0.000366211 63C0.000366211 97.7938 28.2065 126 63.0004 126C97.7942 126 126 97.7938 126 63C125.962 28.2226 97.7777 0.0384523 63.0004 0V0ZM89.5256 60.513L67.0255 105.513C65.9145 107.737 63.2105 108.637 60.9885 107.526C60.1164 107.091 59.4106 106.385 58.9752 105.513L36.4751 60.513C35.7761 59.1094 35.8558 57.4436 36.6852 56.1129L59.1853 20.1133C60.6809 18.0067 63.5991 17.5095 65.7058 19.0051C66.1356 19.3099 66.5105 19.6835 66.8154 20.1133L89.3141 56.1129C90.145 57.4436 90.2246 59.1094 89.5256 60.513V60.513Z"
                                                            fill="#00ADA3"></path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">Digital
                                                            Cash</h4>
                                                        <span class="font-w600 text-dark">Bitcoin</span>
                                                        <span class="my-4 fs-16 font-w600 d-block">1 BITCOIN = 43,474.50
                                                            USD</span>
                                                        <p class="text-start">Dash is an open source cryptocurrency. It is
                                                            an altcoin that was forked from the Bitcoin protocol. It is also
                                                            a decentralized autonomous organization (DAO)...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class="text-warning card-title">Buy Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-warning tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 image-select mt-3 mt-sm-0 bit style-1">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin</option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2 ">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-warning">Show more <i
                                                    class="fa fa-caret-right text-warning"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class=" card-title text-danger">Sell Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-danger tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#fd5353" cx="12" cy="5" r="2">
                                                            </circle>
                                                            <circle fill="#fd5353" cx="12" cy="12" r="2">
                                                            </circle>
                                                            <circle fill="#fd5353" cx="12" cy="19" r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void0">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 style-1 image-select mt-3 mt-sm-0 bit">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin</option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-danger">Show more <i
                                                    class="fa fa-caret-right text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show " id="nav-dash" role="tabpanel" aria-labelledby="nav-dash-tab">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card coin-content">
                                        <div class="card-header border-0 flex-wrap pb-0">
                                            <div class="mb-xl-0 mb-2">
                                                <h4 class="card-title">Coin Chart</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                            <div class="guest-calendar d-flex align-items-center">
                                                <span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14 2V1C14 0.448 14.448 0 15 0C15.552 0 16 0.448 16 1V2H17C17.796 2 18.559 2.316 19.121 2.879C19.684 3.441 20 4.204 20 5V17C20 17.796 19.684 18.559 19.121 19.121C18.559 19.684 17.796 20 17 20C13.537 20 6.463 20 3 20C2.204 20 1.441 19.684 0.878998 19.121C0.315998 18.559 0 17.796 0 17C0 13.926 0 8.074 0 5C0 4.204 0.315998 3.441 0.878998 2.879C1.441 2.316 2.204 2 3 2H4V1C4 0.448 4.448 0 5 0C5.552 0 6 0.448 6 1V2H14ZM18 8H2V17C2 17.265 2.105 17.52 2.293 17.707C2.48 17.895 2.735 18 3 18H17C17.265 18 17.52 17.895 17.707 17.707C17.895 17.52 18 17.265 18 17V8ZM8 16H15C15.552 16 16 15.552 16 15C16 14.448 15.552 14 15 14H8C7.448 14 7 14.448 7 15C7 15.552 7.448 16 8 16ZM5 12H12C12.552 12 13 11.552 13 11C13 10.448 12.552 10 12 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM17 4H3C2.735 4 2.48 4.105 2.293 4.293C2.105 4.48 2 4.735 2 5V6H18V5C18 4.735 17.895 4.48 17.707 4.293C17.52 4.105 17.265 4 17 4Z"
                                                            fill="var(--text-dark)" />
                                                    </svg>
                                                </span>
                                                <div id="reportrange3" class="pull-right reportrange"
                                                    style="width: 100%">
                                                    <span></span><b class="caret"></b>
                                                    <i class="fas fa-chevron-down ms-sm-3 ms-0"></i>
                                                </div>
                                            </div>
                                            <select class="default-select" aria-label="Default">
                                                <option selected>USD ($ US Dollar)</option>
                                                <option value="1">BTC ($ US Dollar)</option>
                                                <option value="2">USD ($ US Dollar)</option>
                                            </select>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">
                                                <svg class="me-2" width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24 22.5C24 23.3284 23.3284 24 22.5 24H1.5C0.671578 24 0 23.3284 0 22.5C0 21.6716 0.671578 21 1.5 21H22.5C23.3284 21 24 21.6716 24 22.5ZM10.9394 17.7482C11.2323 18.0411 11.6161 18.1875 12 18.1875C12.3838 18.1875 12.7678 18.0411 13.0606 17.7482L18.3752 12.4336C18.961 11.8478 18.961 10.8981 18.3752 10.3123C17.7894 9.72652 16.8397 9.72652 16.2539 10.3123L13.5 13.0662V1.5C13.5 0.671578 12.8284 0 12 0C11.1716 0 10.5 0.671578 10.5 1.5V13.0662L7.74609 10.3123C7.1603 9.72652 6.21056 9.72652 5.62477 10.3123C5.03897 10.8981 5.03897 11.8478 5.62477 12.4336L10.9394 17.7482Z"
                                                        fill="#ffff"></path>
                                                </svg>
                                                Get Report</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                    <div class="price-content">
                                                        <span class="d-block mb-2">Price</span>
                                                        <h4 class="fs-20 font-w600 mb-0">$9,542.39</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">24h% change</span>
                                                        <h4 class="font-w600 text-success mb-0">1.64%<i
                                                                class="fa-solid fa-caret-up ms-1 text-success"></i></h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">Volume (24h)</span>
                                                        <h4 class="font-w600 mb-0">$47.22B</h4>
                                                    </div>
                                                        <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">priceUsd</span>
                                                        <h4 class="font-w600 mb-0">{{ $crypto['priceUsd'] }}</h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="me-4 font-w600 mb-0"><span
                                                            class="text-success me-2">BUY</span> $5,673</h4>
                                                    <h4 class="font-w600 mb-0"><span class="text-danger me-2">SELL</span>
                                                        $5,982</h4>
                                                </div>
                                            </div>
                                            <div id="dashChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <div class="card  digital-cash">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">About</h4>
                                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                                <div class="btn sharp tp-btn" data-bs-toggle="dropdown"
                                                    aria-expanded="false" role="button">
                                                    <svg width="25" height="24" viewBox="0 0 25 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body py-0">
                                            <div class="text-center">
                                                <div class="media d-block">
                                                    <svg width="80" height="80" viewBox="0 0 126 126"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M63 0C28.2061 0 0 28.2061 0 63C0 97.7938 28.2061 126 63 126C97.7938 126 126 97.7938 126 63C125.962 28.2226 97.7774 0.0384523 63 0ZM36.9843 58.4997H54.9841C57.4697 58.4997 59.4844 60.5143 59.4844 63C59.4844 65.4857 57.4697 67.5003 54.9841 67.5003H36.9843C34.4986 67.5003 32.484 65.4857 32.484 63C32.484 60.5143 34.5 58.4997 36.9843 58.4997ZM93.2524 52.0974L87.8402 79.1761C86.5658 85.4616 81.0465 89.9853 74.6332 90.0004H36.9843C34.4986 90.0004 32.484 87.9858 32.484 85.5001C32.484 83.0144 34.5 80.9998 36.9843 80.9998H74.6332C76.7604 80.9943 78.591 79.4947 79.014 77.41L84.4276 50.3313C84.9082 47.9143 83.3399 45.566 80.9243 45.0853C80.6373 45.029 80.3461 45.0002 80.055 45.0002H45.9848C43.4992 45.0002 41.4846 42.9856 41.4846 40.4999C41.4846 38.0142 43.4992 35.9996 45.9848 35.9996H80.055C87.49 36.0024 93.5147 42.0298 93.5133 49.4648C93.5133 50.3478 93.4254 51.2295 93.2524 52.0974Z"
                                                            fill="#3693FF"></path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">Digital
                                                            Cash</h4>
                                                        <span class="font-w600 text-dark">DASH</span>
                                                        <span class="my-4 fs-16 font-w600 d-block">1 BITCOIN = 43,474.50
                                                            USD</span>
                                                        <p class="text-start">Dash is an open source cryptocurrency. It is
                                                            an altcoin that was forked from the Bitcoin protocol. It is also
                                                            a decentralized autonomous organization (DAO)...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <div class="card quick-trade">
                                        <div class="card-header pb-0 border-0 flex-wrap">
                                            <div>
                                                <h4 class="card-title">Quick Trade</h4>
                                                <p class="mb-xl-0 mb-3 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                            <select
                                                class="form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border">
                                                <option data-thumbnail="images/svg/dash.svg">45,662.05 DASH</option>
                                                <option data-thumbnail="images/svg/btc.svg">345,455 DASH</option>
                                                <option data-thumbnail="images/svg/eth.svg">789,123 DASH</option>
                                            </select>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="basic-form">
                                                <form class="form-wrapper trade-form">
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Amount BTC</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Price BPL</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Fee (1%)</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Total BPL</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="row">
                                                <div class="col-6 px-sm-3 px-2">
                                                    <a href="javascript:void(0);"
                                                        class="btn d-flex  btn-success justify-content-between align-items-center w-100">
                                                        BUY
                                                        <svg width="16" height="16" viewBox="0 0 21 21"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z"
                                                                fill="white" stroke="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col-6 px-sm-3 px-2">
                                                    <a href="javascript:void(0);"
                                                        class="btn d-flex  btn-danger align-items-center justify-content-between w-100">
                                                        SELL
                                                        <svg class="scale3" width="16" height="16"
                                                            viewBox="0 0 29 29" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                                                fill="white" stroke="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3 align-items-center">
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox3"
                                                        required>
                                                    <label class="form-check-label fs-14 font-w400 mt-1"
                                                        for="customCheckBox3">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut</label>
                                                </div>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class="text-warning card-title">Buy Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-warning tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 image-select mt-3 mt-sm-0 bit style-1">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin</option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2 ">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-warning">Show more <i
                                                    class="fa fa-caret-right text-warning"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class=" card-title text-danger">Sell Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-danger tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#fd5353" cx="12" cy="5" r="2">
                                                            </circle>
                                                            <circle fill="#fd5353" cx="12" cy="12" r="2">
                                                            </circle>
                                                            <circle fill="#fd5353" cx="12" cy="19" r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void0">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 style-1 image-select mt-3 mt-sm-0 bit">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin</option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-danger">Show more <i
                                                    class="fa fa-caret-right text-danger"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show " id="nav-litcoin" role="tabpanel"
                            aria-labelledby="nav-litcoin-tab">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card coin-content">
                                        <div class="card-header border-0 flex-wrap pb-0">
                                            <div class="mb-xl-0 mb-2">
                                                <h4 class="card-title">Coin Chart</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                            <div class="guest-calendar d-flex align-items-center">
                                                <span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14 2V1C14 0.448 14.448 0 15 0C15.552 0 16 0.448 16 1V2H17C17.796 2 18.559 2.316 19.121 2.879C19.684 3.441 20 4.204 20 5V17C20 17.796 19.684 18.559 19.121 19.121C18.559 19.684 17.796 20 17 20C13.537 20 6.463 20 3 20C2.204 20 1.441 19.684 0.878998 19.121C0.315998 18.559 0 17.796 0 17C0 13.926 0 8.074 0 5C0 4.204 0.315998 3.441 0.878998 2.879C1.441 2.316 2.204 2 3 2H4V1C4 0.448 4.448 0 5 0C5.552 0 6 0.448 6 1V2H14ZM18 8H2V17C2 17.265 2.105 17.52 2.293 17.707C2.48 17.895 2.735 18 3 18H17C17.265 18 17.52 17.895 17.707 17.707C17.895 17.52 18 17.265 18 17V8ZM8 16H15C15.552 16 16 15.552 16 15C16 14.448 15.552 14 15 14H8C7.448 14 7 14.448 7 15C7 15.552 7.448 16 8 16ZM5 12H12C12.552 12 13 11.552 13 11C13 10.448 12.552 10 12 10H5C4.448 10 4 10.448 4 11C4 11.552 4.448 12 5 12ZM17 4H3C2.735 4 2.48 4.105 2.293 4.293C2.105 4.48 2 4.735 2 5V6H18V5C18 4.735 17.895 4.48 17.707 4.293C17.52 4.105 17.265 4 17 4Z"
                                                            fill="var(--text-dark)" />
                                                    </svg>
                                                </span>
                                                <div id="reportrange4" class="pull-right reportrange"
                                                    style="width: 100%">
                                                    <span></span><b class="caret"></b>
                                                    <i class="fas fa-chevron-down ms-sm-3 ms-0"></i>
                                                </div>
                                            </div>
                                            <select class="default-select" aria-label="Default">
                                                <option selected>USD ($ US Dollar)</option>
                                                <option value="1">BTC ($ US Dollar)</option>
                                                <option value="2">USD ($ US Dollar)</option>
                                            </select>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">
                                                <svg class="me-2" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24 22.5C24 23.3284 23.3284 24 22.5 24H1.5C0.671578 24 0 23.3284 0 22.5C0 21.6716 0.671578 21 1.5 21H22.5C23.3284 21 24 21.6716 24 22.5ZM10.9394 17.7482C11.2323 18.0411 11.6161 18.1875 12 18.1875C12.3838 18.1875 12.7678 18.0411 13.0606 17.7482L18.3752 12.4336C18.961 11.8478 18.961 10.8981 18.3752 10.3123C17.7894 9.72652 16.8397 9.72652 16.2539 10.3123L13.5 13.0662V1.5C13.5 0.671578 12.8284 0 12 0C11.1716 0 10.5 0.671578 10.5 1.5V13.0662L7.74609 10.3123C7.1603 9.72652 6.21056 9.72652 5.62477 10.3123C5.03897 10.8981 5.03897 11.8478 5.62477 12.4336L10.9394 17.7482Z"
                                                        fill="#ffff"></path>
                                                </svg>
                                                Get Report</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                    <div class="price-content">
                                                        <span class="d-block mb-2">Price</span>
                                                        <h4 class="fs-20 font-w600 mb-0">$9,542.39</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">24h% change</span>
                                                        <h4 class="font-w600 text-success mb-0">1.64%<i
                                                                class="fa-solid fa-caret-up ms-1 text-success"></i></h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">Volume (24h)</span>
                                                        <h4 class="font-w600 mb-0">$47.22B</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <span class="fs-14 d-block mb-2">Market Cap</span>
                                                        <h4 class="font-w600 mb-0">$219.24B</h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="me-4 font-w600 mb-0"><span
                                                            class="text-success me-2">BUY</span> $5,673</h4>
                                                    <h4 class="font-w600 mb-0"><span
                                                            class="text-danger me-2">SELL</span> $5,982</h4>
                                                </div>
                                            </div>
                                            <div id="litcoinChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <div class="card  digital-cash">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">About</h4>
                                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                                <div class="btn sharp tp-btn" data-bs-toggle="dropdown"
                                                    aria-expanded="false" role="button">
                                                    <svg width="25" height="24" viewBox="0 0 25 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0335 13C12.5854 13 13.0328 12.5523 13.0328 12C13.0328 11.4477 12.5854 11 12.0335 11C11.4816 11 11.0342 11.4477 11.0342 12C11.0342 12.5523 11.4816 13 12.0335 13Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                            stroke="var(--text-dark)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body py-0">
                                            <div class="text-center">
                                                <div class="media d-block">
                                                    <svg width="80" height="80" viewBox="0 0 126 126"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M63 0C28.2061 0 0 28.2061 0 63C0 97.7938 28.2061 126 63 126C97.7938 126 126 97.7938 126 63C125.96 28.2226 97.7774 0.0398255 63 0V0ZM85.5001 94.5007H49.5005C47.0148 94.5007 45.0002 92.4861 45.0002 90.0004C45.0002 89.7875 45.0153 89.5747 45.0455 89.3632L48.4321 65.6532L41.5917 67.3643C41.2346 67.455 40.8679 67.5003 40.4999 67.5003C38.0142 67.4975 36.0024 65.4815 36.0037 62.9959C36.0065 60.9332 37.41 59.1369 39.4109 58.6343L49.8054 56.036L54.0447 26.3618C54.3963 23.9009 56.676 22.1925 59.1369 22.544C61.5979 22.8956 63.3062 25.1753 62.9547 27.6362L59.233 53.6794L75.4091 49.6351C77.8165 49.0212 80.2651 50.4755 80.8776 52.8829C81.4914 55.2903 80.0371 57.7389 77.6297 58.3528C77.616 58.3555 77.6023 58.3596 77.5885 58.3624L57.857 63.2953L54.6861 85.5001H85.5001C87.9858 85.5001 90.0004 87.5147 90.0004 90.0004C90.0004 92.4847 87.9858 94.5007 85.5001 94.5007Z"
                                                            fill="#374C98"></path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">Digital
                                                            Cash</h4>
                                                        <span class="font-w600 text-dark">LITCOIN</span>
                                                        <span class="my-4 fs-16 font-w600 d-block">1 LITCOIN = 43,474.50
                                                            USD</span>
                                                        <p class="text-start">Dash is an open source cryptocurrency. It is
                                                            an altcoin that was forked from the LITCOIN protocol. It is also
                                                            a decentralized autonomous organization (DAO)...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <div class="card quick-trade">
                                        <div class="card-header pb-0 border-0 flex-wrap">
                                            <div>
                                                <h4 class="card-title">Quick Trade</h4>
                                                <p class="mb-xl-0 mb-3 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                            <select
                                                class="form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border">
                                                <option data-thumbnail="images/svg/dash.svg">45,662.05 DASH</option>
                                                <option data-thumbnail="images/svg/btc.svg">345,455 DASH</option>
                                                <option data-thumbnail="images/svg/eth.svg">789,123 DASH</option>
                                            </select>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="basic-form">
                                                <form class="form-wrapper trade-form">
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Amount BTC</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Price BPL</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Fee (1%)</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                    <div class="input-group mb-3 ">
                                                        <span class="input-group-text">Total BPL</span>
                                                        <input class="form-control form-control text-end" type="text"
                                                            placeholder="0,000000">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="row">
                                                <div class="col-6 px-sm-3 px-2 px-sm-3 px-0">
                                                    <a href="javascript:void(0);"
                                                        class="btn d-flex  btn-success justify-content-between align-items-center w-100">
                                                        BUY
                                                        <svg width="16" height="16" viewBox="0 0 21 21"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z"
                                                                fill="white" stroke="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col-6 px-sm-3 px-2  px-sm-3 px-0">
                                                    <a href="javascript:void(0);"
                                                        class="btn d-flex  btn-danger align-items-center justify-content-between w-100">
                                                        SELL
                                                        <svg class="scale3" width="16" height="16"
                                                            viewBox="0 0 29 29" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                                                fill="white" stroke="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3 align-items-center">
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheckBox4" required>
                                                    <label class="form-check-label fs-14 font-w400 mt-1"
                                                        for="customCheckBox4">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut</label>
                                                </div>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class="text-warning card-title">Buy Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-warning tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19"
                                                                r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 image-select mt-3 mt-sm-0 bit style-1">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin
                                                </option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2 ">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-warning">Show more <i
                                                    class="fa fa-caret-right text-warning"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-">
                                    <div class="card price-list">
                                        <div class="card-header border-0 p-3">
                                            <div>
                                                <h4 class=" card-title text-danger">Sell Order</h4>
                                            </div>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp btn-danger tp-btn" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="24" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#fd5353" cx="12" cy="5"
                                                                r="2"></circle>
                                                            <circle fill="#fd5353" cx="12" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#fd5353" cx="12" cy="19"
                                                                r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void0">Option 1</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 2</a>
                                                    <a class="dropdown-item" href="javascript:void0">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 py-0">
                                            <select
                                                class="form-control custom-image-select-2 style-1 image-select mt-3 mt-sm-0 bit">
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Bitcoin">Bitcoin
                                                </option>
                                                <option data-thumbnail="images/svg/dash.svg"
                                                    data-content="<img src='images/svg/dash.svg'/> Dash Coin">Dash Coin
                                                </option>
                                                <option data-thumbnail="images/svg/btc.svg"
                                                    data-content="<img src='images/svg/btc.svg'/> Ripple">Ripple</option>
                                                <option data-thumbnail="images/svg/eth.svg"
                                                    data-content="<img src='images/svg/eth.svg'/> Ethereum">Ethereum
                                                </option>

                                            </select>
                                            <div class="table-responsive">
                                                <table
                                                    class="table text-center bg-warning-hover tr-rounded order-tbl mt-2">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-start">Price</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-end">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-start">82.3</td>
                                                            <td>0.15</td>
                                                            <td class="text-end">$134,12</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">83.9</td>
                                                            <td>0.18</td>
                                                            <td class="text-end">$237,31</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">84.2</td>
                                                            <td>0.25</td>
                                                            <td class="text-end">$252,58</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">86.2</td>
                                                            <td>0.35</td>
                                                            <td class="text-end">$126,26</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">91.6</td>
                                                            <td>0.75</td>
                                                            <td class="text-end">$46,92</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-start">92.6</td>
                                                            <td>0.21</td>
                                                            <td class="text-end">$123,27</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center py-3 border-0">
                                            <a href="coin-details.html" class="btn-link text-danger">Show more <i
                                                    class="fa fa-caret-right text-danger"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
