@extends('layouts.homeLayout')

@section('title')
    Exchange
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- column -->
                {{--                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <h1 class="text-center no-border font-w600 fs-60 mt-2"><span class="text-success">Buy</span> and
                                                <span class="text-danger">Sell</span> Coins at the<br> Jiade with no additional charges</h1>
                                            <h4 class="text-center ">Trusted by millions user with over $1 Trillion in crypto transactions.
                                            </h4>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="text-center mt-3 row justify-content-center">
                                                        <div class="col-xl-5">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-sm-6">
                                                                    <input type="number" class="form-control mb-3" name="value"
                                                                        placeholder="" value="18.1548">
                                                                </div>
                                                                <div class="col-xl-6 col-sm-6">
                                                                    <select class="default-select exchange-select form-control"
                                                                        name="state">
                                                                        <option value="BTC">BTC</option>
                                                                        <option value="BTC">Ethereum</option>
                                                                        <option value="Ripple">Ripple</option>
                                                                        <option value="Ripple">Bitcoin Cash</option>
                                                                        <option value="Ripple">Cardano</option>
                                                                        <option value="Ripple">Litecoin</option>
                                                                        <option value="Ripple">NEO</option>
                                                                        <option value="Ripple">Stellar</option>
                                                                        <option value="Ripple">EOS</option>
                                                                        <option value="Ripple">NEM</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" col-xl-1">
                                                            <div class="equalto">
                                                                =
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-sm-6">
                                                                    <input type="number" class="form-control mb-3" name="value"
                                                                        placeholder="" value="264.158">
                                                                </div>
                                                                <div class="col-xl-6 col-sm-6">
                                                                    <select class="default-select exchange-select form-control"
                                                                        name="state">
                                                                        <option value="INR">INR</option>
                                                                        <option value="USD">POUND</option>
                                                                        <option value="USD">USD</option>
                                                                        <option value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-4 mb-4">
                                                        <a href="p2p.html" class="btn btn-warning mx-auto btn-sm">EXCHANGE NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-6 col-xl-3 col-sm-6">
                                            <div class="card overflow-hidden">
                                                <div class="card-body py-0 pt-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h4 class="mb-0">Bitcoin Sold</h4>
                                                        <div class="d-flex align-items-center">
                                                            <h2 class="count-num">123k</h2>
                                                            <span class="fs-16 font-w500 text-success ps-2"><i
                                                                    class="bi bi-caret-up-fill pe-2"></i></span>
                                                        </div>
                                                    </div>
                                                    <div id="totalInvoices"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-sm-6">
                                            <div class="card overflow-hidden">
                                                <div class="card-body py-0 pt-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h4 class="mb-0">Amount Refund</h4>
                                                        <div class="d-flex align-items-center">
                                                            <h2 class="count-num">82k</h2>
                                                            <span class="fs-16 font-w500 text-danger ps-2"><i
                                                                    class="bi bi-caret-down-fill pe-2"></i></span>
                                                        </div>
                                                    </div>
                                                    <div id="paidinvoices"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-sm-6">
                                            <div class="card overflow-hidden">
                                                <div class="card-body py-0 pt-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h4 class="mb-0">Litecoin Sold</h4>
                                                        <div class="d-flex align-items-center">
                                                            <h2 class="count-num">259k</h2>
                                                            <span class="fs-16 font-w500 text-success ps-2"><i
                                                                    class="bi bi-caret-up-fill pe-2"></i></span>
                                                        </div>
                                                    </div>
                                                    <div id="barChart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-sm-6">
                                            <div class="card overflow-hidden">
                                                <div class="card-body py-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-3">
                                                            <h2 class=" count-num mb-0">3468</h2>
                                                            <p class="mb-0">Dash Sold</p>
                                                        </div>
                                                        <div id="ticketSold"></div>
                                                    </div>
                                                    <div class="progress mb-2" style="height:10px;">
                                                        <div class="progress-bar bg-warning progress-animated"
                                                            style="width: 30%; height:10px;" role="progressbar">
                                                        </div>
                                                    </div>
                                                    <p>30% than last month</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- column-->
                                        <div class="col-xl-8 col-lg-12">
                                            <div class="card">
                                                <div class="card-header justify-content-between border-0">
                                                    <h2 class="card-title mb-0">Latest Sold Transaction</h2>
                                                </div>
                                                <div class="card-body px-3 py-0">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table-responsive table shadow-hover tickettable display mb-4 dataTablesCard dataTable no-footer"
                                                            id="example6">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom">
                                                                        <input type="checkbox" class="form-check-input" id="checkAll"
                                                                            required="">
                                                                    </th>
                                                                    <th class="border-bottom ps-0">Currency</th>
                                                                    <th class="border-bottom">Date</th>
                                                                    <th class="border-bottom">Email</th>
                                                                    <th class="border-bottom">Price</th>
                                                                    <th class="text-end">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox me-0 align-self-center">
                                                                            <div class="custom-control custom-checkbox ">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="check8" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="check8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                                        <h5 class="mb-0">BTC</h5>
                                                                    </td>
                                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="email-inbox.html">
                                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                                    <svg width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                                            fill="white" />
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0"><a href="app-profile.html">Samanta
                                                                                        William</a></h5>
                                                                                <span class="fs-14 text-muted">samantha@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$75,00
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <span class="badge badge-sm badge-success">Paid</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox me-0 align-self-center">
                                                                            <div class="custom-control custom-checkbox ">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="check81" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="check8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                                        <h5 class="mb-0">BCTD</h5>
                                                                    </td>
                                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="email-inbox.html">
                                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                                    <svg width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                                            fill="white" />
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0"><a href="app-profile.html">Tony
                                                                                        Soap</a></h5>
                                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$80,00
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <span class="badge badge-sm badge-success">Paid</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox me-0 align-self-center">
                                                                            <div class="custom-control custom-checkbox ">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="check813" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="check8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                                        <h5 class="mb-0">ETH</h5>
                                                                    </td>
                                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="email-inbox.html">
                                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                                    <svg width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                                            fill="white" />
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0"><a href="app-profile.html">Nela
                                                                                        Vita</a></h5>
                                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$80,00
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <span class="badge badge-sm badge-warning">Pending</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox me-0 align-self-center">
                                                                            <div class="custom-control custom-checkbox ">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="check814" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="check8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                                        <h5 class="mb-0">USD</h5>
                                                                    </td>
                                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="email-inbox.html">
                                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                                    <svg width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                                            fill="white" />
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0"><a href="app-profile.html">Nadia
                                                                                        Edja</a></h5>
                                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$75,00
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <span class="badge badge-sm badge-danger">Unpaid</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox me-0 align-self-center">
                                                                            <div class="custom-control custom-checkbox ">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="check815" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="check8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <span class="font-w600 fs-14"> #TCK-01-12344 </span>
                                                                        <h5 class="mb-0">USD</h5>
                                                                    </td>
                                                                    <td class="fs-14 font-w400">Jan 12, 2022</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="email-inbox.html">
                                                                                <div class="icon-box icon-box-sm bg-primary">
                                                                                    <svg width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.427 6L12.6 10.8C12.4335 10.9267 12.2312 10.9976 12.022 11.0026C11.8129 11.0077 11.6074 10.9465 11.435 10.828L5.573 6H18.427ZM19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.3L10.2 12.4C10.7159 12.7863 11.3435 12.9944 11.988 12.993C12.6551 12.992 13.3037 12.774 13.836 12.372L20 7.3V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18Z"
                                                                                            fill="white" />
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0"><a href="app-profile.html">Nadia
                                                                                        Edja</a></h5>
                                                                                <span class="fs-14 text-muted">demo@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$75,00
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <span class="badge badge-sm badge-danger">Unpaid</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card">
                                                <div class="card-header border-0 pb-0">
                                                    <h4 class="card-title mb-0">Buy Coin</h4>
                                                </div>
                                                <div class="card-body pt-2">
                                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-2">
                                                        <span class="small text-muted">Avbl Balance</span>
                                                        <span class="text-dark">210.800 USDT</span>
                                                    </div>
                                                    <form>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Price</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-text">USDT</span>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Size</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#!">USDT</a></li>
                                                                <li><a class="dropdown-item" href="#!">BTC</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="mb-3 mt-4">
                                                            <label class="form-label">TP/SL</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Take Profit">
                                                                <button
                                                                    class="btn btn-primary btn-primary btn-outline-primary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#!">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#!">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                                    placeholder="Stop Loss">
                                                                <button class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#!">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#!">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Stop Price</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">Mark</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#!">Limit</a></li>
                                                                <li><a class="dropdown-item" href="#!">Mark</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="">Cost</div>
                                                                <div class="text-muted px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="">Max</div>
                                                                <div class="text-muted px-1"> 6.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 d-flex justify-content-between">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-success btn-sm light text-uppercase btn-block me-3">BUY</a>
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-danger btn-sm light text-uppercase btn-block ">Sell</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-wrap border-0">
                            <h4 class="card-title mb-lg-0 mb-2">Exchanges List</h4>
                            <ul class=" nav nav-pills light" id="pills-tab" role="tablist">
                                <li class="nav-item my-1" role="presentation">
                                    <button class="nav-link active" id="pills-crypto-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-crypto" type="button" role="tab"
                                            aria-controls="pills-crypto" aria-selected="true">All Cryptos
                                    </button>
                                </li>
                                <li class="nav-item my-1" role="presentation">
                                    <button class="nav-link" id="pills-spot-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-spot" type="button" role="tab"
                                            aria-controls="pills-spot" aria-selected="false">Spot Markets
                                    </button>
                                </li>
                                <li class="nav-item my-1" role="presentation">
                                    <button class="nav-link" id="pills-future-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-future" type="button" role="tab"
                                            aria-controls="pills-future" aria-selected="false">Future Markets
                                    </button>
                                </li>
                                <li class="nav-item my-1" role="presentation">
                                    <button class="nav-link me-0" id="pills-listing-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-listing" type="button" role="tab"
                                            aria-controls="pills-listing" aria-selected="false">New Listing
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body pt-0">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-crypto" role="tabpanel"
                                     aria-labelledby="pills-crypto-tab">
                                    <div class="table-responsive dataTabletrade">
                                        <table id="example-history" class="table shadow-hover display  orderbookTable"
                                               style="min-width:845px">
                                            <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Name</th>
                                                <th>Percent Total Volume</th>
                                                <th>Volume Usd</th>
                                                <th>Trading Pairs</th>
                                                <th>Updated</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($exchangesData as $exchange)
                                                <tr>
                                                    <td>{{$exchange['rank']}}</td>
                                                    <td>
                                                        <a class="market-title d-flex align-items-center"
                                                           href="javascript:void(0)">
                                                            <div class="market-icon bg-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="512pt"
                                                                     version="1.1" viewBox="0 0 512 512" width="512pt">
                                                                    <g>
                                                                        <path
                                                                            d="M 512 256 C 512 324.378906 485.371094 388.671875 437.019531 437.019531 C 388.671875 485.371094 324.378906 512 256 512 C 187.621094 512 123.328125 485.371094 74.980469 437.019531 C 26.628906 388.671875 0 324.378906 0 256 C 0 187.621094 26.628906 123.328125 74.980469 74.980469 C 123.328125 26.628906 187.621094 0 256 0 C 324.378906 0 388.671875 26.628906 437.019531 74.980469 C 485.371094 123.328125 512 187.621094 512 256 Z M 512 256 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,66.666667%,12.54902%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 512 256 C 512 324.378906 485.371094 388.671875 437.019531 437.019531 C 388.671875 485.371094 324.378906 512 256 512 L 256 0 C 324.378906 0 388.671875 26.628906 437.019531 74.980469 C 485.371094 123.328125 512 187.621094 512 256 Z M 512 256 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,53.72549%,0%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 458 256 C 458 367.378906 367.378906 458 256 458 C 144.621094 458 54 367.378906 54 256 C 54 144.621094 144.621094 54 256 54 C 367.378906 54 458 144.621094 458 256 Z M 458 256 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,92.54902%,59.215686%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 458 256 C 458 367.378906 367.378906 458 256 458 L 256 54 C 367.378906 54 458 144.621094 458 256 Z M 458 256 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,85.882353%,17.647059%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 325.988281 292.609375 C 325.988281 302.261719 324.171875 310.511719 320.53125 317.371094 C 316.890625 324.230469 311.980469 329.78125 305.800781 334.011719 C 299.621094 338.238281 292.5 341.328125 284.460938 343.28125 C 280.058594 344.339844 275.539062 345.109375 270.910156 345.589844 L 270.910156 380.550781 L 240.910156 380.550781 L 240.910156 344.929688 C 233.570312 343.921875 226.289062 342.328125 219.058594 340.101562 C 205.851562 336.039062 194 330.28125 183.5 322.828125 L 198.988281 292.609375 C 200.519531 294.128906 203.269531 296.121094 207.25 298.570312 C 211.21875 301.03125 215.921875 303.488281 221.339844 305.941406 C 226.761719 308.398438 232.769531 310.46875 239.378906 312.160156 C 244.800781 313.558594 250.339844 314.371094 256 314.609375 C 257.230469 314.671875 258.460938 314.699219 259.699219 314.699219 C 279 314.699219 288.648438 308.519531 288.648438 296.160156 C 288.648438 292.269531 287.550781 288.96875 285.351562 286.261719 C 283.148438 283.550781 280.019531 281.179688 275.949219 279.140625 C 271.890625 277.109375 266.980469 275.25 261.21875 273.558594 C 259.539062 273.058594 257.800781 272.550781 256 272.03125 C 251.648438 270.761719 246.949219 269.410156 241.921875 267.96875 C 233.28125 265.601562 225.789062 263.011719 219.441406 260.21875 C 213.089844 257.429688 207.789062 254.121094 203.558594 250.308594 C 199.328125 246.5 196.148438 242.101562 194.039062 237.109375 C 191.921875 232.109375 190.859375 226.148438 190.859375 219.199219 C 190.859375 210.058594 192.550781 201.929688 195.941406 194.820312 C 199.328125 187.699219 204.03125 181.78125 210.039062 177.039062 C 216.050781 172.300781 223.03125 168.699219 231 166.238281 C 234.199219 165.25 237.511719 164.46875 240.910156 163.878906 L 240.910156 131.199219 L 270.910156 131.199219 L 270.910156 163.460938 C 278.21875 164.398438 285.148438 166.089844 291.699219 168.53125 C 302.371094 172.511719 311.679688 177.210938 319.640625 182.621094 L 304.148438 211.070312 C 302.960938 209.890625 300.800781 208.28125 297.671875 206.25 C 294.539062 204.210938 290.71875 202.230469 286.238281 200.28125 C 281.75 198.328125 276.878906 196.679688 271.640625 195.320312 C 266.5 194 261.289062 193.320312 256 193.300781 C 255.878906 193.289062 255.75 193.289062 255.628906 193.289062 C 245.980469 193.289062 238.78125 195.070312 234.039062 198.628906 C 229.300781 202.179688 226.929688 207.179688 226.929688 213.609375 C 226.929688 217.339844 227.820312 220.429688 229.601562 222.878906 C 231.378906 225.339844 233.960938 227.5 237.351562 229.359375 C 240.730469 231.230469 245 232.921875 250.171875 234.441406 C 252.011719 234.980469 253.949219 235.539062 256 236.101562 C 259.691406 237.121094 263.710938 238.179688 268.078125 239.269531 C 276.878906 241.640625 284.878906 244.179688 292.078125 246.890625 C 299.28125 249.601562 305.371094 252.980469 310.371094 257.050781 C 315.359375 261.109375 319.21875 265.980469 321.929688 271.648438 C 324.628906 277.328125 325.988281 284.308594 325.988281 292.609375 Z M 325.988281 292.609375 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,66.666667%,12.54902%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 271.640625 195.320312 C 266.5 194 261.289062 193.320312 256 193.300781 L 256 131.199219 L 270.910156 131.199219 L 270.910156 163.460938 C 278.21875 164.398438 285.148438 166.089844 291.699219 168.53125 C 302.371094 172.511719 311.679688 177.210938 319.640625 182.621094 L 304.148438 211.070312 C 302.960938 209.890625 300.800781 208.28125 297.671875 206.25 C 294.539062 204.210938 290.71875 202.230469 286.238281 200.28125 C 281.75 198.328125 276.878906 196.679688 271.640625 195.320312 Z M 271.640625 195.320312 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,53.72549%,0%);fill-opacity:1;"/>
                                                                        <path
                                                                            d="M 325.988281 292.609375 C 325.988281 302.261719 324.171875 310.511719 320.53125 317.371094 C 316.890625 324.230469 311.980469 329.78125 305.800781 334.011719 C 299.621094 338.238281 292.5 341.328125 284.460938 343.28125 C 280.058594 344.339844 275.539062 345.109375 270.910156 345.589844 L 270.910156 380.550781 L 256 380.550781 L 256 314.609375 C 257.230469 314.671875 258.460938 314.699219 259.699219 314.699219 C 279 314.699219 288.648438 308.519531 288.648438 296.160156 C 288.648438 292.269531 287.550781 288.96875 285.351562 286.261719 C 283.148438 283.550781 280.019531 281.179688 275.949219 279.140625 C 271.890625 277.109375 266.980469 275.25 261.21875 273.558594 C 259.539062 273.058594 257.800781 272.550781 256 272.03125 L 256 236.101562 C 259.691406 237.121094 263.710938 238.179688 268.078125 239.269531 C 276.878906 241.640625 284.878906 244.179688 292.078125 246.890625 C 299.28125 249.601562 305.371094 252.980469 310.371094 257.050781 C 315.359375 261.109375 319.21875 265.980469 321.929688 271.648438 C 324.628906 277.328125 325.988281 284.308594 325.988281 292.609375 Z M 325.988281 292.609375 "
                                                                            style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,53.72549%,0%);fill-opacity:1;"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <h5 class="mb-0 ms-2">{{$exchange['name']}}</h5>
                                                            <span
                                                                class="text-muted ms-2">{{$exchange['exchangeId']}}</span>
                                                        </a>
                                                    </td>
                                                    <td class="text-success">{{number_format($exchange['percentTotalVolume'], 2)}}</td>
                                                    <td>{{number_format($exchange['volumeUsd'], 2)}}</td>
                                                    <td>{{$exchange['tradingPairs']}}</td>
                                                    <td>{{floor($exchange['updated'] / (60 * 60 * 24))}}</td>
                                                    <td class="text-end"><a href="{{$exchange['exchangeUrl']}}"
                                                                            class="badge badge-sm badge-success">Trade</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
