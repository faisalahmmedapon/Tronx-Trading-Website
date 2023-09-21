@extends('frontend.app')

@section('meta_title', 'Sign-in')
@section('meta_keywords', '')
@section('meta_description', '')

@section('content')


    <div class="main sign__container">
        <div class="modal-sign__container sign__form">
            <div class="sign__title">Sign In To Your Account</div>

            <div class="modal-sign__block">
                <div class="modal-sign__tabs form" dir="auto">
                    <div class="modal-sign__tabs-block">
                        <a href="{{route('login')}}" class="modal-sign__tab active" data-value="1">
                            Login </a>
                        <a href="{{route('register')}}" class="modal-sign__tab " data-value="2">
                            Registration </a>
                    </div>
                </div>

                <div id="tab-2" class="tabs__item active">
                    <form action="{{route('login')}}" method="post">
                        @csrf

                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Email</label>
                            <input type="email" name="email" class="modal-sign__input-value focus-tooltip" required="1"
                                   autocomplete="off" placeholder="Email">
                            @if($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="modal-sign__input">
                            <label class="modal-sign__input-label ">Password</label>
                            <input type="password" name="password" value="" class="modal-sign__input-value" required="1"
                                   autocomplete="off" placeholder="Password">
                            @if($errors->has('password'))
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif                     </div>
                        <button class="btn btn-primary modal-sign__block-button " type="submit">Sign in</button>
                    </form>

                    <div class="modal-sign__footer">
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
                <div class="popup-modal__footer"></div>
            </div>
        </div>
    </div>



@endsection
