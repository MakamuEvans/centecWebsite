@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="text-align: center">
                    <h2><i class="fa fa-info-circle"></i> Page Under Maintenance</h2>
                    <h4>Please try again later</h4>
                    <h6>
                        <a href="{{url('portfolio')}}" class="readmore" style="cursor: pointer">
                            Check out our Portfolio <i class="fa fa-angle-right"></i>
                        </a>
                        <br>
                        or
                        <br>
                        <a href="{{url('why-go-solar')}}" class="readmore" style="cursor: pointer">
                            Why Should you go Solar? Find Out <i class="fa fa-angle-right"></i>
                        </a>


                    </h6>

                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection