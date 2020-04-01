@extends('layouts.temp')

@section('title')
    Sign In
@endsection

@section('content')
<header>
<div class="container1">
    <div id="hero-header">
        <h1>Welcome Back</h1>
        <p>
            Make money the easy way, Sign in to your account and get started
        </p>
        <p class="small hide-mobile">
            Learn more about <a href="faq.html"><b>Mobile Advertising Agency</b></a>
        </p>
    </div>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-signin-heading">Account Login</h2>
        <input type="email" class="form-control" name="email" placeholder="email" required="" autofocus="" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" class="form-control" name="password" placeholder="password" required="" />

        <button class="button" type="submit">
            <p> Sign In</p>
        </button>

        <p class="small smaller">
            Dont have an account, <a href="route('register')">Sign Up  </a>
        </p>
    </form>
</div>



</header>
@endsection
