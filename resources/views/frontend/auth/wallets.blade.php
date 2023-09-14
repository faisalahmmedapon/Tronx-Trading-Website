@extends('frontend.auth.layout')



@push('css')
    <style>

        .nav-link-style{
            color: #9297a6;
        }
        .nav-link-style:hover{
                     color: #fff;
        }
        .nav-link.nav-link-style.active {
            color: #fff;
            border-bottom: 2px solid #fad534;
        }
        .spot{
            background-color: #2a323e;
            padding: 23px 11px;
            border-radius: 29px 29px 0px 0px;
        }
        .select-style{
            width: 58px;
            height: 22px;
            background-color: #454e5b;
            color: #9297a6;
            border: 1px solid #454e5b;
            border-radius: 6px;
            margin: 3px 4px;
            font-size: 13px;
        }
        .balance-deposit-withdraw-transfer a{
            width: 32.33%;
            background-color: #333b46 !important;
            border-color: #333b46;
        }
        .balance-deposit-withdraw-transfer .active{
            background-color: #fcd434 !important;
            color: #000;
            border-color: #fcd434;
        }

        .balance h3{
            font-weight: 600;
            font-size: 30px;
        }
        .balance-pnl-start-p{
            font-size: 12px;
            margin-bottom: 0rem;
        }
        .balance-pnl {
            padding-top: 10px;
        }
        i{
            color: #5d6879;
        }
        .convert {
            padding: 10px 21px;
            background-color: #2a323e;
            margin-top: 10px;
        }
        .convert-rate{
                      color: #fcd434;
                      background-color: #343a44;
            padding: 1px 18px;
                      border-radius: 6px;
                  }

        .deposit-withdraw-method-first h3{
            padding: 0px 12px;
        }
        .deposit-withdraw-method-name h5 {
            font-size: 14px;
            font-weight: revert;
            border-bottom: none;
        } .deposit-withdraw-method-name h6 {
            font-size: 12px;
            font-weight: unset;
            border-bottom: none;
        }
        .deposit-withdraw-method-name {
            padding: 4px 0px;
        }

    </style>

@endpush
@section('meta_title', 'Wallet')
@section('meta_keywords', '')
@section('meta_description', '')


@section('content')
    <div class="card-body">
        <ul class="nav" role="tablist">
            <li class="" role="presentation">
                <a class="nav-link nav-link-style" data-bs-toggle="tab" href="#overview" role="tab" aria-selected="true">
                    Overview
                </a>
            </li>
            <li class="" role="presentation">
                <a class="nav-link nav-link-style active" data-bs-toggle="tab" href="#spot" role="tab" aria-selected="false" tabindex="-1">
                    Spot
                </a>
            </li>
            <li class="" role="presentation">
                <a class="nav-link nav-link-style" data-bs-toggle="tab" href="#funding" role="tab" aria-selected="false" tabindex="-1">
                    Funding
                </a>
            </li>
            <li class="" role="presentation">
                <a class="nav-link nav-link-style" data-bs-toggle="tab" href="#earn" role="tab" aria-selected="false" tabindex="-1">
                    Earn
                </a>
            </li>
            <li class="" role="presentation">
                <a class="nav-link nav-link-style" data-bs-toggle="tab" href="#feature" role="tab" aria-selected="false" tabindex="-1">
                    Feature
                </a>
            </li>
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane fade  " id="overview" role="tabpanel">
                <p>Overview</p>
            </div>
            <div class="tab-pane fade active show " id="spot" role="tabpanel">

                <div class="spot">
                    <div class="header-top d-flex justify-content-between">
                        <div class="header-top-start d-flex">
                            <p> <i class="fa-solid fa-eye"></i> Total Balance</p>
                            <select class="select-style" aria-label="">
                                <option value="1">USD</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="header-top-end">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>
                    <div class="balance">
                        <h3>$000000</h3>
                    </div>

                    <div class="balance-pnl">
                        <p class="balance-pnl-start-p">Today's Panel  <i class="fa-solid fa-circle-exclamation"></i></p>
                        <p> <span>$000000</span>/ <span>></span></p>
                    </div>
                    <div class="balance-deposit-withdraw-transfer d-flex justify-content-between">
                        <a class="btn btn-success active">Deposit</a>
                        <a class="btn btn-success ">Withdraw</a>
                        <a class="btn btn-success ">Transfer</a>
                    </div>

                </div>
                 <div class="convert">

                     <div class="d-flex justify-content-between convert-rate">
                         <p>Convert Low-Value Assets to BNB</p>
                         <a href=""> <i class="fa-solid fa-angle-right"></i> </a>
                     </div>

                     <div class="d-flex justify-content-between">
                         <div class="header-top-start d-flex">
                             <h3> Balances </h3>
                         </div>
                         <div class="header-top-end">
                             <i class="fa-solid fa-search"></i>
                         </div>
                     </div>
                     <div class="py-3">
                         <div class="deposit-withdraw-method d-flex justify-content-between">
                             <div class="deposit-withdraw-method-first d-flex justify-content-start">
                                 <h3>
                                     <i class="fa-brands fa-bitcoin"></i>
                                 </h3>
                                 <div class="deposit-withdraw-method-name">
                                     <h5>BNB</h5>
                                     <h6>BNB</h6>
                                 </div>
                             </div>
                             <div class="deposit-withdraw-method-balance">
                                 <h6>0.00</h6>
                             </div>
                         </div>
                         <hr class="dropdown-divider">
                     </div>
                     <div>
                         <div class="deposit-withdraw-method d-flex justify-content-between">
                             <div class="deposit-withdraw-method-first d-flex justify-content-start">
                                 <h3>
                                     <i class="fa-brands fa-bitcoin"></i>
                                 </h3>
                                 <div class="deposit-withdraw-method-name">
                                     <h5>BNB</h5>
                                     <h6>BNB</h6>
                                 </div>
                             </div>
                             <div class="deposit-withdraw-method-balance">
                                 <h6>0.00</h6>
                             </div>
                         </div>
                         <hr class="dropdown-divider">
                     </div>
                </div>
            </div>
            <div class="tab-pane fade" id="funding" role="tabpanel">
                <div class="spot">
                    <div class="header-top d-flex justify-content-between">
                        <div class="header-top-start d-flex">
                            <p> <i class="fa-solid fa-eye"></i> Total Balance</p>
                            <select class="select-style" aria-label="">
                                <option value="1">USD</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="header-top-end">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>
                    <div class="balance">
                        <h3>$000000</h3>
                    </div>

                    <div class="balance-deposit-withdraw-transfer d-flex justify-content-between">
                        <a class="btn btn-success active">Deposit</a>
                        <a class="btn btn-success ">Withdraw</a>
                        <a class="btn btn-success ">Transfer</a>
                    </div>

                </div>
                <div class="convert">

                    <div class="bottom-list d-flex justify-content-between">
                        <a class="bottom-list-a-style" href="#">
                            <i class="fa-solid fa-house"></i>
                            P2P
                        </a>
                        <a class="bottom-list-a-style" href="#"> <i class="fa-solid fa-chart-simple"></i>
                            Pay
                        </a>
                        <a class="bottom-list-a-style" href="#"> <i class="fa-solid fa-masks-theater"></i>
                            Gift Card
                        </a>
                        <a class="bottom-list-a-style" href="#"> <i class="fa-solid fa-stroopwafel"></i>
                            Earn
                        </a>

                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="header-top-start d-flex">
                            <h3> Available Balances </h3>
                        </div>
                        <div class="header-top-end">
                            <i class="fa-solid fa-search"></i>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="deposit-withdraw-method d-flex justify-content-between">
                            <div class="deposit-withdraw-method-first d-flex justify-content-start">
                                <h3>
                                    <i class="fa-brands fa-bitcoin"></i>
                                </h3>
                                <div class="fddsf">
                                    <div class="deposit-withdraw-method-name">
                                        <h5>BNB</h5>
                                        <h6>BNB</h6>
                                    </div>
                                    <div class="deposit-withdraw-method-balance">
                                        <h6>0.00</h6>
                                    </div>
                                </div><div class="fddsf">
                                    <div class="deposit-withdraw-method-name">
                                        <h5>BNB</h5>
                                        <h6>BNB</h6>
                                    </div>
                                    <div class="deposit-withdraw-method-balance">
                                        <h6>0.00</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class="dropdown-divider">
                    </div>
                    <div>
                        <div class="deposit-withdraw-method d-flex justify-content-between">
                            <div class="deposit-withdraw-method-first d-flex justify-content-start">
                                <h3>
                                    <i class="fa-brands fa-bitcoin"></i>
                                </h3>
                                <div class="deposit-withdraw-method-name">
                                    <h5>BNB</h5>
                                    <h6>BNB</h6>
                                </div>
                            </div>
                            <div class="deposit-withdraw-method-balance">
                                <h6>0.00</h6>
                            </div>
                        </div>
                        <hr class="dropdown-divider">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="earn" role="tabpanel">
                <p>earn</p>
            </div><div class="tab-pane fade" id="feature" role="tabpanel">
                <p>feature</p>
            </div>
        </div>
    </div>
@endsection
