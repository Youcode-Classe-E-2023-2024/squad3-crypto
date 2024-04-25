@extends('layouts.homeLayout')

@section('title')
    Exchanges Details
@endsection

@section('content')
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
                                    <button class="nav-link active bitcoin ms-0" id="nav-bitcoin-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#nav-bitcoin" type="button">
                                        <svg width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 9.50011C15.9993 8.67201 15.328 8.00092 14.5001 8H10V11H14.5001C15.328 10.9993 15.9993 10.328 16 9.50011Z"
                                                fill="#FFAB2D"/>
                                            <path
                                                d="M10 16H14.5001C15.3285 16 16 15.3285 16 14.5001C16 13.6715 15.3285 13 14.5001 13H10V16Z"
                                                fill="#FFAB2D"/>
                                            <path
                                                d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z"
                                                fill="#FFAB2D"/>
                                        </svg>
                                        Bitcoin
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link etherum" id="nav-etherum-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-etherum" type="button">
                                        <svg width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.3801 13.8734C12.136 13.9546 11.864 13.9546 11.6199 13.8734L9 13L12 18L15 13L12.3801 13.8734Z"
                                                fill="#00ADA3"/>
                                            <path d="M12 12L15 10.8001L12 6L9 10.8001L12 12Z" fill="#00ADA3"/>
                                            <path
                                                d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z"
                                                fill="#00ADA3"/>
                                        </svg>
                                        Ethereum
                                    </button>

                                </li>
                                <li class="nav-item">
                                    <button class="nav-link dash" id="nav-dash-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-dash" type="button">
                                        <svg width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0V0ZM7.04462 11.1428H10.4732C10.9466 11.1428 11.3304 11.5265 11.3304 12C11.3304 12.4735 10.9466 12.8572 10.4732 12.8572H7.04462C6.57116 12.8572 6.18742 12.4735 6.18742 12C6.18742 11.5265 6.57142 11.1428 7.04462 11.1428ZM17.7624 9.92331L16.7315 15.0812C16.4887 16.2784 15.4374 17.1401 14.2158 17.1429H7.04462C6.57116 17.1429 6.18742 16.7592 6.18742 16.2857C6.18742 15.8123 6.57142 15.4285 7.04462 15.4285H14.2158C14.621 15.4275 14.9697 15.1418 15.0503 14.7448L16.0814 9.58692C16.173 9.12654 15.8743 8.67924 15.4141 8.58768C15.3595 8.57696 15.304 8.57147 15.2486 8.57147H8.75902C8.28556 8.57147 7.90182 8.18773 7.90182 7.71427C7.90182 7.24081 8.28556 6.85707 8.75902 6.85707H15.2486C16.6648 6.85759 17.8123 8.00567 17.8121 9.42186C17.8121 9.59006 17.7953 9.75799 17.7624 9.92331V9.92331Z"
                                                fill="#3693FF"/>
                                        </svg>
                                        Dash
                                    </button>

                                </li>
                                <li class="nav-item">
                                    <button class="nav-link litcoin" id="nav-litcoin-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-litcoin" type="button">
                                        <svg width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z"
                                                fill="#374C98"/>
                                        </svg>
                                        Litecoin
                                    </button>

                                </li>
                                <li class="nav-ite">
                                    <button type="button" class="nav-link litcoin mt-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z"
                                                fill="var(--text-dark)"/>
                                            <path
                                                d="M4 14C5.10456 14 5.99999 13.1046 5.99999 12C5.99999 10.8954 5.10456 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                                                fill="var(--text-dark)"/>
                                            <path
                                                d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                                                fill="var(--text-dark)"/>
                                        </svg>
                                        More Crypto
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
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3"/>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="var(--text-dark)" fill-rule="nonzero"/>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        const exchangeSlug = localStorage.getItem('slug');

        if (exchangeSlug) {

            $.get(`/exchange/${exchangeSlug}`, (data) => {
                console.log(data);
                let volume = data.volumeUsd.substring(0, 15);
                let total = data.percentTotalVolume.substring(0,5);
                let html = `<div class="row">
                    <div class="col-xl-9">
                        <div class="card coin-content">
                            <div class="card-header border-0 flex-wrap pb-0">
                                <div class="mb-xl-0 mb-2">
                                    <h4 class="card-title">Exchange Detail</h4>
                                    <span class="fs-12">${data.exchangeId}</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div class="price-content">
                                            <span class="d-block mb-2">Rank</span>
                                            <h4 class="fs-20 font-w600 mb-0">${data.rank}</h4>
                                        </div>
                                        <div class="price-content">
                                            <span class="fs-14 d-block mb-2">Percent Total Volume</span>
                                            <h4 class="font-w600 text-success mb-0">${total}<i
                                                    class="fa-solid fa-caret-up ms-1 text-success"></i></h4>
                                        </div>
                                        <div class="price-content">
                                            <span class="fs-14 d-block mb-2">Volume Usd</span>
                                            <h4 class="font-w600 mb-0">${volume}</h4>
                                        </div>
                                        <div class="price-content">
                                            <span class="fs-14 d-block mb-2">Trading Pairs</span>
                                            <h4 class="font-w600 mb-0">${data.tradingPairs}</h4>
                                        </div>
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
                                                stroke="var(--text-dark)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                            <path
                                                d="M12.0335 6C12.5854 6 13.0328 5.55228 13.0328 5C13.0328 4.44772 12.5854 4 12.0335 4C11.4816 4 11.0342 4.44772 11.0342 5C11.0342 5.55228 11.4816 6 12.0335 6Z"
                                                stroke="var(--text-dark)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                            <path
                                                d="M12.0335 20C12.5854 20 13.0328 19.5523 13.0328 19C13.0328 18.4477 12.5854 18 12.0335 18C11.4816 18 11.0342 18.4477 11.0342 19C11.0342 19.5523 11.4816 20 12.0335 20Z"
                                                stroke="var(--text-dark)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href=${data.exchangeUrl}></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="text-center">
                                    <div class="media d-block">
                                        <svg width="80" height="80" viewBox="0 0 126 126"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M84.0001 49.8757C83.9965 45.5281 80.4721 42.0049 76.1257 42.0001H52.5001V57.7501H76.1257C80.4721 57.7465 83.9965 54.222 84.0001 49.8757Z"
                                                fill="#FFAB2D"/>
                                            <path
                                                d="M52.5001 83.9999H76.1257C80.4745 83.9999 84.0001 80.4743 84.0001 76.1255C84.0001 71.7756 80.4745 68.2499 76.1257 68.2499H52.5001V83.9999Z"
                                                fill="#FFAB2D"/>
                                            <path
                                                d="M63 0C28.2061 0 0 28.2061 0 63C0 97.7938 28.2061 126 63 126C97.7938 126 126 97.7938 126 63C125.96 28.2226 97.7774 0.0398255 63 0V0ZM94.5007 76.4995C94.4883 86.4367 86.4367 94.4883 76.5009 94.4993V98.9996C76.5009 101.485 74.4849 103.5 72.0006 103.5C69.5149 103.5 67.5003 101.485 67.5003 98.9996V94.4993H58.5011V98.9996C58.5011 101.485 56.4851 103.5 54.0008 103.5C51.5151 103.5 49.5005 101.485 49.5005 98.9996V94.4993H36.001C33.5153 94.4993 31.5007 92.4847 31.5007 90.0004C31.5007 87.5147 33.5153 85.5001 36.001 85.5001H40.4999V40.4999H36.001C33.5153 40.4999 31.5007 38.4853 31.5007 35.9996C31.5007 33.5139 33.5153 31.4993 36.001 31.4993H49.5005V27.0004C49.5005 24.5147 51.5151 22.5001 54.0008 22.5001C56.4865 22.5001 58.5011 24.5147 58.5011 27.0004V31.4993H67.5003V27.0004C67.5003 24.5147 69.5149 22.5001 72.0006 22.5001C74.4863 22.5001 76.5009 24.5147 76.5009 27.0004V31.4993C86.3996 31.4581 94.4581 39.448 94.5007 49.3467C94.5227 54.5886 92.2498 59.5777 88.2796 63C92.2128 66.3838 94.4828 71.3098 94.5007 76.4995V76.4995Z"
                                                fill="#FFAB2D"/>
                                        </svg>
                                        <div class="media-content">
                                            <h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-0">
                                                ${data.name}</h4>
                                            <span class="font-w600 text-dark">${data.exchangeId}</span>
                                            <p class="text-start">Dash is an open source cryptocurrency. It
                                                is
                                                an altcoin that was forked from the Bitcoin protocol. It is
                                                also
                                                a decentralized autonomous organization (DAO)...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-0 border-0 text-center">
                                <a href=${data.exchangeUrl} class="btn btn-primary btn-sm btn-block">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>`;

                document.getElementById('nav-bitcoin').innerHTML = html;
                localStorage.removeItem('slug')
            });

        } else window.location.href = '/exchanges';
    </script>
@endsection
