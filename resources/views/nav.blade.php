<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll navw" href="{{url('/#page-top')}}" style="margin-bottom: 10px">
            <img src="{{url('img/logo.png')}}" class="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="font-size: 11px;font-stretch: expanded">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#profile">About Us</a>
                </li>
                <li>
                    <a class="page-scroll" href="#values">Our Core Values</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact Us</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('partners')}}">Our Partners</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('products-and-services')}}">Products and Services</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Solar Explained <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="background-color: green">
                        <li class="pull-right athe">
                            <a href="{{url('how-solar-works')}}">How Solar Works</a>
                            <a href="{{url('the-pv-module')}}">The PV System</a>
                            <a href="{{url('why-go-solar')}}">Why Go Solar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
