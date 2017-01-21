@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Our Partners</li>
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
                        <h3>Our <span class="highlight">Partners</span></h3>
                    </div>
                    <img src="img/gauzer.png" alt="" class="img-responsive" />
                    <p>
                        we are the sole appointed distributor for Xenos Energy water heating and street lighting products . <br>Our Contract signing was done in Nairobi.
                    </p>
                    <div class="">
                        <h4>About <span class="highlight">Gauzer Energy</span></h4>
                    </div>
                    <p>
                        Gauzer was founded on 1972 by Dionissios Xenos with main focus on manufacturing heat accumulators for domestic use. Now the company is run by his two sons Dimitris and Michael Xenos. Gauzer expanded on its founders values of Quality and Honesty and have grown to become one of the leading companies in the solar water heating industry.
                    </p>

                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection