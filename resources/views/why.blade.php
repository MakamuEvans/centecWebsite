@extends('layout')
@section('content')
        <!-- Header -->
<div class="col-md-10 col-md-offset-1" style="background-color: white">
    <div class="row" style="margin-top: 150px;margin-left: 10px;margin-right: 10px">
        <div class="col-md-8">
            <div class="row" style="text-align: left">
                <ol class="breadcrumb" style="margin-bottom: 0%">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Why Go Solar</a></li>
                </ol>
            </div>
            <h2 class="text-muted" style="text-align: center">Why Go Solar</h2>
            <br>
            <br>
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
        <div class="col-md-4">
            @include('sidebar')
        </div>
    </div>
</div>
@endsection