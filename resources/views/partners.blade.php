@extends('layout')
@section('content')
        <!-- Header -->
<div class="col-md-10 col-md-offset-1" style="background-color: white">
    <div class="row hait" style="margin-left: 10px;margin-right: 10px">
        <div class="col-md-8">
            <div class="row" style="text-align: left">
                <ol class="breadcrumb" style="margin-bottom: 0%">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Our Partners</a></li>
                </ol>
            </div>
            <h2 class="text-muted" style="text-align: center">Our Partners</h2>
            <div class="col-md-12">
                <div class="col-md-3">
                    <img src="{{url('img/gauzer.png')}}" class="imgf">
                </div>
                <p>
                    we are the sole appointed distributor for Xenos Energy water heating and street lighting products . <br>Our Contract signing was done in Nairobi.
                </p>
            </div>
            <div class="col-md-12">
                <h4 class="text-muted" style="text-align: center">About Gauzer</h4>
                <p>Gauzer was founded on 1972 by Dionissios Xenos with main focus on manufacturing heat accumulators for domestic use. Now the company is run by his two sons Dimitris and Michael Xenos. Gauzer expanded on its founders values of Quality and Honesty and have grown to become one of the leading companies in the solar water heating industry.</p>
            </div>



        </div>
        <div class="col-md-4">
            @include('sidebar')
        </div>
    </div>
</div>
@endsection