<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/exam.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.bootstrap5.min.css">
    <title>Document</title>
<style>
    	body{ 
		background: #98ff98;
        font-size: 120%;
	}
    .img{
	position: absolute;
	height: 100%;
<<<<<<< HEAD
	width: 100%
=======
    width: 100%
>>>>>>> 8afe350c4e1ee86b912a6c803f6ff948a31e0dfe
}
.card {
    position: relative;
    background: transparent;
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    top: 13%;
    margin-left: 45%;
    display: flex;
    flex-direction: column;
    height: 100%;
    background-clip: border-box;
    border: 1px solid rgba(4, 4, 4, 4.125);
    border-radius: 1rem;
}
    .card-header{
	background: transparent;
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
<<<<<<< HEAD
@section('content')


<img class = "img"src="image/Color (3).gif" alt="" width="600" height="400">
=======
</head>
<body>
<img class = "img"src="image/Color (3).gif" alt="">
>>>>>>> 8afe350c4e1ee86b912a6c803f6ff948a31e0dfe

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" >
            <div class="card">
                <div class="card-header">{{ __('LOGIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end " style="color: #FDFBFC; font-family: italic;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }} " placeholder="Input Email Address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback bg-transparent" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #FDFBFC; font-family: italic;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" placeholder="Input Password" required autocomplete="current-password">

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
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <center><h6 style="color:aqua;">If you dont have account click to<a class="btn btn-link text-coral" href="{{ route('register') }}"> Register</a></h6></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
</body>
</html>