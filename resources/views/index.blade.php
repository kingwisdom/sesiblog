@extends('layouts.temp')

@section('title')
    Home Page
@endsection

@section('content')

 <!--main-->
 <main>
    <div class="carousel">
        <!--Carousel-->
        <h1>Connect and Get Paid <br />Advertising on WhatsApp</h1>
      </div>

    <div class="container">
      <div class="maa-intro">
        <h3>What is MAA</h3>
        <p>
          MAA stands for Mobile Advertising Agents, an advertising firm currently building an advertising community to
          be made up of broadcasters, clients, audience and agent, with the aim and objective of promoting and
          advertising members businesses by broadcasting / posting / sharing using the most widely use and effective
          social media platform: Whatsapp.
        </p>
      </div>
      <div class="how">
        <!--how it works-->
        <h4>How it Works</h4>
        <div class="download">
          <img src="{{asset('theme/images/download.png') }}" alt="download" />
          <span>
            <h3>Download a running ad</h3>
            <p>
              On regular occasion, we have adverts uploaded to this page, all you need is to download such advert(s) to
              your phone and share to your other whatsapp contacts.
            </p>
          </span>
        </div>

        <div class="share">
          <img src="{{asset('theme/images/share.png') }}" alt="share" />
          <span>
            <h3>share with your Contacts</h3>
            <p>
              This includes (1) broadcasting to a selected group of friends in your whatsapp phones, (2) posting to a
              whatsapp group which you belong, (3) placing on your whatsapp status. You can download up to 4 (max) ads
              and share.
            </p>
          </span>
        </div>

        <div class="sreenshot">
          <img src="{{asset('theme/images/screenshot.png') }}" alt="screenshot" />
          <span>
            <h3>Send a screenshot</h3>
            <p>
              Screenshots are expected from you, this is the only evidence needed by MAA to prove that the adverts were
              actually shared and received by your contacts. By sending the required screenshots as at when due, you
              have initiated a payment process.
            </p>
          </span>
        </div>

        <div class="get-paid">
          <img src="{{asset('theme/images/get-paid.png')}}" alt="payment" />
          <span>
            <h3>Get paid immediately</h3>
            <p>
              Once the necessary screenshots have been sent, approved and claim calculated, payment is made within 24
              hours into your registered bank account. It is as simple as that.
            </p>
          </span>
        </div>
      </div>
    </div>

    <div class="button-bg">
      <button class="button-class"><a href="{{route('register')}}">Get Started</a></button>
    </div>
    </div>
    <div class="user-story">
      <div class="testimony">
        <!--testimony-->
        <img src="{{asset('theme/images/testimony.png') }}" alt="testimony" />
        <div>
          <h3>User testimony</h3><br>
          <p>
            At first I thought this was another <b><i>"get-rich-scam"</i></b> but I was surprised at the simplicity and
            genuineness of this. <br>No registration fee, no third party intervention, no referral, just me, my smart
            phone, at my own convenience, my choice of advert. Come to think of it, I actually rendered a service by
            sharing third party adverts to my friends; which MAA deem fit to be compensated for. <br>

            MAA is a easy and secure way of making money. You should share this amazing platforms with your friends.
            <br><br>
            <span><b>- Pelumi Coker</b></span>
          </p>
        </div>

      </div>
    </div>

    <div class="running-ads">
      <h3>Running Ads</h3>
      <!--running-ads-->
      <div class="images">
        <img src="{{asset('theme/images/Rectangle 7.png') }}" alt="advert" />
        <img src="{{asset('theme/images/Rectangle 8.png') }}" alt="advert" />
        <img src="{{asset('theme/images/Rectangle 9.png') }}" alt="advert" />
        <img src="{{asset('theme/images/Rectangle 10.png') }}" alt="advert" />
        <img src="{{asset('theme/images/Rectangle 11.png') }}" alt="advert" />
        <img src="{{asset('theme/images/Rectangle 12.png') }}" alt="advert" />
      </div>
    </div>
    <div class="cta">

      <button class="action"><img src="{{asset('theme/images/logos_whatsapp.png' )}}" alt=""><a>
          Join Our WhatsApp Platform
        </a></button>
    </div>

  </main>

@endsection
