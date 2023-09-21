@extends('frontend.auth.layout')


@section('meta_title', 'User Dashboard')
@section('meta_keywords', '')
@section('meta_description', '')


@section('content')

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="rol-md-12 col-lg-12 col-sm-12">
                    <div class="header-icon d-flex justify-content-between">
                        <a class="" href="#">
                            <i class="fa-regular fa-circle-user"></i>
                        </a>
                        <input class="header-icon-search" type="search" placeholder="Search...">
                        <a class="" href="#"> <i class="fa-solid fa-qrcode"></i> </a>
                        <a class="" href="#"> <i class="fa-solid fa-headset"></i> </a>
                        <a class="" href="#"> <i class="fa-solid fa-bell"></i> </a>
                        <a class="" href="#"> <i class="fa-solid fa-hammer"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="trade-banner">
            <div class="banner d-flex justify-content-between">
                <div class="banner-text">
                    <h3>Start Trading Crypto and Make Your First Transaction </h3>
                </div>
                <div class="banner-image">
                    <img src="./images/cryptography_bag_icon.png" alt="">
                </div>
            </div>
            <a href="#" class="btn btn-info">Trade</a>
        </div>
        <div class="bottom-list">
            <div class="bottom-list d-flex justify-content-between">
                {{-- <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/13.jpeg') }}" alt="" srcset="">
                    Home
                </a> --}}
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/7.jpeg') }}" alt="" srcset="">
                    Deposit
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/4.jpeg') }}" alt="" srcset="">
                     Trading Bot
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/9.jpeg') }}" alt="" srcset="">
                    Referral
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/10.jpeg') }}" alt="" srcset="">
                    Cash Gift
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/11.jpeg') }}" alt="" srcset="">
                    Rewards Hub
                </a>
            </div>
            <div class="bottom-list d-flex justify-content-between">

                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/1.jpeg') }}" alt="" srcset="">
                    P2P
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/2.jpeg') }}" alt="" srcset="">
                    Earn
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/12.jpeg') }}" alt="" srcset="">
                    Crypto Lerding
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/3.jpeg') }}" alt="" srcset="">
                    Margin Trading
                </a>
                <a class="bottom-list-a-style" href="#">
                    <img src="{{ asset('frontend/auth/images/13.jpeg') }}" alt="" srcset="">
                    More
                </a>
            </div>
        </div>

        <div class="p2p-trading d-flex justify-content-between">
            <div class="p2p-trading-text">
                <h6>P@P Trading</h6>
                <p>Bank Transfer,Digital Wallet Transfer,Mobile Payment and more</p>
            </div>
            <div class="p2p-trading-img">
                <img src="{{asset('frontend')}}/auth/images/cryptography_bag_icon.png" alt="">
            </div>
        </div>

        <div class="tradingview py-3">


            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                    {
                        "colorTheme": "dark",
                        "dateRange": "12M",
                        "showChart": false,
                        "locale": "en",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": true,
                        "showFloatingTooltip": false,
                        "width": "400",
                        "height": "465",
                        "tabs": [
                        {
                            "title": "Indices",
                            "symbols": [
                                {
                                    "s": "FOREXCOM:SPXUSD",
                                    "d": "S&P 500"
                                },
                                {
                                    "s": "FOREXCOM:NSXUSD",
                                    "d": "US 100"
                                },
                                {
                                    "s": "FOREXCOM:DJI",
                                    "d": "Dow 30"
                                },
                                {
                                    "s": "INDEX:NKY",
                                    "d": "Nikkei 225"
                                },
                                {
                                    "s": "INDEX:DEU40",
                                    "d": "DAX Index"
                                },
                                {
                                    "s": "FOREXCOM:UKXGBP",
                                    "d": "UK 100"
                                }
                            ],
                            "originalTitle": "Indices"
                        },
                        {
                            "title": "Futures",
                            "symbols": [
                                {
                                    "s": "CME_MINI:ES1!",
                                    "d": "S&P 500"
                                },
                                {
                                    "s": "CME:6E1!",
                                    "d": "Euro"
                                },
                                {
                                    "s": "COMEX:GC1!",
                                    "d": "Gold"
                                },
                                {
                                    "s": "NYMEX:CL1!",
                                    "d": "Oil"
                                },
                                {
                                    "s": "NYMEX:NG1!",
                                    "d": "Gas"
                                },
                                {
                                    "s": "CBOT:ZC1!",
                                    "d": "Corn"
                                }
                            ],
                            "originalTitle": "Futures"
                        },
                        {
                            "title": "Bonds",
                            "symbols": [
                                {
                                    "s": "CME:GE1!",
                                    "d": "Eurodollar"
                                },
                                {
                                    "s": "CBOT:ZB1!",
                                    "d": "T-Bond"
                                },
                                {
                                    "s": "CBOT:UB1!",
                                    "d": "Ultra T-Bond"
                                },
                                {
                                    "s": "EUREX:FGBL1!",
                                    "d": "Euro Bund"
                                },
                                {
                                    "s": "EUREX:FBTP1!",
                                    "d": "Euro BTP"
                                },
                                {
                                    "s": "EUREX:FGBM1!",
                                    "d": "Euro BOBL"
                                }
                            ],
                            "originalTitle": "Bonds"
                        },
                        {
                            "title": "Forex",
                            "symbols": [
                                {
                                    "s": "FX:EURUSD",
                                    "d": "EUR to USD"
                                },
                                {
                                    "s": "FX:GBPUSD",
                                    "d": "GBP to USD"
                                },
                                {
                                    "s": "FX:USDJPY",
                                    "d": "USD to JPY"
                                },
                                {
                                    "s": "FX:USDCHF",
                                    "d": "USD to CHF"
                                },
                                {
                                    "s": "FX:AUDUSD",
                                    "d": "AUD to USD"
                                },
                                {
                                    "s": "FX:USDCAD",
                                    "d": "USD to CAD"
                                }
                            ],
                            "originalTitle": "Forex"
                        }
                    ]
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="rol-md-12 col-lg-12 col-sm-12">
                    <div class="footer-icon d-flex justify-content-between">
                        <a class="footer-a-style {{ (request()->routeIs('user.dashboard')) ? 'footer-active' : '' }}" href="{{route('user.dashboard')}}">
                            <i class="fa-solid fa-house {{ (request()->routeIs('user.dashboard')) ? 'footer-active' : '' }}"></i>
                            Home
                        </a>
                        <a class="footer-a-style {{ (request()->routeIs('markets')) ? 'footer-active' : '' }}" href="{{route('markets')}}">
                            <i class="fa-solid fa-chart-simple {{ (request()->routeIs('markets')) ? 'footer-active' : '' }}"></i>
                            Markets
                        </a>
                        <a class="footer-a-style {{ (request()->routeIs('trades')) ? 'footer-active' : '' }}" href="{{route('trades')}}">
                            <i class="fa-solid fa-masks-theater {{ (request()->routeIs('trades')) ? 'footer-active' : '' }}"></i>
                            Trades
                        </a>
                        <a class="footer-a-style {{ (request()->routeIs('futures')) ? 'footer-active' : '' }}" href="{{route('futures')}}">
                            <i class="fa-solid fa-stroopwafel {{ (request()->routeIs('futures')) ? 'footer-active' : '' }}"></i>
                            Futures
                        </a>
                        <a class="footer-a-style {{ (request()->routeIs('wallets')) ? 'footer-active' : '' }}" href="{{route('wallets')}}">
                            <i class="fa-solid fa-wallet {{ (request()->routeIs('wallets')) ? 'footer-active' : '' }}"></i>
                            Wallets
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
