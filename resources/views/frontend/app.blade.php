<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> @yield('meta_title') : An innovative platform for online investment</title>
    <meta name="meta_keywords" content="@yield('meta_keywords')">
    <meta name="meta_description" content="@yield('meta_description')">
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend')}}/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend')}}/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend')}}/images/favicon-16x16.png">
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.ico">
    <link rel="mask-icon" href="{{asset('frontend')}}/images/safari-pinned-tab.svg" color="#a0002a">
    <link rel="manifest" href="{{asset('frontend')}}/images/site.webmanifest">
    <meta name="description"
          content="Quotex broker is an innovative platform with up to 98% return on every investment! Sign up for a demo account to practice with $10,000. With a minimum deposit of just $10, this is a great choice!">
    <meta name="msapplication-TileColor" content="#a0002a">
    <meta name="msapplication-config" content="{{asset('frontend')}}/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="interkassa-verification" content="52ae35204ccc1b97dfc591cb53ca5d3a">
    <link rel="shortcut icon" href="{{asset('frontend')}}/profile/images/favicon.png">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/main.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <script src="{{asset('frontend')}}/js/imask.js"></script>

    <meta name="yandex-verification" content="62662e7489c4f276">
    <!-- Google tag (gtag.js) -->
    <script async="" src="{{asset('frontend')}}/js/js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>


@include('frontend.partials.navbar')
<div class="main">

    @yield('content')

</div>
@include('frontend.partials.footer')

<div class="modal js-account-closed-modal">
    <div class="modal-account-closed modal__dialog">
        <div>
            <button class="modal__close" id="close-button-terms-conditions">
                <svg data-testid="Icon" class="icon-close">
                    <use xlink:href="/profile/images/spritemap.svg#icon-close"></use>
                </svg>
            </button>

            <div class="modal-account-closed__header">
                <svg>
                    <use xlink:href="/profile/images/spritemap.svg#icon-information"></use>
                </svg>
                <div>Account closed - why and what to do?</div>
            </div>

            <div class="modal-account-closed__body">
                <span>There are several reasons why an account may become closed:</span>
                <br><br>
                <b>1. No activity.</b><br>
                <span>The most common reason is that the account was
                            closed for being inactive (no logins/activity) for a long period of time
                            – from 3 moths and more. Such accounts get deleted, if there are no
                            funds on the balance, and they cannot be restored. You are free to
                            register a new account. (provided there are no other active accounts
                            registered by you on the Platform)</span>
                <br><br>
                <span><span class="modal-account-closed__prompt">*&nbsp;</span>The email cannot be reused. You
                            would need to use a different email address.</span>
                <br><br>

                <b>2. Deleted by the owner.</b><br>
                <span> If there are no funds on the balance, such
                            accounts cannot be restored. As in previous case, you can simply make
                            sure there are no other active accounts registered by you on the
                            Platform, and create a new one.)</span>
                <br><br>
                <span><span class="modal-account-closed__prompt">*&nbsp;</span>If
                            you have deleted your account yourself by mistake, and there are funds
                            on its balance – please contact support for details (using the
                            «Contacts» form on the main page of the website). The operators will
                            check and see if the account can be restored.</span>
                <br><br>

                <div class="modal-account-closed__body-block">
                    <div class="modal-account-closed__body-accordion">
                        If it’s possible to restore the account, you will be asked to provide
                        <div class="modal-account-closed__body-plus">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.84615 0H7.15385V4.84615H12V7.15385H7.15385V12H4.84615V7.15385H0V4.84615H4.84615V0Z"
                                      fill="#2B99FF"></path>
                            </svg>
                        </div>

                        <div class="modal-account-closed__body-minus">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.15385 4.84766H12V7.15535H7.15385H4.84615H0V4.84766H4.84615H7.15385Z"
                                      fill="#2B99FF"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="modal-account-closed__body-panel">
                        <ul>
                            <li>A high-resolution photo of yourself
                                (selfie) on which you are holding your document for identification (your
                                passport or national ID will do) along with a sheet of paper with the
                                name «QUOTEX» written on it by hand, current date and your signature.
                                Your face, body and both arms must be visible. The details of the
                                document should be clear and readable.
                            </li>
                            <li>Screenshots of the receipts for deposits
                                in that account (a bank statement or detailed receipts from the payment
                                system you used for depositing will do).
                            </li>
                        </ul>
                    </div>
                </div>

                <br>
                <b>3. Duplicated accounts.</b><br>
                <span>It’s only allowed to have one active account on
                            the Platform. If other accounts registered by the same person are
                            detected they may be deleted with no warning (c 1.30 of the Service
                            Agreement).</span>
                <br><br>

                <b>4. Deleted for violation of the Service Agreement.</b><br>
                <span>The owner gets notified on the details of
                            violation, and the possibility of refund, and if applicable, is asked to
                            provide the required documents.)</span>
                <br><br>
                <span><span class="modal-account-closed__prompt">*&nbsp;</span>In
                            case of automatic detection of violations (e.g. using automated trading
                            software) – the Company reserves the right not to notify the owner in
                            advance. (You may contact support via the “Contacts” form at the bottom
                            of the website’s front page for details and refund (if applicable). We
                            remind you that all statutory documents (Service Agreement and its
                            annexes) are publicly available and can be revisited at any time on the
                            Company’s website.</span>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('frontend')}}/js/main.min.js"></script>
<a href="https://freekassa.ru/" style="display: none">
    <img src="{{asset('frontend')}}/17.png">
</a>

<script defer="defer" src="{{asset('frontend')}}/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"></script>

</body>

</html>
