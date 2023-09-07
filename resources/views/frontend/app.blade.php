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
    <link rel="stylesheet" href="{{asset('frontend')}}/css/main.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <script src="{{asset('frontend')}}/js/imask.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async="" src="{{asset('frontend')}}/js/js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @stack('style')
</head>

<body>


@include('frontend.partials.navbar')
<div class="main">

    @yield('content')

</div>
@include('frontend.partials.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{asset('frontend')}}/js/main.min.js"></script>
<a href="https://freekassa.ru/" style="display: none">
    <img src="{{asset('frontend')}}/images/17.png">
</a>

<script defer="defer" src="{{asset('frontend')}}/js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"></script>

@stack('script')

</body>

</html>
