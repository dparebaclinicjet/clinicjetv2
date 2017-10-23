<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="ClinicJet" content="">

    <title>{{config('app.name','ClinicJet')}} | Welcome</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('device-mockups/device-mockups.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/new-age.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">ClinicJet <b>(We are Beta Currently!!)</b></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#download">Get Started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#register"><b><i>Register</i></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#login"><b><i>Login</i></b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5" id="landingpage-quote">ClinicJet is an amazing, easy-to-use cloud based electronic health record system for doctors and patients!!</h1>
                        <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">

                        <!-- <div class="device-mockup iphone6_plus portrait white">  -->
                        <div class="device-mockup ipad_air_2 potrait grey">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <!-- <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">  -->
                                    <img src="img/Clinicjet.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="download bg-primary text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">Discover what all the buzz is about!</h2>
                    <p>Access your patients records. Anytime! Anyplace! </p>
                    <div class="badges">
                        <a href="#" class="btn btn-outline-danger regbtn">Register</a>
                        <a href="#" class="btn btn-outline-secondary regbtn">Login Now!!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Easy to use, Amazing Features</h2>
                <p class="text-muted">Check out what you can do with ClinicJet!</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container">
                        <!-- <div class="device-mockup iphone6_plus portrait black"> -->
                        <div class="device-mockup ipad_air_2 potrait black">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/Clinicjet.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-cloud-upload text-primary"></i>
                                    <h3>Cloud Based</h3>
                                    <p class="text-muted">Access your patients records.Anytime! Anyplace!</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-heartbeat text-primary"></i>
                                    <h3>Speciality Specific Funtionality</h3>
                                    <p class="text-muted">Speciality Specific Templates!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-pie-chart text-primary"></i>
                                    <h3>Charting</h3>
                                    <p class="text-muted">Chart your patient records!</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-file-audio-o text-primary"></i>
                                    <h3>Speech to Text</h3>
                                    <p class="text-muted">Convert what you speak to Text, Spend more time with your patients!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start e-prescribing.</h2>
                <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
        <div class="container">
            <h2>We
                <i class="fa fa-heart"></i> new friends!</h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item social-facebook">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item social-google-plus">
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <h1><i class="fa fa-phone-square" aria-hidden="true"></i> Talk to us: +91 7678088360</h1>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 Queira Technologies Private Limited. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/new-age.min.js')}}"></script>

</body>

</html>