@extends('layouts.authmaster')
@section('pagetitle')
    Login Page
@endsection
@section('metacontent')
    Login Page of ClinicJet
@endsection
@section('customcss')
    <link rel="stylesheet" href="{{asset('css/logincustom.css')}}">
@endsection
@section('content')
    <div class="se-pre-con"></div>
        
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(../assets/pages/img/login/bg1.jpg)">
                        <img class="login-logo" src="../assets/pages/img/login/logo.png" alt="ClinicJet" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <h1>Login to ClinicJet!!</h1>
                        <p> Discover how we can help deliver patient-centered care. </p>
                        
                        <form action="{{ route('login') }}" class="login-form" method="POST">
                            {{csrf_field()}}
                            {{--  <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>  --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group " type="text" autocomplete="off" placeholder="Registered e-mail id" name="email" id="email" value="{{ old('email') }}"  required/>
                                </div>

                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="{{route('password.request')}}" >Forgot Password?</a>
                                    </div>
                                    <button class="btn green" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                    {{--  footer  --}}
                    @include('partials._authfooter') 

                </div>
            </div>
        </div>
        
@endsection

@section('customjs')
    <script src="{{asset('js/logincustom.js')}}"></script>
@endsection