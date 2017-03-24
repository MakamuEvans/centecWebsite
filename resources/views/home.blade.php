@extends('app')
@section('content')
<section id="featured" style="background-color: #f2f2f2">
    <!-- start slider -->


    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                @include('partials.slider')
                <!-- end slider -->
            </div>
        </div>
    </div>


</section>

<section id="content" class="haha" style="background-color: #F2F2F2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center backimg">
                    <h2>About <span class="highlight">Sentimental Energy</span></h2>
                    <p style="color: black">
                        Sentimental Energy Company Ltd (SENTEC) is a duly registered company in Kenya since 2012 and was incorporated in the year 2016. It was formed out of a desire to provide low cost energy solutions to the region’s domestic, commercial and industrialization sector with emphasis on solar energy and low load consuming Lighting solutions. We design, develop, install and maintain solar power, solar water heating, power back up systems and LED lighting solutions. We are also involved massively in sales and distribution of solar panels, charge controllers, inverters, batteries and LED lights. The company has over four years of experience in the renewable energy industry centered on actual hands on experiences in design, sizing, installation and commissioning, energy audit and management.<br><br>
                        SENTEC is owned by a team of professionals with competent skills and experience in their respective fields of energy systems design, installation and management, financial project management and sales. Our mission is to become the leader in the alternative energy movement that takes place in the region with emphasis on the low cost affordable sustainable and reliable solar power, water heating and LED lighting solutions. The objective is to be the primary resource for providing consumers with the information they need in renewable energy, energy management and energy saving while providing quality services backed by quality products and workmanship. This sums up our customer care management policy.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
    </div>
    <!-- end divider -->

    <div class="container backimg">
        <div class="row">
            <div class="text-center">
                <h2>Our <span class="highlight">Core Values</span></h2>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-rocket fa-5x"></i>
                                </div>
                                <h4>Mission Statement</h4>
                                <p>
                                    To create social economic opportunities to our clients through provision of Affordable, Sustainable and Reliable Energy solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <h4>Customer Care Policy Statement</h4>
                                <p>
                                    To be the primary resource for providing clients with information in Renewable Energy, energy cost management and savings while backed by quality products and services towards reducing electricity cost by 50%.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-paper-plane-o fa-5x"></i>
                                </div>
                                <h4>Vision Statement</h4>
                                <p>
                                    Reliable and Affordable energy for all.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" style="margin-top: 50px">
            <div class="text-center">
                <h3>we <span class="highlight">Believe In</span></h3>
            </div>
            <div class="col-md-4">
                <p class="text-muted"><i class="fa fa-check-square-o fa-2x gr"></i>Quality products and services</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted"><i class="fa fa-check-square-o fa-2x gr"></i>Informative and educative</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted"><i class="fa fa-check-square-o fa-2x gr"></i>Professionalism in services delivery.</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted"><i class="fa fa-check-square-o fa-2x gr"></i>Reliability in supplies, deliveries and follow ups</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted"><i class="fa fa-check-square-o fa-2x gr"></i>Dependable workmanship in all projects undertaken.</p>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="solidline">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 banner">
                    <div class="col-lg-8">
                        <h4>Want to know more about Sentimental Energy?</h4>
                        <h4>or Request a Quote?</h4>
                        <h4>and enjoy our personalized services...</h4>
                    </div>
                    <div class="col-lg-4" style="margin-bottom: 10px">
                        <h4>Reach us on:</h4>
                        <h6>+254-725 445459 , 0738261640, +254-723696146<br>
                            <a href="mailto:info@sentecltd.com">info@sentecltd.com</a></h6>
                        or <a href="{{url('contact-us')}}" class="btn btn-primary">Click Here</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- divider -->

    <!-- end divider -->

    <!-- clients -->
    <div class="container">

    </div>

</section>
@endsection
