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
                    <div class="">
                        <h3>What we've <span class="highlight">Proudly</span> Accomplished</h3>
                    </div>

                    <div id="" class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-5 portifolio">
                                <div class="img">
                                    <img src="img/rea-logo.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="cbp-l-grid-projects-title">Solar Energy in Turkana County</div>
                                <a class="readmore pull-right" style="cursor: pointer" href="{{url('portfolio/solar-in-turkana')}}">Read More <i
                                            class="fa fa-angle-right"></i></a>
                            </div>

                            <div class="col-md-5 portifolio">
                                <div class="img">
                                    <div class="">
                                        <img src="img/cid.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">Solar Power Installation at CID</div>
                                <a class="readmore pull-right" style="cursor: pointer" href="{{url('portfolio/cid-installation')}}">Read More <i class="fa fa-angle-right"></i></a>


                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="img">
                                    <div class="">
                                        <img src="img/busia.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">Water heating System at ChefWest Hotel</div>
                                <a class="readmore pull-right" style="cursor: pointer" href="{{url('portfolio/Water-heating-system-at-chefwest-hotel')}}">Read More <i class="fa fa-angle-right"></i></a>


                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="img">
                                    <div class="">
                                        <img src="img/mariakani.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">Power for Mariakani Institute</div>
                                <a class="readmore pull-right" style="cursor: pointer" href="{{url('portfolio/power-for-mariakani')}}">Read More <i class="fa fa-angle-right"></i></a>


                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="">
                                    <div class="img">
                                        <img src="img/katch.jpeg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">5kva BackUp. Kakamega | 2017</div>
                                <a href="{{url('portfolio/5kva-in-kakamega')}}" class="readmore pull-right"
                                   style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="">
                                    <div class="img">
                                        <img src="img/loresho.jpeg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">7.8kwp Lighting. Loresho | 2017</div>
                                <a href="{{url('portfolio/loresho-lighting')}}" class="readmore pull-right"
                                   style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="">
                                    <div class="img">
                                        <img src="img/rv.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">2400l swh systems at Rift Valley Technical Training Institute</div>
                                <a href="{{url('portfolio/2400l-swh-systems-at-rvtti')}}" class="readmore pull-right"
                                   style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="">
                                    <div class="img">
                                        <img src="img/riara.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">3kw Residential Power Backup</div>
                                <a href="{{url('portfolio/3kv-residential')}}" class="readmore pull-right"
                                   style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="col-md-5 portifolio">
                                <div class="">
                                    <div class="img">
                                        <img src="img/ksm.jpeg" class="img-responsive" alt=""/>
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">1000kw Water Heating Kisumu</div>
                                <a href="{{url('portfolio/water-heating-kisumu')}}" class="readmore pull-right"
                                   style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
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