@extends('index')
@section('content')
<header>
    <div class="container">
        <div class="intro-text" >
            <div style="background-color: rgba(0,0,0,0.5)">
                <div class="intro-lead-in">Welcome To Sentimental Energy</div>
                <div class="intro-heading" style="color:#fed136;">
                    <h3>
                        Cheap, Reliable Energy for All.
                    </h3>
                </div>
            </div>

            <a href="#profile" class="page-scroll btn btn-xl">Who we Are</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="profile">
    <div class="container" style="margin-top: 0%;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="color: green;">About Us</h2>
                <p class="section-subheading text-muted" style="font-size: 15px">

                    Sentimental Energy Company Ltd (SENTEC) is a duly registered company in Kenya since 2012 and was incorporated in the year 2016. It was formed out of a desire to provide low cost energy solutions to the region’s domestic, commercial and industrialization sector with emphasis on solar energy and low load consuming Lighting solutions. We design, develop, install and maintain solar power, solar water heating, power back up systems and LED lighting solutions. We are also involved massively in sales and distribution of solar panels, charge controllers, inverters, batteries and LED lights. The company has over four years of experience in the renewable energy industry centered on actual hands on experiences in design, sizing, installation and commissioning, energy audit and management.<br><br>
                    SENTEC is owned by a team of professionals with competent skills and experience in their respective fields of energy systems design, installation and management, financial project management and sales. Our mission is to become the leader in the alternative energy movement that takes place in the region with emphasis on the low cost affordable sustainable and reliable solar power, water heating and LED lighting solutions. The objective is to be the primary resource for providing consumers with the information they need in renewable energy, energy management and energy saving while providing quality services backed by quality products and workmanship. This sums up our customer care management policy.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="values" class="bg-light-gray" style="padding-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="color: green">Our Core Values</h2>

            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading" style="color: green">Mission Statement</h4>
                <p class="text-muted">To create social economic opportunities to our clients through provision of cheap, sustainable and reliable energy solutions.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading" style="color: green">Customer Care Policy Statement</h4>
                <p class="text-muted">To be the primary resource for providing clients with information in renewable energy, energy cost management and savings while backed by quality products and services towards reducing electricity cost by 50%.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading" style="color: green">Vision Statement</h4>
                <p class="text-muted">Reliable cheap energy for all.</p>
            </div>
        </div>

        <div class="row text-center" style="margin-top: 50px">
            <div class="row">
                <h4 class="service-heading" style="color: green">We Believe In</h4>
                <hr>
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
    </div>
</section>

<!-- Team Section -->
{{--<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                    <h4>Kay Garland</h4>
                    <p class="text-muted">Lead Designer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>Diana Pertersen</h4>
                    <p class="text-muted">Lead Developer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>--}}

<!-- Contact Section -->
<section id="contact" style="padding-top: 50px;background-color: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="color: green">Contact Us</h2>
                <h3 class="section-subheading text-muted">Email Us. <h6>(* required)</h6></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    @endsection
