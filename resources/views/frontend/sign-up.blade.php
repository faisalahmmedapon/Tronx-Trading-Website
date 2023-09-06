@extends('frontend.app')

@section('meta_title', 'Sign-up')
@section('meta_keywords', '')
@section('meta_description', '')

@section('content')


    <div class="main sign__container">
        <div class="modal-sign__container sign__form">
            <div class="sign__title">Sign Up</div>

            <div class="modal-sign__block">
                <div class="modal-sign__tabs form" dir="auto">
                    <div class="modal-sign__tabs-block">
                        <a href="{{route('login')}}" class="modal-sign__tab " data-value="1">
                            Login                    </a>
                        <a href="{{route('register')}}" class="modal-sign__tab active" data-value="2">
                            Registration                    </a>
                    </div>
                </div>

                <div id="tab-2" class="tabs__item active">
                    <form action="https://qxbroker.com/en/sign-up/" method="post" onsubmit="this.elements['time_offset'].value = -new Date().getTimezoneOffset() * 60; return QXvId.submit(this, '__alreadySubmited'); " dir="auto">
                        <input type="hidden" name="_token" value="u5rIzD4jw6L2K6jkOCC6WBLXdIKZmddRqa6bJcaI">    <input type="hidden" name="time_offset">


                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Email</label>
                            <input type="email" name="email" class="modal-sign__input-value focus-tooltip" required="1" autocomplete="off" placeholder="Email">        <div class="modal-sign__input-tooltip">It
                                is not possible to change email in the future. By specifying a
                                non-existent or incorrect email, the withdrawal of funds from the
                                account will be impossible.</div>
                            <div data-role="email-misspell-hint" class="misspell-hint hide hint -danger">
                                Did you mean:           <span data-role="email-misspell-suggestion" class="misspell-hint-suggestion"></span>
                            </div>
                        </div>
                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Password</label>
                            <input type="password" name="password" value="" class="modal-sign__input-value" required="1" autocomplete="off" placeholder="Password">            </div>

                        <div class="modal-sign__input select">
                            <label class="modal-sign__input-label ">Currency</label>
                            <select name="currency" class="select__element">
                                <option value="">Select currency</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="USD" selected="selected">USD</option>
                                <option value="BRL">BRL</option>
                                <option value="IDR">IDR</option>
                                <option value="MYR">MYR</option>
                                <option value="INR">INR</option>
                                <option value="KZT">KZT</option>
                                <option value="RUB">RUB</option>
                                <option value="THB">THB</option>
                                <option value="UAH">UAH</option>
                                <option value="VND">VND</option>
                                <option value="NGN">NGN</option>
                                <option value="EGP">EGP</option>
                                <option value="MXN">MXN</option>
                                <option value="JPY">JPY</option>
                                <option value="BDT">BDT</option>
                            </select>
                            <div class="modal-sign__input-select form__select select__wrapper "><div class="select__result"><div><div data-value="USD"><span class="select__text">USD</span></div></div><i class="select__icon"></i></div><div class="select__options"><div data-value=""><span class="select__text">Select currency</span></div><div data-value="EUR"><span class="select__text">EUR</span></div><div data-value="GBP"><span class="select__text">GBP</span></div><div data-value="USD"><span class="select__text">USD</span></div><div data-value="BRL"><span class="select__text">BRL</span></div><div data-value="IDR"><span class="select__text">IDR</span></div><div data-value="MYR"><span class="select__text">MYR</span></div><div data-value="INR"><span class="select__text">INR</span></div><div data-value="KZT"><span class="select__text">KZT</span></div><div data-value="RUB"><span class="select__text">RUB</span></div><div data-value="THB"><span class="select__text">THB</span></div><div data-value="UAH"><span class="select__text">UAH</span></div><div data-value="VND"><span class="select__text">VND</span></div><div data-value="NGN"><span class="select__text">NGN</span></div><div data-value="EGP"><span class="select__text">EGP</span></div><div data-value="MXN"><span class="select__text">MXN</span></div><div data-value="JPY"><span class="select__text">JPY</span></div><div data-value="BDT"><span class="select__text">BDT</span></div></div></div>
                        </div>

                        <div class="modal-sign__input">
                            <div class="modal-sign__block-checked">
                                <label class="modal-sign__checked-container">
                                    <input type="checkbox" name="rules" value="1">                <span class="modal-sign__checked-checkmark"></span>
                                    <div>
                                        I confirm that I am 18 years old or older and accept <a href="https://qxbroker.com/documents/en/Service_Agreement_QTX.pdf" target="_blank" class="modal-sign__block-checked-forgot">Service Agreement</a>                </div>
                                </label>
                            </div>
                        </div>


                        <button class="modal-sign__block-button ">
                            <div>Registration</div>
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.3" cx="12" cy="12.75" r="12" transform="rotate(-90 12 12.75)" fill="white"></circle>
                                <path d="M12.5497 7.95321L12.1565 8.34628C12.0329 8.4697 11.9645 8.63467 11.9645 8.81028C11.9645 8.98609 12.0329 9.16599 12.1565 9.2894L14.6827 11.8308H6.65668C6.29473 11.8308 6 12.095 6 12.4568V13.013C6 13.3748 6.29473 13.7058 6.65668 13.7058H14.7113L12.1565 16.2421C12.0329 16.3657 11.9645 16.5212 11.9645 16.697C11.9645 16.8726 12.0329 17.033 12.1565 17.1565L12.5497 17.5475C12.8056 17.8033 13.2219 17.8022 13.4778 17.5464L17.8084 13.2153C17.9317 13.0919 18 12.9265 18 12.7494V12.7475C18 12.5718 17.9317 12.4068 17.8084 12.2835L13.4779 7.95321C13.222 7.69721 12.8056 7.69721 12.5497 7.95321Z" fill="white"></path>
                            </svg>
                        </button>
                    </form>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new EmailMisspellChecker({
                                emailInput: document.querySelector('#tab-2 input[name=email]'),
                                hintNode: document.querySelector('[data-role=email-misspell-hint]')
                            });
                        });
                    </script>                    <div class="modal-sign__footer">
                        <div class="modal-sign__footer-header">
                            <div class="modal-sign__footer-header-text">Sign in via</div>
                        </div>

                        <div class="modal-sign__social">
                            <a href="" class="modal-sign__social-button facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="" class="modal-sign__social-button google">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="tab-1" class="tabs__item ">
                    <form action="https://qxbroker.com/en/sign-in/" method="post" onsubmit="return QXvId.submit(this);" dir="auto">
                        <input type="hidden" name="_token" value="u5rIzD4jw6L2K6jkOCC6WBLXdIKZmddRqa6bJcaI">

                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Email</label>
                            <input type="email" name="email" class="modal-sign__input-value" required="1" placeholder="Email">        <div class="modal-sign__input-tooltip">It
                                is not possible to change email in the future. By specifying a
                                non-existent or incorrect email, the withdrawal of funds from the
                                account will be impossible.</div>
                        </div>

                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Password</label>
                            <input type="password" name="password" value="" class="modal-sign__input-value" required="1" autocomplete="off" placeholder="Password">            </div>

                        <div class="modal-sign__input">
                            <div class="modal-sign__block-checked">
                                <label class="modal-sign__checked-container">
                                    <input type="checkbox" name="remember" value="1" checked="checked">                <span class="modal-sign__checked-checkmark"></span>
                                    Remember me            </label>
                                <a href="https://qxbroker.com/en/password-recovery/" class="modal-sign__block-checked-forgot">
                                    Forgot your password?            </a>
                            </div>
                        </div>



                        <button class="modal-sign__block-button ">
                            <div>Sign in</div>
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.3" cx="12" cy="12.75" r="12" transform="rotate(-90 12 12.75)" fill="white"></circle>
                                <path d="M12.5497 7.95321L12.1565 8.34628C12.0329 8.4697 11.9645 8.63467 11.9645 8.81028C11.9645 8.98609 12.0329 9.16599 12.1565 9.2894L14.6827 11.8308H6.65668C6.29473 11.8308 6 12.095 6 12.4568V13.013C6 13.3748 6.29473 13.7058 6.65668 13.7058H14.7113L12.1565 16.2421C12.0329 16.3657 11.9645 16.5212 11.9645 16.697C11.9645 16.8726 12.0329 17.033 12.1565 17.1565L12.5497 17.5475C12.8056 17.8033 13.2219 17.8022 13.4778 17.5464L17.8084 13.2153C17.9317 13.0919 18 12.9265 18 12.7494V12.7475C18 12.5718 17.9317 12.4068 17.8084 12.2835L13.4779 7.95321C13.222 7.69721 12.8056 7.69721 12.5497 7.95321Z" fill="white"></path>
                            </svg>
                        </button>
                    </form>
                    <div class="modal-sign__footer">
                        <div class="modal-sign__footer-header">
                            <div class="modal-sign__footer-header-text">Sign in via</div>
                        </div>

                        <div class="modal-sign__social">
                            <a href="https://qxbroker.com/oauth/facebook" class="modal-sign__social-button facebook">
                                <i class="icon icon__facebook-login"></i>
                            </a>
                            <a href="https://qxbroker.com/oauth/google" class="modal-sign__social-button google">
                                <i class="icon icon__google"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="popup-modal__footer"></div>
            </div>
        </div>
    </div>


@endsection
