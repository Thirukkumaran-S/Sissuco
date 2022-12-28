@extends('header')
@section('content')

<link rel="stylesheet" href="/css/loginstyle.css"/>

    

   
                     <div class="wrapper">
                            
                                
                            
                               <h2>Login</h2>
                            

                            @if (session('error'))
                                <span class="text-danger"> {{ session('error') }}</span>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-field">
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address.">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="input-field">
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="chekbox-text">
                                    <div class="RememberMeinput">
                                        <input class="check-box" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="RememberMe-Text" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button >
                                    Login
                                </button>
                                <div class="line"></div>
                                <div class="media-option">
                                    <a href="{{ route('facebook.login') }}" class="facebook">
                                        <img src="img/facebook.png" class="facebook-img"> Login with Facebook
                                    </a>
                                </div>
                                <div class="media-option">
                                <a href="{{ route('google.login') }}" class="google">
                                    <img src="img/google.png" class="google-img"> Login with Google
                                </a>
                                </div>
                            </form>
                            

                            <div class="text-center">
                                <a class="small" href="{{('register')}}">Create an Account!</a>
                            </div>
                        
                    </div>
                    



        

@endsection('content')
