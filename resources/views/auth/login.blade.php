<title>Material Login Form a Responsive Widget Template :: w3layouts</title>
<!-- meta tags -->
<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="../img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
    Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"/>

<link href="css/login_style.css" rel="stylesheet" type="text/css" />

<link href="css/fontawesome-all.css" rel="stylesheet" />

<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet"> 


</head>


<body background="../img/login.jpg">
<h1>H<sub>2</sub>ome</h1>
<div class=" w3l-login-form">
    <h2>Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class=" w3l-form-group">
                            <label>Username:</label>
                            <div class="group">
                                <i class="fas fa-user"></i>
                                <input type="text"input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class=" w3l-form-group">
                            <label>Password:</label>
                            <div class="group">
                                <i class="fas fa-unlock"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
                        </div>
                    </form>
                    <p class=" w3l-register-p">
                        Don't have an account?<a href="{{ url('/register')}}" class="register">
                         Register</a>
                         </p>
                    </div>
                    <footer>
                       <!-- <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
                    </footer>
                
                </body>
                
                </html>