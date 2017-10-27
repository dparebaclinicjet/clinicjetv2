<meta charset="utf-8" />
        <title>{{config('app.name','ClinicJet')}} | @yield('pagetitle')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content= @yield('metacontent') name="description" />
        <meta content="" name="Dilip Pareba" />
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/components-rounded.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/login-5.css')}}">
        
        <link rel="shortcut icon" href="favicon.ico" /> 
        
        <link rel="stylesheet" href="{{asset('css/customloader.css')}}">
        @yield('customcss')