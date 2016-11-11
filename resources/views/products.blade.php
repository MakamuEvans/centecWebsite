@extends('layout')
@section('content')
<!-- Header -->
    <div class="col-md-10 col-md-offset-1" style="background-color: white">
        <div class="row" style="margin-top: 150px;margin-left: 10px;margin-right: 10px;">
            <div class="col-md-8">
                <div class="row">
                    <ol class="breadcrumb" style="margin-bottom: 0%">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Products and Services</a></li>
                    </ol>
                </div>
            <div class="row">
                <h3 style="color: #fed136">SOLAR POWER SYSTEMS</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('img/sp.gif')}}" class="imgf" style="text-align: center">
                    </div>
                    We use nature’s free light energy from the sun to provide electricity to all forms of requirements. Our solar power systems are sourced from highly accredited European supply markets of Germany and Denmark. The solar power systems are provided on warranty terms carried by the manufacturer and adequately enforced by the SENTEC  able technical team.<br><br>
                    Systems and products in this category include off grid power solutions, grid tie solar power solutions and backup power solutions on turnkey arrangements. Other products provided on individuality include high quality solar panels, reliable batteries, charge controllers and inverters.
                </div>
            </div>
            <hr>
            <div class="row">
                <h3 style="color: #fed136">WATER HEATING SYSTEMS</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('img/waterheating.jpg')}}" class="imgf" style="text-align: center">
                    </div>
                    We provide both flat plate and evacuated tube solar water heating systems to meet both individual and commercial hot water requirements. Our systems are sourced form high standardized European markets and are supported by local highly trained technical work force for installation and maintenance services. These systems enables one to save up 65% of water heating electricity bills using free heat energy from the sun.
                </div>
            </div>
            <hr>
            <div class="row">
                <h3 style="color: #fed136">INVERTER POWER BACKUP SYSTEM</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('img/inverter.jpg')}}" class="imgf" style="text-align: center">
                    </div>
                    This system allows you to enjoy uninterrupted power supply all the times and hence allow one to carry out daily functions without fearing for power cuts & trips. They are noiseless and gives out back up power automatically without the input of a technician once installed. They’re suitable for domestic and medium to high commercial applications.
                </div>
            </div>
            <hr>
            <div class="row">
                <h3 style="color: #fed136">LED LIGHTING SOLUTIONS</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('img/led.png')}}" class="imgf" style="text-align: center">
                    </div>
                    These are light fittings that use semiconductor chips to produce high quality light at low power consumption.<br>

                    They are long lasting, heat resistant and can be used in all varieties of lighting requirements i.e. indoor, security lighting, office lighting, entertainment etc.<br>

                    They consume up to 75% less power and lasts up to 5 times more than the current conventional lighting hence making them the current choice of light fittings for both domestic, commercial and industrial applications. SEL supplies, installs and maintains high quality lights in partnership with the European partners. LED tubes, bulbs, down lights and flood lights are available at variety choices as per clients lighting requirements.
                </div>
            </div>
        </div>
            <div class="col-md-4">
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection