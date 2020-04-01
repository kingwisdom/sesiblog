@extends('layouts.temp')

@section('title')
Running Ads
@endsection

@section('content')
    <!--main-->

<div class="jumbotron2">
    <h1>Running Ads </h1>
</div>

<main>
    <!--main-->
    <div class="header">
        <h3>
            Running Ads
        </h3>
        <p> You can download a minimum of 5 ads. One of them must be a non-paid ad at least in every transaction.
            You must have an account to get started. Sign Up <a href="{{route('register')}}"><b> here</b></a></p>
    </div>
    <div class="ads runnning-ads">
        <!--running-ads-->
        <div class="images">
            <img src="{{asset('theme/images/Rectangle 7.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 8.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 9.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 10.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 11.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 12.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 7.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 8.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 9.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 10.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 7.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 8.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 9.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 10.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 11.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 12.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 10.png') }}" alt="advert" />
            <img src="{{asset('theme/images/Rectangle 11.png') }}" alt="advert" />

        </div>

        <div class="d-basic">
            <div class="basic">

                <h4>Basic Requirements for <br>downloading an Ad</h4>
                <ol>
                    <li> A smart phone with a whatsapp account and screenshot function
                    </li>
                    <li> A minimum of 50 contacts also with active whatsapp account </li>
                    <li> an AGENT have a certain commission for facilitating client for MAA</li>
                    <li>A business, service, products or skill you want people to know. (optional)
                        affordable price</li>
                    <li> A bank account</li>
                </ol>
                <div class="div vv"><a href="{{route('register')}}">Get Started</a> </div>
            </div>
        </div>


    </div>
    </div>
    </div>
</main>

@endsection