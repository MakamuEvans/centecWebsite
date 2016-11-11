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



        </div>
        <div class="col-md-4">
            @include('sidebar')
        </div>
    </div>
</div>
@endsection