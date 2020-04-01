@extends('layouts.temp')

@section('content')
<header>
 <!--main-->
 <main class="ups">
    <div class="container1">
        <div id="form">
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="form-signin-heading"> Sign Up</h2>
                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name" required autocomplete="lastName" autofocus>

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="password-confirm" type="password" placeholder="Confirmed Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                <button class="button" type="submit">
                    <p> Sign Up</p>
                </button>

                <p class="small smaller">
                    Already have an account, <a href="{{route('login')}}">Sign In </a> <br>

                    <span style="font-size: smaller;">By signing up, you agree to our terms <br />and
                        conditions </span>
                </p>

            </form>

        </div>
    </div>
</main>

</header>

@endsection
