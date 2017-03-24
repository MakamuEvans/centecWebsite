<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sentimental Energy | Kenya - Affordable Reliable Solar Energy for All</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Affordable Reliable Solar Energy for All | Kenya"/>
    <meta name="author" content="Sentimental Energy">
    <link rel="icon" href="{{url('img/logo3.svg')}}" type="image/x-icon">


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sentimental Energy">
    <meta name="twitter:description" content="Affordable Reliable Energy In Kenya">
    <meta name="twitter:image:src" content="{{url('img/logo.svg')}}">
    <meta name="twitter:domain" content="http://www.sentecltd.com">

    <meta property="og:title" content="Sentimental Energy" />
    <meta property="og:image" content="{{url('img/logo.svg')}}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:url" content="http://www.sentecltd.com" />
    <meta property="og:description" content="Affordable reliable Energy in Kenya" />
    <!-- css -->
    <link href="{{url("css/bootstrap.min.css")}}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{url("plugins/flexslider/flexslider.css")}}" rel="stylesheet" media="screen" />
    <link href="{{url("css/cubeportfolio.min.css")}}" rel="stylesheet" />
    <link href="{{url("css/style.css")}}" rel="stylesheet" />

    <!-- Theme skin -->
    <link id="t-colors" href="{{url("skins/default.css")}}" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="{{url("bodybg/bg1.css")}}" rel="stylesheet" type="text/css" />
    <link id="bodybg" href="{{url("css/sentec.css")}}" rel="stylesheet" type="text/css" />

</head>
<body style="background-color: white">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=458817457575935";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

{{--<div id="fixedsocial">
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
</div>--}}



<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="top" style="padding: 0px">
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <ul class="social-network pull-right">
                            <li><a href="https://www.facebook.com/sentimentalenergy/" data-placement="bottom" style="color: green" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/SentecLtd" data-placement="bottom" style="color: green" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div id="sb-search" class="sb-search" style="visibility: hidden">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search" title="Click to start searching"></span>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        @include('partials.nav')
    </header>
    <!-- end header -->

    @yield('content')

    @include('partials.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url("js/jquery.min.js")}}"></script>
<script src="{{url("js/modernizr.custom.js")}}"></script>
<script src="{{url("js/jquery.easing.1.3.js")}}"></script>
<script src="{{url("js/bootstrap.min.js")}}"></script>
<script src="{{url("plugins/flexslider/jquery.flexslider-min.js")}}"></script>
<script src="{{url("plugins/flexslider/flexslider.config.js")}}"></script>
<script src="{{url("js/jquery.appear.js")}}"></script>
<script src="{{url("js/stellar.js")}}"></script>
<script src="{{url("js/classie.js")}}"></script>
<script src="{{url("js/uisearch.js")}}"></script>
<script src="{{url("js/jquery.cubeportfolio.min.js")}}"></script>
<script src="{{url("js/google-code-prettify/prettify.js")}}"></script>
<script src="{{url("js/animate.js")}}"></script>
<script src="{{url("js/custom.js")}}"></script>


</body>
</html>