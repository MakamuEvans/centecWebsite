<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sentimental Energy | Kenya - Cheap Reliable Solar Energy for All</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bootstrap 3 template for corporate business" />
    <!-- css -->
    <link href="{{url("css/bootstrap.min.css")}}" rel="stylesheet" />
    <link href="{{url("plugins/flexslider/flexslider.css")}}" rel="stylesheet" media="screen" />
    <link href="{{url("css/cubeportfolio.min.css")}}" rel="stylesheet" />
    <link href="{{url("css/style.css")}}" rel="stylesheet" />

    <!-- Theme skin -->
    <link id="t-colors" href="{{url("skins/default.css")}}" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="{{url("bodybg/bg1.css")}}" rel="stylesheet" type="text/css" />
    <link id="bodybg" href="{{url("css/sentec.css")}}" rel="stylesheet" type="text/css" />

</head>
<body>
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
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="topleft-info">
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network pull-right">
                            <li><a href="#" data-placement="bottom" style="color: green" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="bottom" style="color: green" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
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