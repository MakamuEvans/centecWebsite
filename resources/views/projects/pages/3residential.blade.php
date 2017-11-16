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
                            <h3 class="modal-title">Residential Power Backup System</h3>
                        </div>
                        <div class="col-md-12">
                            <div id="presidential" class="carousel">

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{url('img/riara.jpg')}}" alt="Chania">
                                    </div>
                                </div>

                                <a class="carousel-control left" href="#presidential" data-slide="prev"><i
                                            class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="carousel-control right" href="#presidential" data-slide="next"><i
                                            class="glyphicon glyphicon-chevron-right"></i></a>

                            </div>
                            <br><br>
                            <p>
                                We installed <span class="highlight">3kw</span> of power back up system for residential power
                                back up in Riara , Nairobi for mr David Langat </p>
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