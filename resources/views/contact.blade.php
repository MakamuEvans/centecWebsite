@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="col-lg-8">
                <div class="row">
                    <div class="row">
                        <div class="col-md-8">
                            <h2><span class="highlight">Contact us</span></h2>
                            <div class="row">
                                <address>
                                    <strong>Sentimental Energy Ltd</strong><br>
                                    SILKWOOD office suite, <br>
                                    5th floor,<br>
                                    Ngong road,<br>
                                    Nairobi Kenya |<br>
                                </address>
                                <p>
                                    <a href="mailto:info@sentecltd.com">info@sentecltd.com</a> |<br>

                                    +254-725 445459 , 0738261640, +254-723696146
                                </p>
                            </div>
                            <h4><span class="highlight">Request Quote</span> by adding subject as <b>'QUOTE'</b></h4>
                            <hr class="colorgraph">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                        </div>
                    </div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
                    </form>
                    <hr class="colorgraph">
                </div>
                <div class="map">
                    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>

    </section>
@endsection