@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-md-12">
                        <div class="header">
                            <h3 class="modal-title">Installation of Solar Power in Turkana County</h3>
                        </div>
                        <div class="col-md-12">
                            <div id="modalCarousel" class="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner"style="text-align: center">
                                    <div class="item active">
                                        <img src="{{url('img/rea-logo.jpg')}}" alt="Chania">
                                    </div>

                                    <div class="item">
                                        <img src="{{url('img/batteries.jpg')}}" alt="Chania">
                                    </div>
                                </div>

                                <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i
                                            class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i
                                            class="glyphicon glyphicon-chevron-right"></i></a>

                            </div>
                            <br><br>
                            <p>
                                In partnership with Rural Electrification Authority,<br>
                                We performed the Installation of <span class="highlight">40kwp</span> solar energy to
                                power 27
                                schools in Turkana County, as part of the last mile connectivity programme

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
    </section>
    @endsection