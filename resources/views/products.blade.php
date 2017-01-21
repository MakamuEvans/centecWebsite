@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Products and Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="">
                            <h3><span class="highlight">Solar Power</span> Systems</h3>
                        </div>

                        <img src="{{url('img/sp.gif')}}" class="img-responsive">

                        <p>
                            We use nature’s free light energy from the sun to provide electricity to all forms of requirements. Our solar power systems are sourced from highly accredited European supply markets of Germany and Denmark. The solar power systems are provided on warranty terms carried by the manufacturer and adequately enforced by the SENTEC  able technical team.<br><br>
                        </p>
                        <p>
                            Systems and products in this category include off grid power solutions, grid tie solar power solutions and backup power solutions on turnkey arrangements. Other products provided on individuality include high quality solar panels, reliable batteries, charge controllers and inverters.
                        </p>

                        <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{url('img/batteries.jpg')}}" class="img-responsive" title="Batteries">
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{url('img/inverters.jpg')}}" class="img-responsive" title="Charge Inverters">
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{url('img/solar-panel.jpg')}}" class="img-responsive" title="Solar Panels">
                                </div>
                            </div>

                    </div>

                    <div class="row">
                        <div class="">
                            <h3>Water<span class="highlight">Heating System</span></h3>
                        </div>

                        <img src="{{url('img/water.png')}}" class="img-responsive">

                        <p>
                            We provide both flat plate and evacuated tube solar water heating systems to meet both individual and commercial hot water requirements. Our systems are sourced form high standardized European markets and are supported by local highly trained technical work force for installation and maintenance services. These systems enables one to save up 65% of water heating electricity bills using free heat energy from the sun.
                        </p>

                    </div>

                    <div class="row">
                        <div class="">
                            <h3>Inverter <span class="highlight">Power Backup</span> Systems</h3>
                        </div>

                        <img src="{{url('img/inverter.jpg')}}" class="img-responsive">

                        <p>
                            This system allows you to enjoy uninterrupted power supply all the times and hence allow one to carry out daily functions without fearing for power cuts & trips. They are noiseless and gives out back up power automatically without the input of a technician once installed. They’re suitable for domestic and medium to high commercial applications.
                        </p>
                    </div>

                    <div class="row">
                        <div class="">
                            <h3><span class="highlight">LED Lighting</span> Solutions</h3>
                        </div>

                        <img src="{{url('img/led.png')}}" class="img-responsive">

                        <p>
                            These are light fittings that use semiconductor chips to produce high quality light at low power consumption.<br>

                            They are long lasting, heat resistant and can be used in all varieties of lighting requirements i.e. indoor, security lighting, office lighting, entertainment etc.<br>

                            They consume up to 75% less power and lasts up to 5 times more than the current conventional lighting hence making them the current choice of light fittings for both domestic, commercial and industrial applications. SEL supplies, installs and maintains high quality lights in partnership with the European partners. LED tubes, bulbs, down lights and flood lights are available at variety choices as per clients lighting requirements.
                        </p>
                    </div>

                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection