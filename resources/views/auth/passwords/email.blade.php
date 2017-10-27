@extends('layouts.authmaster')
@section('pagetitle')
    Forgot Password
@endsection
@section('metacontent')
    Forgot Password Page of ClinicJet
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
                        <h1>Forgot Password!!</h1>
                        <p> Don't Worry!! We've got this covered. </p> 
                       
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="{{ route('password.email') }}" method="POST">
                            {{csrf_field()}}
                            
                           
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                             @if ($errors->any())
                                <br><br>
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <br><br>
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" id="email" value="{{ old('email') }}" /> </div>
                            <div class="form-actions">
                                <a type="button" id="back-btn" href="/login" class="btn green btn-outline">Back</a>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
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