@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Why Go Solar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="">
                        <h3>Why <span class="highlight">Go Solar?</span></h3>
                    </div>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span> It’s clean, free, and reliable.<br><br>
            <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span>The sun is ever present in Kenya all year around.<br><br>
            <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span>Its warranted for 25 years and an operational service life of over 35years. <br><br>
            <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span>The backup included will ensure constant power whether grid is available or not.<br><br>
            <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span>The system is self-financing. The savings derived from the cheaper self-generation will
                    finance the project fully in principal and interest with a healthy saving every day.

                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection