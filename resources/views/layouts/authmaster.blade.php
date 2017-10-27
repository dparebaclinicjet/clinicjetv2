<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        @include('partials._authheader')        
    </head>
    <!-- END HEAD -->

    <body class=" login">
        
        @yield('content')

        @include('partials._authscripts') 
        
    </body>

</html>