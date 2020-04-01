<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>maa.com.ng | @yield('title')</title>
  <link rel="stylesheet" href="{{asset('theme/style.css') }}" />
</head>

<body>
  <header>
    <!--navigation-->
    <nav id="navbar">
      <ul>
        <a href="/" class="logo"><img src="{{asset('theme/images/logo.jpg') }}" alt="logo" width="60px" /></a>
        <a href="/" class="hide-desktop hide">MOBILE ADVERTISING AGENTS</a>
        <li><a href="/about">About</a></li>
        <li><a href="/ads">Running Ads</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="tel:08030408674">Contact us</a></li>

      </ul>




@guest
      <div class="button">
        @if (Route::has('register'))
        <a class="btn cl" href="{{route('register')}}">Register</a>
        @endif
        <a class="btn cla" href="{{route('login')}}">Sign In</a>
      </div>
      @else
      <ul>
            <li><a href="/dashboard">Dashboard</a></li>
          <li>{{ Auth::user()->firstName }}</li>
          <li>
            <a class="btn cl" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </li>
      </ul>
@endguest
      <!--mobile-menu-btn-->
      <img src="./images/menu.png" class="hide-desktop main-btn" alt="logo">


    </nav>
    <div class="hide-desktop mobile-nav">
      <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="ads.html">Running Ads</a></li>
        <li><a href="tel:08030408674">Contact us</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <button class="cl"><a href="signUp.html">Register</a></button> <br>
        <button class="cla"><a href="signIn.html">Sign In</a></button>
      </ul>
    </div>


  </header>

 {{-- this is the main content --}}
 @yield('content')

  <footer>
    <!--footer-->
    <div class="footer1">
      <p>
        <img src="{{ asset('theme/images/logo.jpg') }}" alt="logo" /><a href="index.html">Mobile Advertising
          Agents</a>
      </p>
      <ul>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('ads')}}">Running Ads</a></li>
        <li><a href="{{route('faq')}}">FAQ</a></li>
        <li><a href="tel:08030408674">Contact us</a></li>

      </ul>
    </div>

    <div class="contact">
      <small> © 2020 MMA Nigeria</small>
      <small> Email us: hello@maa.com.ng</small>
      <small>Call us: 0809 522 1113 0814 742 8084</small>
    </div>
  </footer>

  <script>
    /*var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-90px";
      }
      prevScrollpos = currentScrollPos;
    }*/

    document.querySelector('.main-btn').addEventListener('click', () => document.querySelector('.mobile-nav')
      .classList.toggle('show'));
  </script>
</body>


</html>
