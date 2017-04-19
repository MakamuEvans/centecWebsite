<footer>
    <div class="container">
        <div class="row" style="text-align: center">
            {{--<div class="col-sm-3 col-lg-3">
                <hr>
                <div class="widget">
                    <h4>Request Quote</h4>
                    <h6 style="color: red" id="er">Please fill all fields</h6>
                    <h6 style="color: green" id="xs">Success! Your message send.</h6>
                    <div class="form-group multiple-form-group input-group">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="ajaxname" placeholder="Your Name" value="{{old('name')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="ajaxemail" placeholder="Your Email" value="{{old('email')}}" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="pajaxhone" placeholder="Your Phone Number" value="{{old('phone')}}" data-rule="phone" data-msg="Please enter your Number" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="sajaxubject" placeholder="Subject" value="{{old('subject')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="ajaxmessage" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message">
                                {{old('message')}}
                            </textarea>
                            <div class="validation"></div>
                        </div>
                        <script>

                            function sendmessage(){
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                var  name = $('#ajaxname').val();
                                var  email = $('#ajaxemail').val();
                                var  phone = $('#ajaxphone').val();
                                var  subject = $('#ajaxsubject').val();
                                var message= $('#ajaxmessage').val();

                                if (name == '' || email ==''|| phone==''|| subject==''){
                                    $('#er').show();
                                    $('#xs').hide();
                                }else {
                                    $('#ajaxsend').text("Sending...");
                                    $.ajax({
                                        url :'sendmailajax',
                                        type: "GET",
                                        dataType: "json",
                                        data : {name:name,email:email,phone:phone,subject:subject,message:message},
                                        success: function(data) {

                                            $('#xs').show();
                                            $('#er').hide();
                                            $('#ajaxsend').text("Send Message");

                                        }
                                    });
                                }
                            }
                        </script>

                        <div class="text-center"><button id="ajaxsend" onclick="sendmessage();" class="btn btn-primary form-control">Send Message</button></div>

                    </div>
                </div>
            </div>--}}
            <div class="col-sm-4 col-lg-4">
                <hr>
                <div class="widget">
                    <h4>Get in touch with us</h4>
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
            </div>
            <div class="col-sm-4 col-lg-4">
                <hr>
                <div class="widget">
                    <h4>Downloads</h4>
                    <ul class="link-list">
                        <li><a href="{{url('download/brochure')}}">Our Brochure</a></li>
                        <li><a href="{{url('download/water-heating-catalog')}}">Water heating Catalog</a></li>
                    </ul>
                </div>

                <div class="widget">
                    <h4>Read Latest...</h4>
                    <ul class="link-list">
                        <li><a href="{{url('why-go-solar')}}">Why Go Solar?</a></li>
                        <li><a href="{{url('how-solar-works')}}">How Solar Works.</a></li>
                        <li><a href="{{url('the-pv-module')}}">The PV System.</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-4 col-lg-4">
                <hr>
                <div class="widget">
                    <h4>Legal</h4>
                    <ul class="link-list">
                        <li>&copy; 2017, Sentimental Energy</li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career center</a></li>
                        <li><a href="{{url('our-team')}}">Our Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>