@extends('frontend.app')


@section('meta_title', 'About')
@section('meta_keywords', '')
@section('meta_description', '')


@section('content')

    <div>
        <div class="about_us__quotex__container">
            <div class="about_us__quotex" dir="auto">
                <h1>
                    About us                </h1>

                <h3 class="about_us__quotex-title">QUOTEX — it is a new level trading platform.</h3>

                <p class="about_us__quotex-text">
                    Our team launched the project in 2019, but has
                    already managed to declare itself. Each of our developers is a
                    specialist of the highest level with many years of experience. Some of
                    them gave more than 10 years of their life to upgrade their development
                    skills, and the team's total experience is 200 years.This experience
                    helped us to find the best mechanisms to create a modern platform.
                </p>
            </div>

            <img class="about_us__quotex__image" src="{{asset('frontend')}}/images/about-us.png" alt="about-us" srcset="{{asset('frontend')}}/images/about-us@2x.png 2x, {{asset('frontend')}}/images/about-us@3x.png 3x">
        </div>

        <div class="about_us__desires-container">
            <img class="about_us__desires-image" src="{{asset('frontend')}}/images/about-us-desires.png" alt="desires" srcset="{{asset('frontend')}}/images/about-us-desires@2x.png 2x, {{asset('frontend')}}/images/about-us-desires@3x.png 3x">
            <img class="about_us__desires-image__mobile" src="{{asset('frontend')}}/images/about-us-desires-mobile.png" alt="desires-mobile" srcset="{{asset('frontend')}}/images/about-us-desires-mobile@2x.png 2x, {{asset('frontend')}}/images/about-us-desires-mobile@3x.png 3x">

            <div class="about_us__desires" dir="auto">
                <h2 class="about_us__desires-title">We want everyone to be able to fulfill their desires and opportunities.</h2>
                <p class="about_us__desires-text">
                    Our team has created not just another project for
                    traders. First of all, we developed a platform for the widest possible
                    audience. For people who want to learn how to use advanced financial
                    instruments and develop their financial skills.                </p>
                <p>
                    Speaking of tools. QUOTEX provides over 400 free
                    tools to each client so that you can trade and earn money the way you
                    like. Choose any assets: currency quotes, stocks, majors, metals, oil or
                    gas, as well as the main trend of recent years - cryptocurrencies.
                </p>
            </div>
        </div>

        <div class="about_us__modern">
            <h2 class="about_us__modern-title">A modern platform for modern people</h2>
            <div class="about_us__modern-items">
                <p class="about_us__modern-item" dir="auto">
                    The main advantage of QUOTEX is its premium quallity
                    in everything and there is  no exceptions. Transparency of the
                    platform, advanced technologies, attractive conditions for participants -
                    all this makes us unique.                </p>
                <p class="about_us__modern-item" dir="auto">
                    Thanks to cooperation with reliable brokers, we have
                    achieved maximum control over quotations by the client. You can always
                    check all the indicators in person!                </p>
                <p class="about_us__modern-item" dir="auto">
                    Working to create a comfortable environment for all
                    users of the platform, we have implemented the best functionality in
                    terms of financial management. The lightning-fast speed of updating
                    quotes and the interface is what creates comfort of working with the
                    platform.                </p>
                <p class="about_us__modern-item" dir="auto">
                    Our support service deserves special attention. Each
                    of support staff member is a fan of his job. 24/7 lightning fast
                    feedback and a sincere desire to help that is why we are ahead of
                    alternative platforms. We are doing everything for your comfortable
                    pastime.                </p>
            </div>
        </div>

        <div class="about_us__work-container" dir="auto">
            <h2 class="about_us__work-title">How does the platform work?</h2>

            <p class="about_us__work-subtitle">4 simple steps</p>

            <div class="about_us__work-steps">
                <div class="about_us__work-step">
                    <div class="about_us__work-steps-block">
                        <img class="" src="{{asset('frontend')}}/images/about-us-work-step-1.png" alt="step-1" srcset="{{asset('frontend')}}/images/about-us-work-step-1@2x.png 2x, {{asset('frontend')}}/images/about-us-work-step-1@3x.png 3x">
                    </div>

                    <p class="about_us__work-steps__title">We choose</p>
                    <p>asset of interest.</p>
                </div>

                <div class="about_us__work-step">
                    <div class="about_us__work-steps-block">
                        <img class="" src="{{asset('frontend')}}/images/about-us-work-step-2.png" alt="step-2" srcset="{{asset('frontend')}}/images/about-us-work-step-2@2x.png 2x, {{asset('frontend')}}/images/about-us-work-step-2@3x.png 3x">
                    </div>

                    <p class="about_us__work-steps__title">Install</p>
                    <p>the size of the bet and the time of closing the deal.</p>
                </div>

                <div class="about_us__work-step">
                    <div class="about_us__work-steps-block">
                        <img class="" src="{{asset('frontend')}}/images/about-us-work-step-3.png" alt="step-3" srcset="{{asset('frontend')}}/images/about-us-work-step-3@2x.png 2x, {{asset('frontend')}}/images/about-us-work-step-3@3x.png 3x">
                    </div>

                    <p class="about_us__work-steps__title">We do</p>
                    <p>forecast according to the schedule for a given time.</p>
                </div>

                <div class="about_us__work-step">
                    <div class="about_us__work-steps-block">
                        <img class="" src="{{asset('frontend')}}/images/about-us-work-step-4.png" alt="step-4" srcset="{{asset('frontend')}}/images/about-us-work-step-4@2x.png 2x, {{asset('frontend')}}/images/about-us-work-step-4@3x.png 3x">
                    </div>

                    <p class="about_us__work-steps__title">We get</p>
                    <p>result of the transaction.</p>
                </div>
            </div>
        </div>

        <div class="about_us__problem-container">
            <div class="about_us__problem" dir="auto">
                <div class="about_us__problem-quotes"></div>

                <p class="about_us__problem-text">
                    The problem is that all the opportunities are
                    usually provided in private for close circle of people. And
                    participating in trading on the exchange, according to the majority, is
                    something complicated. Brokers, exchanges - all this is incomprehensible
                    to an ordinary person. Therefore, we are making a public platform for
                    everyone.                </p>
            </div>

            <img class="" src="{{asset('frontend')}}/images/about-us-problem.png" alt="problem" srcset="{{asset('frontend')}}/images/about-us-problem@2x.png 2x, {{asset('frontend')}}/images/about-us-problem@3x.png 3x">
        </div>

        <div class="about_us__demo-container">
            <div class="about_us__demo" dir="auto">
                <h2 class="about_us__demo-title">Any doubts?<br> Practice without risk with a demo account.</h2>
                <p class="about_us__demo-text">
                    We are open to our visitors. Therefore, if you have
                    distrust amid hundreds of projects related to trading on the stock
                    exchange, we hasten to reassure you. On our site you can use a demo
                    account. It has nothing to do with real money. So you can safely and
                    without risk test the mechanism of the platform.                    <span>QUOTEX: while others doubt, you act!</span>
                </p>

                <button class="about_us__demo-button">Demo account</button>
            </div>

            <div class="about_us__demo-image">
                <p class="about_us__demo-image__text">QUOTEX: while others doubt, you act!</p>
                <img class="" src="{{asset('frontend')}}/images/about-us-demo.png" alt="demo" srcset="{{asset('frontend')}}/images/about-us-demo@2x.png 2x, {{asset('frontend')}}/images/about-us-demo@3x.png 3x">
            </div>
        </div>

        <div class="about_us__innovation-container">
            <h2 class="about_us__innovation-title">Quotex: Innovation Platform<br> Digital Asset Trading</h2>

            <img class="about_us__innovation-image" src="{{asset('frontend')}}/images/about-us-innovation.png" alt="innovation" srcset="{{asset('frontend')}}/images/about-us-innovation@2x.png 2x, {{asset('frontend')}}/images/about-us-innovation@3x.png 3x">

            <div class="about_us__innovation-button" dir="auto">
                <button class="about_us__innovation-real">Open real account</button>
                <button class="about_us__innovation-demo">Demo account</button>
            </div>
        </div>
    </div>
@endsection
