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
                            <h3 class="modal-title">2400l swh systems at Rift Valley Technical Training Institute</h3>
                        </div>
                        <div class="col-md-12">
                            <div id="modalkatch" class="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{url('img/rv.jpeg')}}" alt="Chania">
                                    </div>

                                    <div class="item">
                                        <img src="{{url('img/rv2.jpeg')}}" alt="Chania">
                                    </div>
                                    <div class="item">
                                        <img src="{{url('img/rv3.jpeg')}}" alt="Chania">
                                    </div>

                                </div>

                                <a class="carousel-control left" href="#modalkatch" data-slide="prev"><i
                                            class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="carousel-control right" href="#modalkatch" data-slide="next"><i
                                            class="glyphicon glyphicon-chevron-right"></i></a>

                            </div>
                            <br><br>
                            <p>
                                2400l swh systems at Rift Valley Technical Training Institute, Eldoret
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