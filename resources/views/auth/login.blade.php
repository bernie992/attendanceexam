@extends('layouts.app')

<style>
    	body{ 
		background: #98ff98;
        font-size: 120%;
	}
    .img{
	position: absolute;
	height: 100%;
	width: 100%
}
.card {
    position: relative;
    background: linear-gradient(-45deg, #a40606 00%, #d98324 50%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    top: 15%;
    margin-left: 50%;
    display: flex;
    flex-direction: column;
    height: 100%;
   
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
    .card-header{
	background: linear-gradient(-45deg, #a40606 0%, #d98324 50%);
	background-size: 400% 400%;
    color: white;
	animation: gradient 15s ease infinite;
	height: 8vh;
    text-align: center;
     font-family: italic;
  
    
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
@media screen and (max-width: 400px) {
  .card, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
</style>
@section('content')


<img class = "img"src="image/Color (3).gif" alt="" width="600" height="400">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15" >
            <div class="card">
                <div class="card-header">{{ __('LOGIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end " style="color: white; font-family: italic;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: italic;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="color: white; font-family: italic;" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button><br>
                                <h6 style="color:white;">If you dont have account click to<a href="{{ route('register') }}"> Register</a></h6>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
