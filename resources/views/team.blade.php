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
                    {{--<h2><i class="fa fa-info-circle"></i> Page Under Maintenance</h2>
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


                    </h6>--}}
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{url('img/paul.jpg')}}" class="img-responsive"
                                 style="border-radius: 50px;">
                        </div>
                        <div class="col-lg-8">
                            <h4 style="text-align: left">Paul Simiyu Mabonga <span>&#8213; Managing Director and Founder</span></h4>
                            <div class="testimonialslide clearfix flexslider">
                                <ul class="slides">
                                    <li>
                                        <blockquote>
                                            Designation - East Africa Region
                                        </blockquote>
                                        <blockquote>
                                            P.O Box 103690-00101,
                                            Nairobi.
                                            <a href="mailto:pmabonga@gmail.com">pmabonga@gmail.com</a>
                                            <a href="mailto:simiyu@sentecltd.com">simiyu@sentecltd.com</a>
                                            0725 -445-459.
                                        </blockquote>
                                    </li>
                                    <li>
                                        <span class="pullquote-left" style="text-align: left">
                                            Paul Simiyu Mabonga is  a dedicated energy engineer, effective projects coordinator and manager with a passion to
propagate the use of clean energy through audit, engineering, procurement, construction, operations
and maintenance of solar energy systems. <br>He hold Bachelor of Science degree in Mechanical and
Production Engineering (Moi University) and currently pursuing Masters in business administration
(strategic management –JKUAT). He have six(6) years’ experience in energy sector with a focus on
development, construction and service .His desire is to work, develop and perfect into a
multidisciplinary team leader in energy and resources management for accessibility and environmental
conservation.

                                        </span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{url('img/chesire.jpg')}}" class="img-responsive"
                                 style="border-radius: 50px;">
                        </div>
                        <div class="col-lg-8">
                            <h4 style="text-align: left">Chesire Kipkemboi Edwin <span>&#8213; Director Finance and Strategy</span></h4>
                            <div class="testimonialslide clearfix flexslider">
                                <ul class="slides">
                                    <li>
                                        <blockquote>
                                            Designation - East Africa Region
                                        </blockquote>
                                        <blockquote>
                                            P.O Box 103690-00101,<br>
                                            Nairobi.<br>
                                            <a href="mailto:chesireedwin@gmail.com">chesireedwin@gmail.com</a> <br>
                                            <a href="mailto:chesire@sentecltd.com">chesire@sentecltd.com</a> <br>
                                            0723 -696-146.
                                        </blockquote>
                                    </li>
                                    <li>
                                        <span class="pullquote-left" style="text-align: left">
                                             Chesire Kipkemboi Edwin is a holder of B. Tech. in Mechanical and Production Engineering form Moi University and masters in Energy Technology from Jomo Kenyatta University of Agriculture and Technology.  He is a registered graduate engineer with the Engineers Registration Board of Kenya. He has expansive knowledge of the Kenya’s energy sector having worked with the Ministry of Energy and Petroleum for the past 6 years. He is has undertaken key tasks including the performing prefeasibility study for Kenya’s Nuclear Power Programme, Development of Energy Bill 2015 and Development of the long-term energy plan for the country: the Least Cost Power Development Plan
                                        </span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{--<div class="row">
                        <div class="col-lg-4">
                            <img src="{{url('img/photo.png')}}" class="img-responsive"
                                 style="border-radius: 50px;">
                        </div>
                        <div class="col-lg-8">
                            <h4 style="text-align: left">Johannes Oos <span>&#8213; Technical Director</span></h4>
                            <div class="testimonialslide clearfix flexslider">
                                <ul class="slides">
                                    <li>
                                        <blockquote>
                                            Designation - East Africa Region
                                        </blockquote>
                                        <blockquote>
                                            P.O Box 103690-00101,
                                            Nairobi.
                                            <a href="mailto:oosjoh@gmail.com">oosjoh@gmail.com</a>
                                            <a href="mailto:joos@sentecltd.com">joos@sentecltd.com</a>
                                            0725 -445-459.
                                        </blockquote>
                                    </li>
                                    <li>
                                        <span class="pullquote-left" style="text-align: left">
                                            <span><u>Qualifications</u></span><br>
                                            CERTIFICATE IN ELECTRICAL INSTALATIONS<br>
                                            DIPLOMA IN ELECTRICAL INSTALLATIONS <br>
                                            BACHELORS IN ELECTRICAL ENGINEERING<br><br>


                                            <span><u>Experience</u></span><br>
                                           Twelve(12) Years

                                        </span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>--}}
                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection