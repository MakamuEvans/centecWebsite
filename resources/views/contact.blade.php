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
                                    Nextgen Mall, <br>
                                    2nd floor,<br>
                                    Mombasa road,<br>
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
                    @if (session('status'))
                        <div class="alert alert-success" style="text-align: center">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('/sendmail')}}" method="post" role="form" class="contactForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" value="{{old('phone')}}" data-rule="phone" data-msg="Please enter your Number" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">
                                {{old('message')}}
                            </textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
                    </form>
                    <hr class="colorgraph">
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.013527792951!2d36.8438775!3d-1.3238323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9dacf93424a76a51!2sNextgen+Mall!5e0!3m2!1sen!2s!4v1496496079732" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>

    </section>
@endsection