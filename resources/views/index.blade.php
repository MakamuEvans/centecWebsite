<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sentimental Energy">
    <meta name="twitter:description" content="Cheap Reliable Energy In Kenya">
    <meta name="twitter:image:src" content="{{url('img/solar-panel.jpg')}}">
    <meta name="twitter:domain" content="http://www.sentecltd.com">

    <meta property="og:title" content="Sentimental Energy" />
    <meta property="og:image" content="{{url('img/solar-panel.jpg')}}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:url" content="http://www.sentecltd.com" />
    <meta property="og:description" content="Cheap reliable Energy in Kenya" />

    <title>Sentimental Energy</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href={{url('/lib/font-awesome/css/font-awesome.min.css')}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{url('css/agency.min.css')}}" rel="stylesheet">
    <link href="{{url('css/webcss.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="fixedsocial">
    <div class="facebookflat">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::fullUrl()}}" target="_blank">
            <img src="{{ url('img/fb50.png') }}">
        </a>
    </div>
    <div class="twitterflat">
        <a href="https://twitter.com/share" target="_blank">
            <img src="{{ url('img/tw50.png') }}">
        </a>
    </div>
</div>
    <!-- Navigation -->
    @include('nav')
    <!-- Header -->
    @yield('content')

    @include('footer')

    <!-- jQuery -->
    <script src="{{url('lib/jquery/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{url('js/agency.min.js')}}"></script>

</body>

</html>
